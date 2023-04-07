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
    public $selectedUserID;
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
            $this->selectedUserID = $this->selectedUserID ?: "";
        

    }
    public function UserRecord($data)
    {
        
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->address = $data['address'];
        $this->phone = $data['phone'];
        $this->selectedUserID = $data['id'];
    }
  
    public function update()
    {
        $this->validate([
            'name'=> 'required|string',
            'email'=> 'required|email',
            'address'=> 'required|string',
            'phone'=> 'required|string',
        ]);

        $getUser = AddEmploye::find($this->selectedUserID);
        $getUser->name = $this->name;
        $getUser->email = $this->email;
        $getUser->address = $this->address;
        $getUser->phone = $this->phone;
        $getUser->save();
        
        $this->reset();
        $this->dispatchBrowserEvent('closeModal');
        
        $this->emit('refreshTable');

    }
}
