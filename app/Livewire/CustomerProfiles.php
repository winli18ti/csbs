<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Marketer;
use Carbon\Carbon;

use function PHPSTORM_META\map;

class CustomerProfiles extends Component
{
  // Public single data
  public $id, $member, $name, $company, $identity,
    $address, $city, $email, $vip, $effectivedate,
    $node, $marketerid, $homephone, $officephone, $cellphone,
    $servicetype, $specialprice, $specialinfo, $paytype,
    $billperiod, $subsperiod, $tvcount, $notes, $status;
  // Public Object Data
  public $marketerData;
  // Public Arr
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
      'node' => $this->node,
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
