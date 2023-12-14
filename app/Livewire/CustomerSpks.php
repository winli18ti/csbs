<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\Officer;
use App\Models\Spk;
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

  public $id, $member, $name;
  public $officerData;

  public $status;

  public function mount($userid)
  {
    $this->id = $userid;
    $this->mode = 'hero';
  }

  public function render()
  {
    $spkData = Spk::where('customerid', $this->id)->select('*');
    $this->setData();
    return view('livewire.customerspks',[
      'spkData' => $spkData->paginate(10, pageName: 'custspk-page'),
    ]);
  }

  public function setData()
  {
    $data = Customer::find($this->id);
    $this->member = $data->member;
    $this->name = $data->name;
    $this->officerData = Officer::get();
  }

  public function navigate($mode)
  {
    $this->mode = $mode;
  }

  public function edit($id)
  {
    $this->navigate('edit');
    $data = Spk::find($id);
    // $this->id = $data->id;
  }

  public function update()
  {
    Spk::where('id', $this->id)->update([
      // 'status' => $this->status,
    ]);
    session()->flash('message', $this->title . ' berhasil diubah');
    $this->navigate('table');
  }
}
