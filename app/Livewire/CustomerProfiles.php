<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Marketer;
use App\Models\Node;
use Carbon\Carbon;

use function PHPSTORM_META\map;

class CustomerProfiles extends Component
{
  // Public single data
  public $id, $member, $name, $company, $identity,
    $address, $city, $email, $vip, $effectivedate,
    $nodeid, $marketerid, $homephone, $officephone, $cellphone,
    $servicetype, $specialprice, $specialinfo, $paytype,
    $billperiod, $subsperiod, $tvcount, $notes, $status;
  // Public Object Data
  public $marketerData, $nodesData;
  // Public Arr
  // ------------------------------------------------------------------------------------------------------------------------------------
  public function mount($userid)
  {
    $this->id = $userid;
  }

  public function render()
  {
    $this->setData();
    return view('livewire.customerprofiles');
  }
  // ------------------------------------------------------------------------------------------------------------------------------------
  // First Dynamic Setup Data
  public function setData()
  {
    $data = Customer::find($this->id);
    $this->member = $data->member;
    $this->name = $data->name;
    $this->marketerData = Marketer::get();
    $this->nodesData = Node::get();
    $this->company = $data->company;
    $this->identity = $data->identity;
    $this->address = $data->address;
    $this->email = $data->email;
    $this->vip = $data->vip;
    $this->effectivedate = Carbon::create($data->effectivedate)->format('Y-m-d');
    $this->nodeid = $data->nodeid;
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
  // ------------------------------------------------------------------------------------------------------------------------------------
  public function update()
  {
    if ($this->vip != 1) $this->vip = 0;
    if (empty($this->tvcount)) $this->tvcount = 0;
    $this->validateChecker('update');
    Customer::where('id', $this->id)->update([
      // member' => $this->member,
      'name' => $this->name,
      'company' => $this->company,
      'identity' => $this->identity,
      'address' => $this->address,
      'city' => $this->city,
      'email' => $this->email,
      'vip' => $this->vip,
      'effectivedate' => $this->effectivedate,
      'nodeid' => $this->nodeid,
      'marketerid' => $this->marketerid,
      'homephone' => $this->homephone,
      'officephone' => $this->officephone,
      'cellphone' => $this->cellphone,
      // 'servicetype' => $this->servicetype,
      'specialprice' => $this->specialprice,
      'specialinfo' => $this->specialinfo,
      'paytype' => $this->paytype,
      'billperiod' => $this->billperiod,
      'subsperiod' => $this->subsperiod,
      'tvcount' => $this->tvcount,
      'notes' => $this->notes,
    ]);

    $this->alerttoaster('Data berhasil di update', 'success');
    // return redirect()->route('customers');
  }
  // -----------------------------------------------------------------------------------------------------------------------------------
  // Validation Rules
  public function validateChecker($info)
  {
    if ($info === 'update') {
      $this->validate([
        'name' => 'required',
        'address' => 'required',
        'marketerid' => 'required',
        'cellphone' => 'required',
        'billperiod' => 'required',
        'subsperiod' => 'required',
      ], [
        'name.required' => 'Kolom nama harus diisikan',
        'address.required' => 'Kolom alamat harus diisikan',
        'marketerid.required' => 'Sales harus dipilih',
        'cellphone.required' => 'Nomor HP perlu diisikan',
        'billperiod.required' => 'Periode tagihan perlu dipilih',
        'subsperiod.required' => 'Periode berlanggan perlu dipilih',
      ]);
    }
  }
  // -----------------------------------------------------------------------------------------------------------------------------------
  // Alert ()
  public function alert($title, $msg, $icon)
  {
    $this->dispatch('swal', [
      'title' => $title,
      'text' => $msg,
      'icon' => $icon,
    ]);
  }
  public function alerttoaster($title, $icon)
  {
    $this->dispatch('toast', [
      'title' => $title,
      'icon' => $icon,
    ]);
  }
  // -----------------------------------------------------------------------------------------------------------------------------------
}
