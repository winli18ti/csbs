<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\CustomerService;
use App\Models\Internet;
use App\Models\TvAnalog;
use App\Models\TvDigital;
use Livewire\Component;

class CustomerServices extends Component {
    public $id, $member, $name, $address, $status;
    public $customerServiceData, $tvAnalogData, $tvDigitalData, $internetData;

    public $mode = 'hero';

    public function mount($userid) {
        $this->id = $userid;
    }
    
    public function render() {
        $this->setData();
        return view('livewire.customerservices');
    }

    public function navigate($mode) {
        $this->mode = $mode;
    }

    public function updateStatus($status) {
        Customer::where('id', $this->id)->update([
            'status' => $status
        ]);
    }

    public function setData() {
        $data = Customer::find($this->id);
        $this->member = $data->member;
        $this->name = $data->name;
        $this->status = $data->status;
        $this->address = $data->address;
        $this->customerServiceData = CustomerService::where('customerid', $this->id)->get();
        $this->tvAnalogData = TvAnalog::where('customerid', $this->id)->get();
        $this->tvDigitalData = TvDigital::where('customerid', $this->id)->get();
        $this->internetData = Internet::where('customerid', $this->id)->get();
    }
}
