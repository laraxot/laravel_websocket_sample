<?php

namespace App\Http\Livewire;

use App\Events\NewTrade;
use Livewire\Component;
use App\Events\OrderShipped;

class Broad extends Component
{
    protected $listeners = ["echo:trades,NewTrade" => 'notifyNewOrder'];

    public function render()
    {
        return view('livewire.broad');
    }

    public function try()
    {
        session()->flash('message', 'try ['.now().']');
        //event(new OrderShipped());
        NewTrade::dispatch('test');
        //broadcast(new OrderShipped());
    }

    public function notifyNewOrder()
    {
        session()->flash('message', 'notifyNewOrder ['.now().']');
        dd('fine');
        //$this->showNewOrderNotification = true;
    }
}
