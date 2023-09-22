<?php

namespace App\Livewire;

use Livewire\Component;

class Complains extends Component
{
    public $id, $code, $member, $customerid, $address, 
    $servicetype, $priority, $acceptedby, $status;

    public function render()
    {
        return view('livewire.complains');
    }
}
