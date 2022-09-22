<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dropdown extends Component
{
    public $type;
    public $options;
    public $selectedValue;

    public function render()
    {
        return view('livewire.dropdown', [
            'title' => ucfirst($this->type),
            'options' => $this->options,
        ]);
    }

    public function valueChangeHandler($value) {
        $this->emit('dropdown-value-changed', $this->type, $value);
    }
}
