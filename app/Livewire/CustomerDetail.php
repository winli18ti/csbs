<?php

namespace App\Livewire;

use Livewire\Component;

class CustomerDetail extends Component
{

  public $id;

  public $currentTab = 'profile';

  public function mount($id)
  {
    $this->id = $id;
  }

  public function render()
  {
    return view('livewire.customerdetail');
  }

  public function navigate($tab)
  {
    $this->currentTab = $tab;
  }
// -----------------------------------------------------------------------------------------------------------------------------------
// Alert 
  public function alertmsg($title, $msg, $icon){
    $this->dispatch('swal', [
        'title' => $title,
        'text' => $msg,
        'icon' => $icon,
    ]);
  }
  public function alerttoaster($title, $icon){
    $this->dispatch('toast', [
        'title' => $title,
        'icon' => $icon,
    ]);
  }
}
