<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Home extends Component
{
    public function test()
    {
        dd('done');
    }
    public function render()
    {
        return view('test2')->layout('test');
    }
}
