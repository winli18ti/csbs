<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Collector;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerInvoices extends Component
{
  use WithPagination; protected $paginationTheme = 'bootstrap';

  public $userId;

  public $mode = 'hero';

  public $customerid, $member, $name;

  public $collectorData;

  public $id, $billnumber, $period, $paytype, $subsperiod, $billdate, $duedate,
    $paiddate, $collectorid, $collectorname, $username, $servicename, $bill, $status,
    $info;

  public $cartData;
  public $invoice_type, $invoice_info, $invoice_price;
  
  public $invoiceDetailData;

  public $invoiceDataType = array(
    'biaya denda' => 'Biaya Denda (+)',
    'biaya jasa kolektor' => 'Biaya Jasa Kolektor (+)',
    'biaya lain' => 'Biaya Lain-lain (+)',
    'biaya layanan' => 'Biaya Layanan (+)',
    'biaya material' => 'Biaya Material (+)',
    'biaya pemasangan' => 'Biaya Pemasangan (+)',
    'biaya pinalti' => 'Biaya Pinalti (+)',
    'diskon layanan' => 'Diskon Layanan (-)',
    'penambahan tv' => 'Penambahan TV (+)',
    'penyesuaian biaya' => 'Penyesuaian Biaya (-)',
    'penyesuaian downgrade' => 'Penyesuaian Downgrade (-)',
    'penyesuaian upgrade' => 'Penyesuaian Upgrade (+)',
  );

  public function mount($userid)
  {
    $this->userId = Auth::user()->id;
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
    $this->billnumber = !empty($data->billnumber) ? $data->billnumber : '-';
    $this->period = !empty($data->billdate) ? date('F Y', strtotime($data->billdate)) : '-';
    $this->paytype = !empty($data->paytype) ? $data->paytype : '-';
    $this->subsperiod = !empty($data->subsperiod) ? 'Per '.$data->subsperiod.' bulan' : '-';
    $this->duedate = !empty($data->duedate) ? date('d F Y', strtotime($data->duedate)) : '-'; 
    $this->paiddate = !empty($data->paiddate) ? date('d F Y', strtotime($data->paiddate)) : '-' ;
    $this->collectorname = !empty($data->collector->name) ? $data->collector->name : '-' ;
    $this->username = !empty($data->user->name) ? $data->user->name : '-';
    $this->servicename = !empty($data->service->name) && !empty($data->service->info) ? $data->service->name.' - '.$data->service->info : '-';
    $this->bill = !empty($data->bill) ? $data->bill : '-';
    $this->invoiceDetailData = InvoiceDetail::where('invoiceid', $id)->get();
  }

  public function edit($id){
    \Cart::session($this->userId.'-edit')->clear();
    $this->navigate('edit');
    $data = Invoice::find($id);
    $this->id = $data->id;
    $this->billnumber = !empty($data->billnumber) ? $data->billnumber : '-';
    $this->period = !empty($data->billdate) ? date('F Y', strtotime($data->billdate)) : '-';
    $this->subsperiod = !empty($data->subsperiod) ? 'Per '.$data->subsperiod.' bulan' : '-';
    $this->servicename = !empty($data->service->name) && !empty($data->service->info) ? $data->service->name.' - '.$data->service->info : '-';
    $this->billdate = !empty($data->billdate) ? $data->billdate : '-';
    $this->collectorid = !empty($data->collectorid) ? $data->collectorid : '-';
    $this->status = !empty($data->status) ? $data->status : '-';
    $this->info = !empty($data->info) ? $data->info : '-';
    $this->invoiceDetailData = InvoiceDetail::where('invoiceid', $id)->get();
    foreach($this->invoiceDetailData as $datas){
      \Cart::session($this->userId.'-edit')->add(array(
        'id' => $datas->id,
        'name' => $datas->type,
        'price' => $datas->price,
        'quantity' => 1,
        'attributes' => array(
          'info' => $datas->info
        ),
      ));
    }
    $this->cartData = \Cart::session($this->userId.'-edit')->getContent();
    // dd($this->cartData);
  }
  public function editTypeCart($slug, $type){
    dd($slug, $type);
    \Cart::session($this->userId.'-edit')->update($slug,[
      'name' => $type,
    ]);
  }

  public function editInfoCart($slug, $info){
    dd($slug, $info);
    \Cart::session($this->userId.'-edit')->update($slug,[
      'attributes' => array(
        'info' => $info,
      )
    ]);
  }

  public function editPriceCart($slug, $price){
    dd($slug, $price);
    \Cart::session($this->userId.'-edit')->update($slug,[
      'price' => $price,
    ]);
  }

  public function addToCart(){
    $this->validate([
      'invoice_type' => 'required',
      'invoice_info' => 'required',
      'invoice_price' => 'required',
    ],[
      'invoice_type.required' => 'Tipe perlu dipilih',
      'invoice_info.required' => 'Keterangan tidak boleh kosong',
      'invoice_price.required' => 'Harga tidak boleh kosong',
    ]);
    // dd($this->invoice_info, $this->invoice_type, $this->invoice_price);
    $data = InvoiceDetail::create([
      'type' => $this->invoice_type,
      'info' => $this->invoice_info,
      'price' => $this->invoice_price,
      'invoiceid' => $this->id,
    ]);
    \Cart::session($this->userId.'-edit')->add(array(
      'id' => $data->id,
      'name' => $data->type,
      'price' => $data->price,
      'quantity' => 1,
      'attributes' => array(
        'info' => $data->info
      ),
    ));
    $this->invoice_type = ''; $this->invoice_info = ''; $this->invoice_price = '';
    $this->navigate('hero');
    $this->edit($this->id);
  }
}
