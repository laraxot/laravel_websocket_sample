<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Events\OrderShipped;

class Broad extends Component
{
    protected $listeners = ['echo:public,OrderShipped' => 'notifyNewOrder'];

    public function render()
    {
        return view('livewire.broad');
    }

    public function try(){
        session()->flash('message', 'try ['.now().']');
       // OrderShipped::dispatch();
        event(new OrderShipped);
    }

    public function notifyNewOrder()  {
        session()->flash('message', 'notifyNewOrder ['.now().']');
        dd('fine');
        //$this->showNewOrderNotification = true;
    }
}