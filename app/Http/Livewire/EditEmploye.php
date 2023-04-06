<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AddEmploye;

class EditEmploye extends Component
{
    public $name;
    public $email;
    public $address;
    public $phone;
    public $selectedUser = [];
    protected $listeners = ['UserRecord'];

    public function render()
    {
        return view('livewire.edit-employe');

    }

    public function mount()
    {
       

            $this->name = $this->name ?: "";
            $this->email = $this->email ?: "";
            $this->address = $this->address ?: "";
            $this->phone = $this->phone ?: "";
        

    }
    public function UserRecord($data)
    {
        
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->address = $data['address'];
        $this->phone = $data['phone'];
    }
  
    public function update()
    {

    }
}
