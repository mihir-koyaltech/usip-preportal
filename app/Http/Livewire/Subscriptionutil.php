<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Subscriptionutil extends Component
{   
    public $selectedUsers;
    public $selectedNumbers;
    public $selectedCalls;
    public $didWork;

    protected $listeners = ['dropdown-value-changed' => 'valueChangeHandler', 'refreshPage' => '$refresh'];
    public function render()
    {
        return view('livewire.subscriptionutil',[
            'usersOptions' => [1,2,3,4,5,6],
            'numbersOptions' => [1,2,3,4,5,6],
            'callsOptions' => [3,4,5],
        ]);
    }

    public function valueChangeHandler($type, $value) {
        switch ($type) {
            case 'users':
                $this->selectedUsers = $value;
                $this->didWork = true;
                $this->emit('refreshPage');
                // API CALL
                break;
            case 'numbers':
                $this->selectedNumbers = $value;
                // API CALL
                break;
            case 'calls':
                $this->selectedCalls = $value;
                // API CALL
                break; 
            default:
                break;
        }
    }
}
