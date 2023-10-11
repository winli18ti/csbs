<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use App\Models\CustomerService;
use App\Models\Marketer;
use App\Models\Service;
use App\Models\Spk;
use Carbon\Carbon;

class Customers extends Component{
    public $marketerid, $statusdate, $name, $identity, $address, 
    $cellphone, $homephone, $email, $paytype = 'penagihan ke pelanggan', $servicetype = 'layanan reguler', 
    $servicename, $subsperiod, $notes, $specialname, $specialprice, $specialinfo;

    public $serviceData, $marketerData;

    public $mode = 'table'; public $title = 'Pelanggan';
    public $filterStatus = ''; public $filterPaytype = '';
    public $filterBillperiod = ''; public $filterSubsperiod = '';
    public $filterVip = '';

    public function mount(){
        $this->serviceData = Service::get();
        $this->marketerData = Marketer::get();
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
        $this->servicetype = 'layanan reguler'; $this->servicename = null; $this->subsperiod = null;
        $this->notes = null; $this->specialname = null; $this->specialprice = null; 
        $this->specialinfo = null;
    }

    public function create() {
        $this->validateRule();
        $date = Carbon::create($this->statusdate)->now();
        $member = substr(str_replace('-', '',$date->toDateString()), 2, 4);
        $custData = Customer::create([
            'member' => $member,
            'marketerid' => $this->marketerid , 'statusdate' => $this->statusdate, 'name' => $this->name,
            'identity' => $this->identity, 'address' => $this->address, 'cellphone' => $this->cellphone,
            'homephone' => $this->homephone, 'email' => $this->email, 
            'paytype' => $this->paytype,
            'servicetype' => $this->servicetype, 'servicename' => $this->servicename,
            'subsperiod' => $this->subsperiod, 'notes' => $this->notes,
            'specialname' => $this->specialname, 'specialprice' => $this->specialprice, 'specialinfo' => $this->specialinfo,
            'node' => 'NUL', 'billperiod' => 1, 'tvcount' => 0,
            'status' => 'registration',
        ]);
        if($this->servicetype === 'layanan reguler'){
            CustomerService::create([
                'servicetype' => $this->service, 'serviceid' => $this->servicename, 'subsperiod' => $this->subsperiod,
                'notes' => $this->notes, 'customerid' => $custData->id,
                'status' => 'tidak aktif',
            ]);
        }else if($this->servicetype === 'pembayaran non reguler'){
            CustomerService::create([
                'servicetype' => $this->service, 'specialname' => $this->specialname, 'specialprice' => $this->specialprice,
                'specialinfo' => $this->specialinfo, 'customerid' => $custData->id,
                'status' => 'tidak aktif',
            ]);
        }
        Spk::create([
            'category' => 'registrasi',
            'spknumber' => substr(str_replace('-', '', $date->toDateString()), 0, 6),
            'service' => '???',
            'servicetype' => 'tv & internet',
            'status' => 'blm proses',
        ]);
        session()->flash('message', $this->title.' baru berhasil ditambah');
        $this->emptyValue();
        return redirect('/customer_detail/'.$custData->id);
    }

    public function validateRule(){
        if($this->mode === 'add'){
            if($this->service === 'layanan reguler'){
                $this->validate([
                    'statusdate' => 'required',
                    'name' => 'required',
                    'address' => 'required',
                    'paytype' => 'required',
                    'service' => 'required',
                    'servicename' => 'required',
                    'subsperiod' => 'required',
                ], [
                    'statusdate.required' => 'Tanggal registrasi wajib dipilih',
                    'name.required' => 'Nama wajib diisi',
                    'address.required' => 'Alamat wajib diisikan',
                    'paytype.required' => 'Data pembayaran wajib dipilih',
                    'service.required' => 'Data layanan wajib dipilih',
                    'servicename.required' => 'Paket layanan wajib dipilih',
                    'subsperiod.required' => 'Frekuensi layanan wajib dipilih',
                ]);
            }else if($this->service === 'pembayaran non reguler'){
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
