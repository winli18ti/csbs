<?php

namespace App\Livewire;

use Livewire\Component;

class CustomerDetail extends Component {

  public $id;
  
  public $currentTab = 'profile';

  public function mount($id) {
    $this->id = $id;
  }

  public function render() {
    return view('livewire.customerdetail');
  }

  public function navigate($tab) {
    $this->currentTab = $tab;
  }
}
?>