<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Wizard extends Component
{
    public $currentStep = 1;
    public $completed = false;
    public $numberOptions=['1234-5678','5678-1234'];
    public $planOptions = ['basic','advanced'];
    public $users, $selectedNumbers = [], $plan, $numbersType='local';
    public $successMessage = '';

    public function render()
    {
        return view('livewire.wizard');
    }

    public function numbersTypeChange() {
        // API CALL
        $this->numbersType='tollFree';
        $this->numberOptions = ['abcd-pqrs','aaaa-bbbb'];
    }

    public function numbersSelected() {
        $this->validate([
            'selectedNumbers' => 'required|array|min:1'
        ]);
        $this->currentStep = 2;
    }

    public function planChange($planIndex) {
        $this->plan = $this->planOptions[$planIndex];
    }

    public function planSelected() {
        $this->validate([
            'plan' => 'required'
        ]);

        $this->currentStep = 3;
    }

    public function usersSelected() {
        $this->validate([
            'users' => 'required'
        ]);

        $this->currentStep = 4;
    }

    public function submitForm(){
        // REDIRECT TO CHECKOUT
        $this->completed=true;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function clearForm()
    {
        $this->currentStep = 1;
        $this->completed = false;
        $this->users = 0;
        $this->selectedNumbers = [];
        $this->plan='';
        $this->numbersType='local';
    }

    public function numberClicked($numberIndex) {
        array_push($this->selectedNumbers,$this->numberOptions[$numberIndex]);
    }
}
