<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;

class Customers extends Component
{
    use WithPagination;
    public $marketerid, $statusdate, $name, $identity, $address, 
    $cellphone, $homephone, $email, $paytype, $service, 
    $servicename, $subsperiod, $notes;

    public $mode = 'table';
    public $title = 'Pelanggan';
    public $filterStatus = '';
    public $filterPaytype = '';
    public $filterBillperiod = '';
    public $filterSubsperiod = '';
    public $filterVip = '';

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
        $table = $table->paginate(20);
        return view('livewire.customers', compact('table'));
    }

    public function navigate($mode) {
        $this->mode = $mode;
    }

    public function add() {
        $this->navigate('add');

        $this->marketerid = null;
        $this->statusdate = null;
        $this->name = null;
        $this->identity = null;
        $this->address = null;
        $this->cellphone = null;
        $this->homephone = null;
        $this->email = null;
        $this->paytype = null;
        $this->service = null;
        $this->servicename = null;
        $this->subsperiod = null;
        $this->notes = null;
    }

    public function create() {
        $this->validateRule();
        Customer::create([
            'name' => $this->name,
        ]);
        
        session()->flash('message', $this->title.' baru berhasil ditambah');
        $this->navigate('table');
    }

    public function validateRule(){
        $this->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Nama wajib diisi',
        ]);
    }
}
