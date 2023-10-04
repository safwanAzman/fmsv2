<?php

namespace App\Livewire\Reversal;

use Livewire\Component;

class ThirdParty extends Component
{
    public function render()
    {
        return view('livewire.reversal.third-party')->extends('layouts.main');
    }
}
