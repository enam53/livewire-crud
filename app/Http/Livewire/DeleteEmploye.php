<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AddEmploye;

class DeleteEmploye extends Component
{
    protected $listeners = ['DeleteUserRecord'];
    public $selectedUser = [];
    public $selectedUserID;

    public function render()
    {
        return view('livewire.delete-employe');
    }
    public function mount()
    {
            $this->selectedUserID = $this->selectedUserID ?: "";

    }
    public function DeleteUserRecord($data)
    {
        $this->selectedUserID = $data['id'];
    }
    public function delete()
    {
        $deleteUser = AddEmploye::find($this->selectedUserID);
        $deleteUser->delete();

        $this->dispatchBrowserEvent('closeModal');
        $this->emit('refreshTable');
    }
}
