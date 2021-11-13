<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class Admin extends Component
{
    public $sms;
    public function store()
    {
        dd($this->sms);
    }
    public function render()
    {
        return view('livewire.backend.admin');
    }
}
