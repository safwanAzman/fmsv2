<?php

namespace App\Livewire\Teller\PaymentContribution;

use Livewire\Component;

class PaymentContribution extends Component
{
    public  $type = 'cheque';

    public function selectType($type){
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.teller.payment-contribution.payment-contribution')->extends('layouts.main');
    }
}
