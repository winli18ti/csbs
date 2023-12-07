<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Complain;
use App\Models\Customer;
use App\Models\Marketer;
use Carbon\Carbon;
use Livewire\WithPagination;

class CustomerComplains extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';

  public $id, $code, $customerid, $member, $name,
    $status, $priority, $servicetype, $via, $source,
    $submittedby, $subject, $description, $solution, $acceptedby, $acceptedbydate,
    $updatedby, $updatedbydate;
  public $mode = 'hero';
  public $title = 'Pengaduan pelanggan';
  public $filterStatus = '';

  public $complain_status, $complain_priority, $service_type, $report, $reporter, $report_subject, $customer_complain, $completion, $complain_id;

  public $complainData, $collectorData;

  public function mount($userid)
  {
    $this->id = $userid;
  }

  public function render()
  {
    $this->setData();
    return view('livewire.customercomplains');
  }

  public function setData()
  {
    $data = Customer::find($this->id);
    $this->complainData = Complain::where('customerid', $this->id)->get();
    $this->member = $data->member;
    $this->name = $data->name;
  }

  public function navigate($mode)
  {
    if ($mode === 'hero') {
      $this->varEmpty();
    }
    $this->mode = $mode;
  }

  public function edit($id)
  {
    $this->navigate('edit');
    $data = Complain::find($id);
    $this->id = $data->id;
    $this->code = $data->code;
    $this->customerid = $data->customerid;
    $this->status = $data->status;
    $this->priority = $data->priority;
    $this->servicetype = $data->servicetype;
    $this->via = $data->via;
    $this->source = $data->source;
    $this->submittedby = $data->submittedby;
    $this->subject = $data->subject;
    $this->description = $data->description;
    $this->solution = $data->solution;
    $this->acceptedby = $data->acceptedby;
    $this->acceptedbydate = $data->acceptedbydate;
    $this->updatedby = $data->updatedby;
    $this->updatedbydate = $data->updatedbydate;
  }

  public function update()
  {
    Marketer::where('id', $this->id)->update([
      'status' => $this->status,
      'priority' => $this->priority,
      'servicetype' => $this->servicetype,
      'via' => $this->via,
      'source' => $this->source,
      'submittedby' => $this->submittedby,
      'subject' => $this->subject,
      'complain' => $this->complain,
      'solution' => $this->solution,
    ]);
    session()->flash('message', $this->title . ' berhasil diubah');
    $this->navigate('hero');
  }

  public function complainCreate()
  {
    $this->validationChecker('form-create');
    Complain::create([
      'code' => rand(10000, 99999),
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
    $this->navigate('hero');
    $this->alerttoaster('Data berhasil di tambah', 'success');
  }

  public function complainView($slug, $changer)
  {
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
    if ($changer === 'view') {
      $this->navigate('complainviewform');
    } else if ($changer === 'edit') {
      $this->navigate('complaineditform');
    }
  }

  public function complainUpdate()
  {
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
    $this->navigate('hero');
    $this->alerttoaster('Data berhasil di update!', 'success');
  }

  public function varEmpty()
  {
    $this->complain_status = NULL;
    $this->complain_priority = null;
    $this->service_type = null;
    $this->report = null;
    $this->source = null;
    $this->reporter = null;
    $this->report_subject = null;
    $this->customer_complain = null;
    $this->completion = null;
    $this->complain_id = null;
  }

  public function validationChecker($check)
  {
    if ($check === 'form-create') {
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
    } else if ($check === 'form-update') {
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
  // -----------------------------------------------------------------------------------------------------------------------------------
  // Alert ()
  public function alert($title, $msg, $icon)
  {
    dd('hi');
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
