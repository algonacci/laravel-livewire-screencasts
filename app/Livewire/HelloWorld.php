<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class HelloWorld extends Component
{
    public $name = 'Jelly';
    public $age;
    public $loud = false;
    public $greeting = ["Hello"];

    public $names = ["Jelly", "Man", "Chico"];

    public function resetName($name = "Chico")
    {
        $this->name = $name;
    }

    public function mount(Request $request, $age)
    {
        $this->age = $request->input('age', $age);
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
