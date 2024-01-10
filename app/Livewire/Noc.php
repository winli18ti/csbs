<?php

namespace App\Livewire;

use App\Exports\SummaryExport;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class Noc extends Component
{
  public $mode;

  public function mount()
  {
    if (request()->is('noc_tools')) {
      $this->mode = 'noctools';
    }
  }

  public function render()
  {
    return view('livewire.noc');
  }
}
