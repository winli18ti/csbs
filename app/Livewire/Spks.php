<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\Spk;
use Livewire\Component;
use Livewire\WithPagination;

class Spks extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';
  // public $id;
  public $mode = 'table';
  public $title = 'SPK pelanggan';
  public $filterStatus = '';
  public $filterCategory = '';
  public $searchTerm = '';

  public function render()
  {
    $table = Spk::orderby('id', 'desc')->select('*');
    if (!empty($this->filterStatus)) {
      $table->where(['status' => $this->filterStatus]);
    }
    if (!empty($this->filterCategory)) {
      $table->where(['category' => $this->filterCategory]);
    }
    if (!empty($this->searchTerm)) {
      
    }
    return view('livewire.spks', [
      'table' => $table->paginate(10, pageName: 'spk-page'),
    ]);
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
