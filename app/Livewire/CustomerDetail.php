<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\CustomerService;
use App\Models\Internet;
use App\Models\Marketer;
use App\Models\TvAnalog;
use App\Models\TvDigital;
use App\Models\Complain;
use App\Models\Invoice;
use App\Models\Collector;
use Carbon\Carbon;
use Livewire\Component;

class CustomerDetail extends Component {

  public $id, $member, $name, $company, $identity, 
  $address, $email, $vip, $effectivedate,
  $node, $marketerid, $homephone, $officephone, $cellphone,
  $servicetype, $specialprice, $specialinfo, $paytype,
  $billperiod, $subsperiod, $tvcount, $notes, $status;
  
  public $currentTab = 'profile';

  public $marketerData, $customerServiceData, $tvAnalogData, $tvDigitalData, $internetData;
  // Public var yang digunakan untuk form komplain
  public $complain_status, $complain_priority, $service_type, $report, $source, $reporter, $report_subject, $customer_complain, $completion, $complain_id;
  // Public var yang digunakan untuk mengisikan data db dalam bentuk eloquent model
  public $complainData, $collectorData;

  public $invoicesData;

  public $nodes = [
    'NUL',
    'FN 1',
    'FN 2',
    'FN 3',
    'FN 4',
    'FN 5',
    'FN 6',
    'FN 7',
    'FN 8',
    'FN 9',
    'FN 10',
    'FN 11',
    'FN 12',
    'FN 13',
    'FN 14',
    'FN 15',
    'FN 16',
    'FN 17',
    'FN 18',
    'FN 19',
    'FN 20',
    'FN 21',
    'FN 22',
    'FN 23',
    'FN 24',
    'FN 25',
    'FN 26',
    'FN 27',
    'FN 28',
    'FN 29',
    'FN 30',
    'FN 31',
    'FN 32',
    'ON 1',
    'ON 2',
    'ON 3',
    'ON 4',
    'ON 5',
    'ON 6',
    'ON 7',
    'ON 8',
    'ON 9',
    'ON 10',
    'ON 11',
    'ON 12',
    'ON 13',
    'ON 14',
    'ON 15',
    'ON 16',
    'ON 17',
    'ON 18',
    'ON 19',
    'ON 20',
    'ON 21',
    'ON 22',
    'ON 23',
    'ON 24',
    'ON 25',
    'ON 26',
    'ON 27',
    'ON 28',
    'ON 29',
    'ON 30',
    'ON 31',
    'ON 32',
    'AKS',
    'SAT',
    'HE',
  ];

  public function mount($id) {
    $this->id = $id;
    $this->collectorData = Collector::get();
  }

  public function render() {
    $data = Customer::find($this->id);
    $this->member = $data->member;
    $this->name = $data->name;

    if ($this->currentTab === 'profile') {
      $this->marketerData = Marketer::get();
      $this->company = $data->company;
      $this->identity = $data->identity;
      $this->address = $data->address;
      $this->email = $data->email;
      $this->vip = $data->vip;
      $this->effectivedate = Carbon::create($data->effectivedate)->format('Y-m-d');
      $this->node = $data->node;
      $this->marketerid = $data->marketerid;
      $this->homephone = $data->homephone;
      $this->officephone = $data->officephone;
      $this->cellphone = $data->cellphone;
      $this->servicetype = $data->servicetype;
      $this->specialprice = $data->specialprice;
      $this->specialinfo = $data->specialinfo;
      $this->paytype = $data->paytype;
      $this->billperiod = $data->billperiod;
      $this->subsperiod = $data->subsperiod;
      $this->tvcount = $data->tvcount;
      $this->notes = $data->notes;
      $this->status = $data->status;
    }
    else if ($this->currentTab === 'service') {
      $this->status = $data->status;
      $this->address = $data->address;
      $this->customerServiceData = CustomerService::where('customerid', $this->id)->get();
      $this->tvAnalogData = TvAnalog::where('customerid', $this->id)->get();
      $this->tvDigitalData = TvDigital::where('customerid', $this->id)->get();
      $this->internetData = Internet::where('customerid', $this->id)->get();
      
    }
    else if ($this->currentTab === 'invoice') {
      $this->invoicesData = Invoice::where('customerid', $this->id)->get();
    }
    else if ($this->currentTab === 'spk') {
      
    }
    else if ($this->currentTab === 'complain') {
        
    }
    return view('livewire.customer-detail');
  }

  public function navigate($tab) {
    if($tab === 'complain') { $this->varEmpty(); }
    $this->currentTab = $tab;
  }

  public function update() {
    if ($this->vip != 1) $this->vip = 0;
    Customer::where('id', $this->id)->update([
      'member' => $this->member,
      'name' => $this->name,
      'company' => $this->company,
      'identity' => $this->identity,
      'address' => $this->address,
      'city' => $this->city,
      'email' => $this->email,
      'vip' => $this->vip,
      'effectivedate' => $this->effectivedate,
      'node' => $this->node,
      'marketerid' => $this->marketerid,
      'homephone' => $this->homephone,
      'officephone' => $this->officephone,
      'cellphone' => $this->cellphone,
      'servicetype' => $this->servicetype,
      'specialprice' => $this->specialprice,
      'specialinfo' => $this->specialinfo,
      'paytype' => $this->paytype,
      'billperiod' => $this->billperiod,
      'subsperiod' => $this->subsperiod,
      'tvcount' => $this->tvcount,
      'notes' => $this->notes,
    ]);

    session()->flash('message', 'Pelanggan berhasil diubah');
    return redirect()->route('customers');
  }

  public function updateStatus($status) {
    Customer::where('id', $this->id)->update([
      'status' => $status
    ]);
  }

  public function openComplain(){
    $this->complainData = Complain::where('customerid', $this->id)->get();
    $this->navigate('complain');
  }

  public function complainCreate(){
    $this->validationChecker('form-create');
    Complain::create([
      'code' => rand(10000,99999),
      'status' => $this->complain_status,
      'priority' =>  $this->complain_priority,
      'servicetype' => $this->service_type,
      'via' => $this->report,
      'source' => $this->source,
      'submittedby' => $this->reporter,
      'subject' => $this->report_subject,
      'description' => $this->customer_complain,
      'solution' => '-',
      'acceptedby' => 'Admin', //perlu diganti dengan session admin yang melakukan edit
      'acceptedbydate' => Carbon::now(),
      'customerid' => $this->id,
    ]);
    $this->openComplain();
  }

  public function complainView($slug, $changer){
    $data = Complain::findOrFail($slug);
    $this->complain_id = $data->id;
    $this->complain_status = $data->status;
    $this->complain_priority = $data->priority;
    $this->service_type = $data->servicetype;
    $this->report = $data->via;
    $this->source = $data->source;
    $this->reporter = $data->submittedby;
    $this->report_subject = $data->subject;
    $this->customer_complain = $data->description;
    $this->completion = $data->solution;
    if($changer === 'view'){
      $this->navigate('complainviewform');
    }else if($changer === 'edit'){
      $this->navigate('complaineditform');
    }
  }

  public function complainUpdate(){
    $this->validationChecker('form-update');
    Complain::where('id', $this->complain_id)->update([
      'status' => $this->complain_status,
      'priority' =>  $this->complain_priority,
      'servicetype' => $this->service_type,
      'via' => $this->report,
      'source' => $this->source,
      'submittedby' => $this->reporter,
      'subject' => $this->report_subject,
      'description' => $this->customer_complain,
      'solution' => $this->completion,
      'updatedby' => 'Admin 2', //Akan di ganti ketika login sudah dibuat
      'updatedbydate' => Carbon::now(),
    ]);
    $this->openComplain();
  }

  public function varEmpty(){
    $this->complain_status = NULL; $this->complain_priority = null; 
    $this->service_type = null; $this->report = null; $this->source = null; 
    $this->reporter = null; $this->report_subject = null; $this->customer_complain = null;
    $this->completion = null; $this->complain_id = null;
  }

  public function validationChecker($check){
    if($check === 'form-create'){
      $this->validate([
        'complain_status' => 'required', 
        'complain_priority' => 'required', 
        'service_type' => 'required', 
        'report' => 'required', 
        'source' => 'required', 
        'reporter' => 'required', 
        'report_subject' => 'required', 
        'customer_complain' => 'required',
      ]);
    }else if($check === 'form-update'){
      $this->validate([
        'complain_status' => 'required', 
        'complain_priority' => 'required', 
        'service_type' => 'required', 
        'report' => 'required', 
        'source' => 'required', 
        'reporter' => 'required', 
        'report_subject' => 'required', 
        'customer_complain' => 'required',
        'completion' => 'required',
      ]);
    }
  }
}
?>