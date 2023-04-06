<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AddEmploye;
class AddEmployee extends Component
{
    public $name;
    public $email;
    public $address;
    public $phone;
    public $allEmploye;

    public function render()
    {
        return view('livewire.add-employee');
    }
    public function mount()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->address = '';
    }

    public function store()
    {
        $this->validate([
            'name'=> 'required|string',
            'email'=> 'required|email',
            'address'=> 'required|string',
            'phone'=> 'required|string',
        ]);

        AddEmploye::create([
            'name'=>$this->name,
            'email' => $this->email,
            'address' => $this->address,
            'phone' => $this->phone,
        ]);
        $this->reset();
        $this->dispatchBrowserEvent('closeModal');
        
        $this->emit('refreshTable');

        // $this->render();

    }

}
