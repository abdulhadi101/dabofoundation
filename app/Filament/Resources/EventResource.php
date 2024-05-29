<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;

use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components;

use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationGroup = 'Event';

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\FileUpload::make('thumbnail')
                    ->required()
                    ->image()
                    ->columnSpanFull()
                    ->imageEditor(),



                Forms\Components\TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->maxLength(255)
                    ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),


                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->dehydrated()
                    ->required()
                    ->maxLength(255)
                    ->unique(Event::class, 'slug', ignoreRecord: true),

                Forms\Components\DatePicker::make('event_date')
                    ->required(),
                Forms\Components\TimePicker::make('event_time')
                    ->required(),
                Forms\Components\Toggle::make('is_published')
                    ->label('Publish')
                    ->required(),
                Forms\Components\MarkdownEditor::make('description')
                    ->label('Content')
                    ->required()

                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('event_images')
                    ->label('Pictures from Event')
                    ->required()
                    ->image()
                    ->imageEditor()
                    ->multiple()
                    ->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->label('Published')
                    ->boolean(),
                Tables\Columns\TextColumn::make('event_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('event_time'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
//    public static function infolist(Infolist $infolist): Infolist
//    {
//        return $infolist
//            ->schema([
//                Components\Section::make()
//                    ->schema([
//                        Components\Split::make([
//                            Components\Grid::make(2)
//                                ->schema([
//                                    Components\Group::make([
//                                        Components\TextEntry::make('title'),
//                                        Components\TextEntry::make('slug'),
//                                        Components\TextEntry::make('published_at')
//                                            ->badge()
//                                            ->date()
//                                            ->color('success'),
//                                    ]),
//                                    Components\Group::make([
//                                        Components\TextEntry::make('author.name'),
//                                        Components\TextEntry::make('category.name'),
//                                        Components\SpatieTagsEntry::make('tags'),
//                                    ]),
//                                ]),
//                            Components\ImageEntry::make('image')
//                                ->hiddenLabel()
//                                ->grow(false),
//                        ])->from('lg'),
//                    ]),
//                Components\Section::make('Content')
//                    ->schema([
//                        Components\TextEntry::make('content')
//                            ->prose()
//                            ->markdown()
//                            ->hiddenLabel(),
//                    ])
//                    ->collapsible(),
//            ]);
//    }
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
