<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CustomerDetail extends Component {

  public $id, $member, $name, $company, $identity, 
  $address, $city, $email, $vip, $effectivedate,
  $node, $marketerid, $homephone, $officephone, $cellphone,
  $servicetype, $specialprice, $specialinfo, $paytype,
  $billperiod, $subsperiod, $tvcount, $notes;
  
  public $currentTab = 'profil';

  public function mount($id) {
    $data = Customer::find($id);

    $this->id = $data->id;
    $this->member = $data->member;
    $this->name = $data->name;
    $this->company = $data->company;
    $this->identity = $data->identity;
    $this->address = $data->address;
    $this->city = $data->city;
    $this->email = $data->email;
    $this->vip = $data->vip;
    $this->effectivedate = $data->effectivedate;
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
  }

  public function render() {
    return view('livewire.pelanggan-detail');
  }

  public function navigate($tab) {
    $this->currentTab = $tab;
  }

  public function update() {
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
}
?>