<?php

namespace App\Livewire;

use App\Models\Inbox;
use App\Models\Outbox;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Sms extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';

  public $mode;
  public $searchTerm = '';
  public $receiver = '', $message = '';

  public function mount()
  {
    if (request()->is('sms_send')) {
      $this->mode = 'send';
    } else if (request()->is('sms_inbox')) {
      $this->mode = 'inbox';
    } else if (request()->is('sms_outbox')) {
      $this->mode = 'outbox';
    }
  }

  public function render()
  {

    if ($this->mode === 'inbox') {
      $table = Inbox::orderby('id', 'desc')->select('*');
      if (!empty($this->searchTerm)) {
        $table->orWhere('sender', 'like', "%" . $this->searchTerm . "%");
        $table->orWhere('message', 'like', "%" . $this->searchTerm . "%");
      }
      return view('livewire.sms', [
        'table' => $table->paginate(10, pageName: 'invoice-page'),
      ]);
    } else if ($this->mode === 'outbox') {
      $table = Outbox::orderby('id', 'desc')->select('*');
      if (!empty($this->searchTerm)) {
        $table->orWhere('receiver', 'like', "%" . $this->searchTerm . "%");
        $table->orWhere('message', 'like', "%" . $this->searchTerm . "%");
      }
      return view('livewire.sms', [
        'table' => $table->paginate(10, pageName: 'invoice-page'),
      ]);
    }
    return view('livewire.sms');
  }

  public function create()
  {
    $this->validateRule();
    $receivers = explode(';', $this->receiver, );
    foreach($receivers as $receiver) {
      Outbox::create([
        'outboxdate' => Carbon::now(),
        'receiver' => $receiver,
        'message' => $this->message,
        'modemid' => 'WVCOM',
        'status' => 'SendingOKNoReport',
      ]);
    }
    session()->flash('message', 'Pesan berhasil dikirim');
  }

  public function validateRule()
  {
    $this->validate([
      'receiver' => 'required',
      'message' => 'required',
    ], [
      'receiver.required' => 'Nomor penerima wajib diisi',
      'message.required' => 'Pesan wajib diisi',
    ]);
  }
}
