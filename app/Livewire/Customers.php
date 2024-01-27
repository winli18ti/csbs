<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use App\Models\CustomerService;
use App\Models\Marketer;
use App\Models\Service;
use App\Models\Spk;
use Carbon\Carbon;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Log;

class Customers extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';

  //form
  public $marketerid, $statusdate, $name, $identity, $address,
    $cellphone, $homephone, $email, $paytype = 'penagihan ke pelanggan', $servicetype = 'reguler',
    $servicename, $subsperiod, $notes, $specialname, $specialprice, $specialinfo;

  public $serviceData, $marketerData;

  public $mode = 'table';
  public $title = 'Pelanggan';

  //filter table
  public $filterStatus = '';
  public $filterPaytype = '';
  public $filterBillperiod = '';
  public $filterSubsperiod = '';
  public $filterVip = '';
  public $searchTerm;

  // ID Uniq
  public $custserv_id;

  public function mount()
  {
    $this->serviceData = Service::get();
    $this->marketerData = Marketer::get();
  }

  public function render()
  {
    $table = Customer::orderby('id', 'desc')->select('*');
    if (!empty($this->filterStatus)) {
      $table->where(['status' => $this->filterStatus]);
    }
    if (!empty($this->filterPaytype)) {
      $table->where(['paytype' => $this->filterPaytype]);
    }
    if (!empty($this->filterBillperiod)) {
      $table->where(['billperiod' => $this->filterBillperiod]);
    }
    if (!empty($this->filterSubsperiod)) {
      $table->where(['subsperiod' => $this->filterSubsperiod]);
    }
    if (!empty($this->filterVip)) {
      $table->where(['vip' => $this->filterVip]);
    }
    if (!empty($this->searchTerm)) {
      $table->where('name', 'like', "%" . $this->searchTerm . "%");
    }
    $table = $table->paginate(20);
    return view('livewire.customers', compact('table'));
  }

  public function navigate($mode)
  {
    $this->mode = $mode;
  }

  public function emptyValue()
  {
    $this->marketerid = null;
    $this->statusdate = null;
    $this->name = null;
    $this->identity = null;
    $this->address = null;
    $this->cellphone = null;
    $this->homephone = null;
    $this->email = null;
    $this->paytype = 'penagihan ke pelanggan';
    $this->servicetype = 'reguler';
    $this->servicename = null;
    $this->subsperiod = null;
    $this->notes = null;
    $this->specialname = null;
    $this->specialprice = null;
    $this->specialinfo = null;
    $this->custserv_id = null;
  }

  public function createData(){
    $this->validateRule();
    $date = Carbon::create($this->statusdate);
    $substr = substr(str_replace('-', '', $date->toDateString()), 2, 4);
    $number = (Customer::where('member', 'like', $substr . '%')->get()->count()) + 1;
    $member = $substr . str_pad($number, 3, "0", STR_PAD_LEFT);
    $service_data = Service::find($this->servicename);
    Log::info('0 '.$service_data);
    $custData = Customer::create([
      'member' => $member, 'marketerid' => $this->marketerid, 
      'statusdate' => $this->statusdate,  'name' => $this->name,
      'identity' => $this->identity, 'address' => $this->address, 
      'cellphone' => $this->cellphone, 'homephone' => $this->homephone, 
      'email' => $this->email, 'paytype' => $this->paytype, 'vip' => 0,
      'status' => 'registration', 'subsperiod' => $this->subsperiod,
      'servicetype' => $this->servicetype,
    ]);
    if ($this->servicetype === 'reguler') {
      $this->custserv_id = CustomerService::create([
        'name' => $service_data->name,  'info' => $service_data->info, 
        'price' => null, 'note' => $this->notes, 'status' => 'tidak aktif', 
        'condition' => 'sedang proses', 'date' => Carbon::now(),  
        'subsperiod' => $this->subsperiod, 'setmain' => 1,
        'customerid' => $custData->id, 'serviceid' => $service_data->id
      ]);
    } else if ($this->servicetype === 'special') {
      $this->custserv_id = CustomerService::create([
        'name' => $this->specialname,  'info' => null, 
        'price' => $this->specialprice, 'note' => $this->specialinfo, 
        'status' => 'tidak aktif', 'condition' => 'sedang proses', 
        'date' => Carbon::now(),  'subsperiod' => 1,
        'setmain' => 1, 'customerid' => $custData->id, 'serviceid' => null
      ]);
    }

    $substr2 = substr(str_replace('-', '', $date->toDateString()), 0, 6);
    $number2 = (Spk::where('spknumber', 'like', $substr2 . '%')->get()->count()) + 1;
    $spknumber = $substr2 . str_pad($number2, 3, "0", STR_PAD_LEFT);

    $spk_data = Spk::create([
      'category' => 'Registrasi',
      'spknumber' => $spknumber,
      'service' => $service_data->name.' - '.$service_data->info,
      'servicetype' => $service_data->type,
      'status' => 'blm proses',
      'inputdate' => Carbon::now(),
      'customerid' => $custData->id,
      'customerserviceid' => $this->custserv_id->id,
    ]);
    $this->emptyValue();
    return redirect('/customer_detail/' . $custData->id);
  }

  public function validateRule()
  {
    if ($this->mode === 'add') {
      if ($this->servicetype === 'layanan reguler') {
        $this->validate([
          'marketerid' => 'required',
          'statusdate' => 'required',
          'name' => 'required',
          'address' => 'required',
          'paytype' => 'required',
          'servicetype' => 'required',
          'servicename' => 'required',
          'subsperiod' => 'required',
        ], [
          'marketerid.required' => 'Sales Marketing harus dipilih',
          'statusdate.required' => 'Tanggal registrasi wajib dipilih',
          'name.required' => 'Nama wajib diisi',
          'address.required' => 'Alamat wajib diisikan',
          'paytype.required' => 'Data pembayaran wajib dipilih',
          'servicetype.required' => 'Data layanan wajib dipilih',
          'servicename.required' => 'Paket layanan wajib dipilih',
          'subsperiod.required' => 'Frekuensi layanan wajib dipilih',
        ]);
      } else if ($this->servicetype === 'pembayaran non reguler') {
        $this->validate([
          'statusdate' => 'required',
          'name' => 'required',
          'address' => 'required',
          'paytype' => 'required',
          'service' => 'required',
          'specialname' => 'required',
          'specialprice' => 'required',
          'specialinfo' => 'required',
        ], [
          'statusdate.required' => 'Tanggal registrasi wajib dipilih',
          'name.required' => 'Nama wajib diisi',
          'address.required' => 'Alamat wajib diisikan',
          'paytype.required' => 'Data pembayaran wajib dipilih',
          'service.required' => 'Data layanan wajib dipilih',
          'specialname.required' => 'Nama paket spesial wajib diisikan',
          'specialprice.required' => 'Harga paket spesial wajib diisikan',
        ]);
      }
    }
  }
}
