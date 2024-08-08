<?php

namespace App\Filament\Pages;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Forms\Form;
use Filament\Forms;

use Filament\Actions;
use Illuminate\Support\Facades\Hash;

class Profile extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.profile';
    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(
            auth()->user()->attributesToArray()
        );
    }
    //...
    public function form(Form $form): Form
    {
        return $form
            ->schema([

            Forms\Components\Tabs::make('User Detail')
                ->tabs([
                    Forms\Components\Tabs\Tab::make('User Information')
                        ->schema([
                            Forms\Components\Group::make()->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('email')
                                    ->email()
                                    ->required()
                                    ->maxLength(255),
//                                Forms\Components\TextInput::make('phone')
//                                    ->tel()
//                                    ->required()
//                                    ->maxLength(255),

//                                Forms\Components\Select::make('role')
//                                    ->required()
//                                    ->disabled()
//                                    ->options([
//                                        'doctor' => 'Doctor',
//                                        'receptions' => 'Reception',
//                                        'admin' => 'Admin',
//                                        'lab' => 'Laboratory',
//                                    ]),

                                Forms\Components\TextInput::make('password')
                                    ->password()

                                    ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                                    ->dehydrated(fn ($state) => filled($state))
                                    ->required(fn (string $context): bool => $context === 'create')

                                    ->maxLength(255),

                            ])->columns(2),
                        ]),
                    Forms\Components\Tabs\Tab::make('Profile Information')
                        ->schema([
                            Forms\Components\Group::make()->schema([
                                Forms\Components\TextInput::make('title')

                                    ->maxLength(255),
                                Forms\Components\TextInput::make('speciality')
                                    ->maxLength(255),

                                Forms\Components\MarkdownEditor::make('bio')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('avatar')
                                    ->image()
                                    ->hiddenLabel()
                                    ->columnSpanFull(),
                            ])->columns(2),
                        ])
                ])->columnSpanFull(),

        ])
            ->statePath('data')
            ->model(auth()->user());
    }

    protected function getFormActions(): array
    {
        return [
            Actions\Action::make('Update')
                ->color('primary')
                ->submit('Update'),
        ];
    }

    public function update()
    {
        auth()->user()->update(
            $this->form->getState()
        );
        Notification::make()
            ->title('Profile updated!')
            ->success()
            ->send();
    }
}
