<?php

namespace App\Livewire;

use App\Models\Collector;
use App\Models\Customer;
use App\Models\Invoice;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerInvoices extends Component
{
  use WithPagination; protected $paginationTheme = 'bootstrap';

  public $mode = 'hero';

  public $id, $member, $name, $billdate, $collectorid;

  public $collectorData;

  public function mount($userid)
  {
    $this->id = $userid;
  }

  public function render()
  {
    $invoicesData = Invoice::where('customerid', $this->id)->select('*');
    $this->setData();
    return view('livewire.customerinvoices',[
      'invoicesData' => $invoicesData->paginate(10, pageName: 'custinvoice-page'),
    ]);
  }

  public function setData()
  {
    $data = Customer::find($this->id);
    $this->member = $data->member;
    $this->name = $data->name;
    $this->collectorData = Collector::get();
  }

  public function navigate($mode)
  {
    $this->mode = $mode;
  }
}
