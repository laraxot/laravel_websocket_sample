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
       // OrderShipped::dispatch();
        event(new OrderShipped);
    }

    public function notifyNewOrder()  {
        dd('fine');
        //$this->showNewOrderNotification = true;
    }
}
