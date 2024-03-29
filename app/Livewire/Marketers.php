<?php

namespace App\Livewire;

use App\Models\Marketer;
use Livewire\Component;
use Livewire\WithPagination;

class Marketers extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';

  public $id, $name, $status;
  public $mode = 'table';
  public $title = 'Sales marketing';
  public $filterStatus = '';

  public function render()
  {
    $table = Marketer::orderby('id', 'desc')->select('*');
    if (!empty($this->filterStatus)) {
      $table->where(['status' => $this->filterStatus]);
    }
    return view('livewire.marketers', [
      'table' => $table->paginate(10, pageName: 'marketers-page'),
    ]);
  }

  public function navigate($mode)
  {
    $this->mode = $mode;
  }

  public function add()
  {
    $this->navigate('add');
    $this->id = null;
    $this->name = '';
    $this->status = 'aktif';
  }

  public function create()
  {
    $this->validateRule();
    Marketer::create([
      'name' => $this->name,
      'status' => $this->status,
    ]);
    session()->flash('message', $this->title . ' baru berhasil ditambahkan');
    $this->navigate('table');
  }

  public function edit($id)
  {
    $this->navigate('edit');
    $data = Marketer::find($id);
    $this->id = $data->id;
    $this->name = $data->name;
    $this->status = $data->status;
  }

  public function update()
  {
    $this->validateRule();
    Marketer::where('id', $this->id)->update([
      'name' => $this->name,
      'status' => $this->status,
    ]);
    session()->flash('message', $this->title . ' berhasil diubah');
    $this->navigate('table');
  }

  public function validateRule()
  {
    $this->validate([
      'name' => 'required',
    ], [
      'name.required' => 'Nama wajib diisi',
    ]);
  }
}
