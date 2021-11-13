<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class SiteConfig extends Component
{
    public $state;
    public function store()
    {
        dd('done');
    }
    public function render()
    {
        return view('livewire.backend.site-config');
    }
}
