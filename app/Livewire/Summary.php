<?php

namespace App\Livewire;

use App\Exports\SummaryExport;
use Illuminate\Http\Request;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class Summary extends Component
{
  public $mode;

  public $filterMonth, $filterYear, $filterDate, $searchTerm;

  public function mount()
  {
    if (request()->is('summary_invoice')) {
      $this->mode = 'invoice';
    } else if (request()->is('summary_paid_invoice')) {
      $this->mode = 'paidinvoice';
    } else if (request()->is('summary_paid_detail')) {
      $this->mode = 'paiddetail';
    } else if (request()->is('summary_payment')) {
      $this->mode = 'payment';
    } else if (request()->is('summary_collector')) {
      $this->mode = 'collector';
    }
  }

  public function render()
  {
    return view('livewire.summary');
  }

  public function export()
  {
    return Excel::download(new SummaryExport($this->mode), 'summary.xlsx');
  }
}
