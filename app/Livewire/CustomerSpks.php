<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\Internet;
use App\Models\Node;
use App\Models\Officer;
use App\Models\Spk;
use App\Models\TvAnalog;
use App\Models\TvDigital;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerSpks extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';
  public $mode = 'hero';
  public $title = 'SPK pelanggan';
  public $filterStatus = '';
  public $filterCategory = '';

  public $customerid, $member, $name;
  public $officerData, $nodesData;

  public $id, $category, $spknumber, $service, $servicetype, $status, $address,
    $tvanalog, $tvdigital,
    // $serialnumber, $smartcard, 
    $modemnumber, $modemmac, $modemip, $cpemac, $cpeip, $cpegateway,
    $inputdate, $statusnow, $startdate, $officerid1, $officerid2, $nodeid, $enddate,
    $reason, $solution;

  public $cartData, $serial_number, $smart_card;

  public function mount($userid)
  {
    $this->customerid = $userid;
    $this->mode = 'hero';
  }

  public function render()
  {
    $spkData = Spk::where('customerid', $this->customerid)->orderby('id', 'desc')->select('*');
    $this->setData();
    return view('livewire.customerspks',[
      'spkData' => $spkData->paginate(10, pageName: 'custspk-page'),
    ]);
  }

  public function setData()
  {
    $data = Customer::find($this->customerid);
    $this->member = $data->member;
    $this->name = $data->name;
    $this->address = $data->address;
    $this->officerData = Officer::select('*')->where(['status' => 'aktif'])->get();
    $this->nodesData = Node::get();
    $this->cartData = \Cart::session($this->customerid.'-customerspkstvdigital')->getContent();
  }

  public function navigate($mode)
  {
    $this->mode = $mode;
  }

  public function edit($id)
  {
    $data = Spk::find($id);
    $this->id = $data->id;
    $this->category = $data->category;
    $this->spknumber = $data->spknumber;
    $this->service = $data->service;
    $this->servicetype = $data->servicetype;
    $this->status = $data->status;
    $this->tvanalog = $data->tvanalog;
    // $this->serialnumber = $data->serialnumber;
    // $this->smartcard = $data->smartcard;
    $this->modemnumber = $data->modemnumber;
    $this->modemmac = $data->modemmac;
    $this->modemip = $data->modemip;
    $this->cpemac = $data->cpemac;
    $this->cpeip = $data->cpeip;
    $this->cpegateway = $data->cpegateway;
    $this->inputdate = $data->inputdate;
    $this->statusnow = $data->status;
    $this->startdate = Carbon::create($data->startdate)->format('Y-m-d');
    $this->officerid1 = $data->officerid1;
    $this->officerid2 = $data->officerid2;
    $this->nodeid = $data->nodeid;
    $this->enddate = $data->enddate;
    $this->reason = $data->reason;
    $this->solution = $data->solution;
    // if($data->servicetype === 'tv'){
    if(!empty($data->tvdigital)){
      $this->tvdigital = json_decode($data->tvdigital, true);
      $arr_keys = array_keys($this->tvdigital);
      for($i = 0; $i < count($arr_keys); $i++){
        \Cart::session($this->customerid.'-customerspkstvdigital')->add(array(
          'id' => $this->tvdigital[$arr_keys[$i]]['id'],
          'name' => $this->tvdigital[$arr_keys[$i]]['name'],
          'price' => $this->tvdigital[$arr_keys[$i]]['price'],
          'quantity' => $this->tvdigital[$arr_keys[$i]]['quantity'],
          'attributes' => array(
            'info' => $this->tvdigital[$arr_keys[$i]]['attributes']['info'],
          ),
        ));
        
      }
      $this->tvdigital = '';
    }
    // }
    $this->navigate('edit');
  }

  public function update(){
    if ($this->statusnow === 'blm proses') {
      Spk::where('id', $this->id)->update([
        'tvanalog' => $this->tvanalog,
        'tvdigital' => (!empty($this->cartData) ? json_encode($this->cartData) : ''),
        'modemnumber' => $this->modemnumber,
        'modemmac' => $this->modemmac,
        'modemip' => $this->modemip,
        'cpemac' => $this->cpemac,
        'cpeip' => $this->cpeip,
        'cpegateway' => $this->cpegateway,
        'status' => $this->statusnow,
        'startdate' => $this->startdate,
        'officerid1' => $this->officerid1,
        'officerid2' => $this->officerid2,
        'nodeid' => $this->nodeid,
        'enddate' => $this->enddate,
        'reason' => $this->reason,
        'solution' => $this->solution,
      ]);
    } else if ($this->statusnow === 'pengerjaan') {
      Spk::where('id', $this->id)->update([
        'tvanalog' => $this->tvanalog,
        'tvdigital' => (!empty($this->cartData) ? json_encode($this->cartData) : ''),
        'modemnumber' => $this->modemnumber,
        'modemmac' => $this->modemmac,
        'modemip' => $this->modemip,
        'cpemac' => $this->cpemac,
        'cpeip' => $this->cpeip,
        'cpegateway' => $this->cpegateway,
        'status' => $this->statusnow,
        'startdate' => $this->startdate,
        'officerid1' => $this->officerid1,
        'officerid2' => $this->officerid2,
        'nodeid' => $this->nodeid,
        'enddate' => $this->enddate,
        'reason' => $this->reason,
        'solution' => $this->solution,
      ]);
    } else if ($this->statusnow === 'aktivasi') {
      Spk::where('id', $this->id)->update([
        'tvanalog' => $this->tvanalog,
        'tvdigital' => (!empty($this->cartData) ? json_encode($this->cartData) : ''),
        'modemnumber' => $this->modemnumber,
        'modemmac' => $this->modemmac,
        'modemip' => $this->modemip,
        'cpemac' => $this->cpemac,
        'cpeip' => $this->cpeip,
        'cpegateway' => $this->cpegateway,
        'status' => $this->statusnow,
        'startdate' => $this->startdate,
        'officerid1' => $this->officerid1,
        'officerid2' => $this->officerid2,
        'nodeid' => $this->nodeid,
        'enddate' => $this->enddate,
        'reason' => $this->reason,
        'solution' => $this->solution,
      ]);

      if (str_contains($this->servicetype, 'tv')) {
        if (!empty($this->tvanalog)) {
          TvAnalog::create([
            'count' => $this->tvanalog,
            'customerid' => $this->customerid,
          ]);
        }

        if (!empty($this->tvdigital)) {
          // Looping isi JSON
          // TvDigital::create([
          //   'customerid' => $this->customerid,
          // ]);
        }
      }
      if (str_contains($this->servicetype, 'internet')) {
        Internet::create([
          'modemnumber' => $this->modemnumber,
          'modemmac' => $this->modemmac,
          'modemip' => $this->modemip,
          'cpemac' => $this->cpemac,
          'cpeip' => $this->cpeip,
          'cpegateway' => $this->cpegateway,
          'customerid' => $this->customerid,
        ]);
      }

    } else if ($this->statusnow === 'selesai') {
      Spk::where('id', $this->id)->update([
        'status' => $this->statusnow,
        'startdate' => $this->startdate,
        'officerid1' => $this->officerid1,
        'officerid2' => $this->officerid2,
        'nodeid' => $this->nodeid,
        'enddate' => $this->enddate,
        'reason' => $this->reason,
        'solution' => $this->solution,
      ]);
    }

    session()->flash('message', $this->title . ' berhasil diubah');
    $this->navigate('hero');
  }

  public function addNewDigitalTv(){
    $this->validate([
      'serial_number' => 'required',
      'smart_card' => 'required',
    ],[
      'serial_number.required' => 'No Serial harus diisi',
      'smart_card.required' => 'Smart Card harus diisi',
    ]);
    $rand1 = rand(100000, 999999); $rand2 = rand(100000, 999999);
    $idNumb = $rand1.$rand2.$this->customerid;
    \Cart::session($this->customerid.'-customerspkstvdigital')->add(array(
      'id' => $idNumb,
      'name' => $this->serial_number,
      'price' => 10000,
      'quantity' => 1,
      'attributes' => array(
        'info' => $this->smart_card
      ),
    ));
    $this->serial_number = ''; $this->smart_card = '';
  }

  public function editSerialNumb($slug, $sn){
    \Cart::session($this->customerid.'-customerspkstvdigital')->update($slug, [
      'name' => $sn,
    ]);
  }

  public function editSmartCard($slug, $info){
    \Cart::session($this->customerid.'-customerspkstvdigital')->update($slug, [
      'attributes' => array(
        'info' => $info,
      )
    ]);
  }

  public function deleteDigitalTv($slug){
    \Cart::session($this->customerid.'-customerspkstvdigital')->remove($slug);
  }
}
