<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChangeStatus extends Component
{
    public $user;

    public function changeStaus()
    {
        switch ($this->user->status) {
            case 0:
                $this->user->status = 1;
                break;
            case 1:
                $this->user->status = 0;
                break;
        }
        $this->user->save();
    }

    public function render()
    {
        return view('livewire.change-status');
    }
}
