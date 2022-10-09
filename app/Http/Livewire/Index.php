<?php

namespace App\Http\Livewire;

use App\Helpers\Tools;
use Livewire\Component;
use Session;

class Index extends Component
{
    public function __construct($id = null)
    {
        parent::__construct($id);
        Tools::instance()->setup();
    }

    public function render()
    {
        return view('livewire.index')
            ->extends('layouts.master')
            ->section('content');
    }
}
