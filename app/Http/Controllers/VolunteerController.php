<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function index(){

            return view('livewire.add-volunteer');

    }

    public function store(){

        return view('livewire.add-volunteer');

    }
}
