<?php

namespace App\Livewire;

use App\Livewire\Forms\AddVolunteerForm;
use App\Models\Volunteer;
use Livewire\Component;

class AddVolunteer extends Component
{

    public AddVolunteerForm $form;

    public function save()
    {

      $data =  Volunteer::create(
            $this->only(['name', 'phone_number', 'email', 'state', 'address'])
        );
      dd($data);

        session()->flash('status', 'Form Submitted Successfully.');

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.add-volunteer');
    }
}
