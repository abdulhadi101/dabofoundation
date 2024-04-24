<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class AddVolunteerForm extends Form
{
    public  $name = '';

     public $phone_number = '';
    public  $email = '';

    public $state = '';
    public $address = '';

}
