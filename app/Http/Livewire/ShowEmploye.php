<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AddEmploye;
class ShowEmploye extends Component
{
    public $allEmploye;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $selectedUser;

    public function render()
    {
        return view('livewire.show-employe');
    }
    public function mount()
    {
        $this->allEmploye = AddEmploye::all();

    }
    public function edit($id)
    {
        $this->selectedUser = AddEmploye::findOrFail($id);
        $this->emit('UserRecord',$this->selectedUser);


    }

    protected $listeners = [
        'refreshTable' => 'refreshData',
    ];

    public function refreshData()
    {
        $this->allEmploye = AddEmploye::all();
    }
}
