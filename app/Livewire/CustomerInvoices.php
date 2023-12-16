<?php

namespace App\Livewire;

use App\Models\Collector;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerInvoices extends Component
{
  use WithPagination; protected $paginationTheme = 'bootstrap';

  public $mode = 'hero';

  public $customerid, $member, $name;

  public $collectorData;

  public $id, $billnumber, $period, $paytype, $subsperiod, $billdate, $duedate,
    $paiddate, $collectorid, $collectorname, $username, $servicename, $bill, $status,
    $info;
  
  public $invoiceDetailData;

  public function mount($userid)
  {
    $this->customerid = $userid;
  }

  public function render()
  {
    $invoicesData = Invoice::where('customerid', $this->customerid)->select('*');
    $this->setData();
    return view('livewire.customerinvoices',[
      'invoicesData' => $invoicesData->paginate(10, pageName: 'custinvoice-page'),
    ]);
  }

  public function setData()
  {
    $data = Customer::find($this->customerid);
    $this->member = $data->member;
    $this->name = $data->name;
    $this->collectorData = Collector::get();
  }

  public function navigate($mode)
  {
    $this->mode = $mode;
  }

  public function view($id)
  {
    $this->navigate('view');
    $data = Invoice::find($id);
    $this->id = $data->id;
    $this->billnumber = $data->billnumber;
    $this->period = date('F Y', strtotime($data->billdate));
    $this->paytype = $data->paytype;
    $this->subsperiod = 'Per '.$data->subsperiod.' bulan';
    $this->duedate = date('d F Y', strtotime($data->duedate));
    $this->paiddate = $data->paiddate;
    $this->collectorname = $data->collector->name;
    $this->username = $data->user->name;
    $this->servicename = $data->service->name.' - '.$data->service->info;
    $this->bill = $data->bill;
    // $this->invoiceDetailData = InvoiceDetail::where('invoiceid', $id)->select('*');
  }

  public function edit($id)
  {
    $this->navigate('edit');
    $data = Invoice::find($id);
    $this->id = $data->id;
    $this->billnumber = $data->billnumber;
    $this->period = date('F Y', strtotime($data->billdate));
    $this->subsperiod = 'Per '.$data->subsperiod.' bulan';
    $this->servicename = $data->service->name.' - '.$data->service->info;
    $this->billdate = $data->billdate;
    $this->collectorid = $data->collectorid;
    $this->status = $data->status;
    $this->info = $data->info;
  }
}
