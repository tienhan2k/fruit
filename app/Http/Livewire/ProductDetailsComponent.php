<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.product-details-component')->layout('layouts.base');
    }
}
