<?php

namespace App\Livewire;

use App\Models\Collector;
use Livewire\Component;
use Livewire\WithPagination;

class Collectors extends Component
{
    use WithPagination;
    public $id, $name, $status;
    public $mode = 'table';
    public $title = 'Kolektor';
    public $filterStatus = '';

    public function render()
    {
        $table = Collector::select('*');
        if (!empty($this->filterStatus)) {
            $table->where(['status' => $this->filterStatus]);
        }
        $table = $table->paginate(20);
        return view('livewire.collectors', compact('table'));
    }

    public function navigate($mode) {
        $this->mode = $mode;
    }

    public function add() {
        $this->navigate('add');
        $this->id = null;
        $this->name = null;
        $this->status = null;
    }

    public function create() {
        $this->validateRule();
        Collector::create([
            'name' => $this->name,
        ]);
        session()->flash('message', $this->title.' baru berhasil ditambahkan');
        $this->navigate('table');
    }

    public function edit($id) {
        $this->navigate('edit');
        $data = Collector::find($id);
        $this->id = $data->id;
        $this->name = $data->name;
        $this->status = $data->status;
    }

    public function update() {
        $this->validateRule();
        Collector::where('id', $this->id)->update([
            'name' => $this->name,
            'status' => $this->status,
        ]);
        session()->flash('message', $this->title.' berhasil diubah');
        $this->navigate('table');
    }

    public function validateRule() {
        $this->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Nama wajib diisi',
        ]);
    }
}