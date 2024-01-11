<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class Services extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';

  public $id, $name, $info, $type, $price;
  public $mode = 'table';
  public $title = 'Layanan';
  public $filterType = '';

  public function render()
  {
    $table = Service::orderby('id', 'desc')->select('*');
    if (!empty($this->filterType)) {
      $table->where(['type' => $this->filterType]);
    }
    return view('livewire.services', [
      'table' => $table->paginate(10, pageName: 'services-page'),
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
    $this->info = '';
    $this->type = 'tv';
    $this->price = 0;
  }

  public function create()
  {
    $this->validateRule();
    Service::create([
      'name' => $this->name,
      'info' => $this->info,
      'type' => $this->type,
      'price' => $this->price,
    ]);
    session()->flash('message', $this->title . ' baru berhasil ditambahkan');
    $this->navigate('table');
  }

  public function edit($id)
  {
    $this->navigate('edit');
    $data = Service::find($id);
    $this->id = $data->id;
    $this->name = $data->name;
    $this->info = $data->info;
    $this->type = $data->type;
    $this->price = $data->price;
  }

  public function update()
  {
    $this->validateRule();
    Service::where('id', $this->id)->update([
      'name' => $this->name,
      'info' => $this->info,
      'type' => $this->type,
      'price' => $this->price,
    ]);
    session()->flash('message', $this->title . ' berhasil diubah');
    $this->navigate('table');
  }

  public function validateRule()
  {
    $this->validate([
      'name' => 'required',
      'info' => 'required',
      'price' => 'required',
    ], [
      'name.required' => 'Nama wajib diisi',
      'info.required' => 'Keterangan wajib diisi',
      'price.required' => 'Harga wajib diisi',
    ]);
  }
}
