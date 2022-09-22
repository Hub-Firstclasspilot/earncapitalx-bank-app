<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InvoicePage extends Component
{

    public $showInvoice = 'd-none';

    public $amount;

    public $charge;

    public $fundDetails = [];

    public function handleAmount()
    {
        $this->showInvoice = 'd-block';

        $this->charge = $this->amount * 0.0074;
    }


    public function render()
    {
        return view('livewire.invoice-page');
    }
}
