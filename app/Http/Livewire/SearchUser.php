<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUser extends Component
{

    public $search;
    public $users;

    public function mount()
    {
        $this->search = "";
        $this->users = [];
    }

    public function render()
    {
        $this->users = User::where('name', 'like', "%$this->search%")
            ->orwhere('lastname', 'like', "%$this->search%")
            ->orwhere('email', 'like', "%$this->search%")->get();
        return view('livewire.search-user', ['users' => $this->users]);
    }
}
