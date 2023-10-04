<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use App\Models\CustomerService;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;

class Customers extends Component{
    public $marketerid, $statusdate, $name, $identity, $address, 
    $cellphone, $homephone, $email, $paytype = 'penagihan ke pelanggan', $service = 'layanan reguler', 
    $servicename, $subsperiod, $notes, $customerId, $member, $specialname, $specialprice, $specialinfo;

    public $serviceData, $userData;

    public $mode = 'table'; public $title = 'Pelanggan';
    public $filterStatus = ''; public $filterPaytype = '';
    public $filterBillperiod = ''; public $filterSubsperiod = '';
    public $filterVip = '';

    public function mount(){
        $this->serviceData = Service::get();
        $this->userData = User::get();
    }

    public function render() {
        $table = Customer::select('*');
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
        $table = $table->paginate(10);
        return view('livewire.customers', compact('table'));
    }

    public function navigate($mode) {
        $this->mode = $mode;
    }

    public function emptyValue(){
        $this->marketerid = null; $this->statusdate = null; $this->name = null;
        $this->identity = null; $this->address = null; $this->cellphone = null;
        $this->homephone = null; $this->email = null; $this->paytype = 'penagihan ke pelanggan';
        $this->service = 'layanan reguler'; $this->servicename = null; $this->subsperiod = null;
        $this->notes = null; $this->specialname = NULL; $this->specialprice = NULL; 
        $this->specialinfo = NULL; $this->member = null;
    }

    public function create() {
        $this->validateRule('create');
        $date = Carbon::create($this->statusdate)->now();
        $custData = Customer::create([
            'member' => substr(str_replace('-', '',$date->toDateString()), 2, 4),
            'marketerid' => $this->marketerid , 'statusdate' => $this->statusdate, 'name' => $this->name,
            'identity' => $this->identity, 'address' => $this->address, 'cellphone' => $this->cellphone,
            'homephone' => $this->homephone, 'email' => $this->email, 'paytype' => $this->paytype, 'node' => 'NUL',
        ]);
        if($this->service === 'layanan reguler'){
            CustomerService::create([
                'servicetype' => $this->service, 'serviceid' => $this->servicename, 'subsperiod' => $this->subsperiod,
                'notes' => $this->notes, 'customerid' => $custData->id
            ]);
        }else if($this->service === 'pembayaran non reguler'){
            CustomerService::create([
                'servicetype' => $this->service, 'specialname' => $this->specialname, 'specialprice' => $this->specialprice,
                'specialinfo' => $this->specialinfo, 'customerid' => $custData->id
            ]);
        }
        session()->flash('message', $this->title.' baru berhasil ditambah');
        $this->emptyValue();
        $this->navigate('table');
    }

    public function edit($slug){
        $data = Customer::find($slug);
        $this->customerId = $data->id; $this->marketerid = $data->marketerid;
        $this->name = $data->name;  $this->identity = $data->identity; 
        $this->address = $data->address; $this->cellphone = $data->cellphone; 
        $this->homephone = $data->homephone; $this->email = $data->email;
        $this->paytype = $data->paytype; $this->service = $data->service; 
        $this->servicename = $data->servicename; $this->subsperiod = $data->subsperiod;
        $this->notes = $data->notes; $this->member = $data->member;
        $this->navigate('edit');
    }

    public function update(){
        $this->validateRule();
        Customer::find($this->customerId)->where([
            'name' => $this->name,
            'identity' => $this->identity, 'address' => $this->address,
            'cellphone' => $this->cellphone, 'homephone' => $this->homephone,
            'email' => $this->email, 'paytype' => $this->paytype,
            'service' => $this->service, 'servicename' => $this->servicename,
            'subsperiod' => $this->subsperiod, 'notes' => $this->notes,
        ]);
        $this->emptyValue();
    }

    public function validateRule(){
        if($this->mode === 'add'){
            if($this->service === 'layanan reguler'){
                $this->validate([
                    'marketerid' => 'required',
                    'statusdate' => 'required',
                    'name' => 'required',
                    'identity' => 'required',
                    'address' => 'required',
                    'cellphone' => 'required',
                    'homephone' => 'required',
                    'email' => 'required',
                    'paytype' => 'required',
                    'service' => 'required',
                    'servicename' => 'required',
                    'subsperiod' => 'required',
                    'notes' => 'required',
                ], [
                    'marketerid.required' => 'Sales wajib dipilih',
                    'statusdate.required' => 'Tanggal wajib dipilih',
                    'name.required' => 'Nama wajib diisi',
                    'identity.required' => 'Nomor KTP wajib diisikan',
                    'address.required' => 'Alamat wajib diisikan',
                    'cellphone.required' => 'Nomor telepon wajib diisikan',
                    'homephone.required' => 'Nomor telepon rumah wajib diisikan',
                    'email.required' => 'Email wajib diisikan',
                    'paytype.required' => 'Data pembayaran wajib dipilih',
                    'service.required' => 'Data layanan wajib dipilih',
                    'servicename.required' => 'Paket layanan wajib dipilih',
                    'subsperiod.required' => 'Frekuensi layanan wajib dipilih',
                    'notes.required' => 'Keterangan wajib diisikan'
                ]);
            }else if($this->service === 'pembayaran non reguler'){
                $this->validate([
                    'marketerid' => 'required',
                    'statusdate' => 'required',
                    'name' => 'required',
                    'identity' => 'required',
                    'address' => 'required',
                    'cellphone' => 'required',
                    'homephone' => 'required',
                    'email' => 'required',
                    'paytype' => 'required',
                    'service' => 'required',
                    'specialname' => 'required',
                    'specialprice' => 'required',
                    'specialinfo' => 'required',
                ], [
                    'marketerid.required' => 'Sales wajib dipilih',
                    'statusdate.required' => 'Tanggal wajib dipilih',
                    'name.required' => 'Nama wajib diisi',
                    'identity.required' => 'Nomor KTP wajib diisikan',
                    'address.required' => 'Alamat wajib diisikan',
                    'cellphone.required' => 'Nomor telepon wajib diisikan',
                    'homephone.required' => 'Nomor telepon rumah wajib diisikan',
                    'email.required' => 'Email wajib diisikan',
                    'paytype.required' => 'Data pembayaran wajib dipilih',
                    'service.required' => 'Data layanan wajib dipilih',
                    'specialname.required' => 'Nama paket spesial wajib diisikan',
                    'specialprice.required' => 'Harga paket spesial wajib diisikan',
                    'specialinfo.required' => 'Keterangan paket spesial wajib diisikan'
                ]);
            }
        }else if($this->mode === 'edit'){
            $this->validate([
                'marketerid' => 'required',
                'name' => 'required',
                'identity' => 'required',
                'address' => 'required',
                'cellphone' => 'required',
                'homephone' => 'required',
                'email' => 'required',
                'paytype' => 'required',
                'service' => 'required',
                'servicename' => 'required',
                'subsperiod' => 'required',
                'notes' => 'required',
            ], [
                'marketerid.required' => 'Sales wajib dipilih',
                'name.required' => 'Nama wajib diisi',
                'identity.required' => 'Nomor KTP wajib diisikan',
                'address.required' => 'Alamat wajib diisikan',
                'cellphone.required' => 'Nomor telepon wajib diisikan',
                'homephone.required' => 'Nomor telepon rumah wajib diisikan',
                'email.required' => 'Email wajib diisikan',
                'paytype.required' => 'Data pembayaran wajib dipilih',
                'service.required' => 'Data layanan wajib dipilih',
                'servicename.required' => 'Paket layanan wajib dipilih',
                'subsperiod.required' => 'Frekuensi layanan wajib dipilih',
                'notes.required' => 'Keterangan wajib diisikan'
            ]);
        }
    }
}
