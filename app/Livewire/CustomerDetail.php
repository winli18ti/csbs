<?php

namespace App\Livewire;

use Livewire\Component;

class CustomerDetail extends Component {
  
  public $currentTab = 'profil';

  public function mount() {}

  public function render() {
    return view('livewire.pelanggan-detail');
  }

  public function navigate($tab) {
    $this->currentTab = $tab;
  }
}
?>