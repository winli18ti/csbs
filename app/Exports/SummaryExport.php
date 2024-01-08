<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SummaryExport implements FromView,ShouldAutoSize
{
  use Exportable;
  protected $mode;

  function __construct($mode) {
    $this->mode = $mode;
  }

  public function view() : View
  {
    return view('livewire.summary.'.$this->mode);
  }
}
