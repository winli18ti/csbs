<?php

namespace App\Livewire;

use App\Models\Customer;
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
    if (!empty($this->searchTerm)) {
      $customers = Customer::orderby('id', 'desc')->select('id')
        ->where('name', 'like', "%" . $this->searchTerm . "%")
        ->get();

      foreach($customers as $customer) {
        $table->orWhere('customerid', $customer->id);
      }
    }
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
      $table->whereDay('billdate', $this->filterDay);
    }
    if (!empty($this->filterMonth)) {
      $table->whereMonth('billdate', $this->filterMonth);
    }
    if (!empty($this->filterYear)) {
      $table->whereYear('billdate', $this->filterYear);
    }
    return view('livewire.invoices', [
      'table' => $table->paginate(10, pageName: 'invoice-page'),
    ]);
  }

  public function navigate($mode)
  {
    $this->mode = $mode;
  }
}
