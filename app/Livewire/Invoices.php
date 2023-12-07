<?php

namespace App\Livewire;

use App\Models\Invoice;
use Livewire\Component;
use Livewire\WithPagination;

class Invoices extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';

  public $mode = 'table';

  public $filterType = '', $filterService = '', $filterSubsperiod = '', $filterStatus = '',
    $filterDay = '', $filterMonth = '', $filterYear = '', $searchTerm = '';

  public function render()
  {
    $table = Invoice::orderby('id', 'desc')->select('*');
    if (!empty($this->filterType)) {
      $table->where(['type' => $this->filterType]);
    }
    if (!empty($this->filterService)) {
      $table->where(['servicetype' => $this->filterService]);
    }
    if (!empty($this->filterSubsperiod)) {
      $table->where(['subsperiod' => $this->filterSubsperiod]);
    }
    if (!empty($this->filterStatus)) {
      $table->where(['status' => $this->filterStatus]);
    }
    if (!empty($this->filterDay)) {
    }
    if (!empty($this->filterMonth)) {
    }
    if (!empty($this->filterYear)) {
    }
    if (!empty($this->searchTerm)) {
    }
    $table = $table->paginate(20);
    return view('livewire.invoices', compact('table'));
  }

  public function navigate($mode)
  {
    $this->mode = $mode;
  }
}
