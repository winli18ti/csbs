<?php

namespace App\Livewire;

use App\Models\Spk;
use Livewire\Component;
use Livewire\WithPagination;

class Spks extends Component
{
    use WithPagination;
    // public $id;
    public $mode = 'table';
    public $title = 'SPK pelanggan';
    public $filterStatus = '';
    public $filterCategory = '';

    public function render()
    {
        $table = Spk::select('*');
        if (!empty($this->filterStatus)) {
            $table->where(['status' => $this->filterStatus]);
        }
        if (!empty($this->filterCategory)) {
            $table->where(['category' => $this->filterCategory]);
        }
        $table = $table->paginate(20);
        return view('livewire.spks', compact('table'));
    }

    public function navigate($mode) {
        $this->mode = $mode;
    }

    public function edit($id) {
        $this->navigate('edit');
        $data = Spk::find($id);
        // $this->id = $data->id;
    }

    public function update() {
        Spk::where('id', $this->id)->update([
            // 'status' => $this->status,
        ]);
        session()->flash('message', $this->title.' berhasil diubah');
        $this->navigate('table');
    }
}