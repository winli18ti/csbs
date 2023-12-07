<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\Spk;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerSpks extends Component
{
    use WithPagination; protected $paginationTheme = 'bootstrap';
    public $mode = 'hero';
    public $title = 'SPK pelanggan';
    public $filterStatus = '';
    public $filterCategory = '';

    public $id, $member, $name;
    
    public function mount($userid){
        $this->id = $userid;
        $this->mode = 'hero';
    }

    public function render() {
        $this->setData();
        return view('livewire.customerspks');
    }

    public function setData(){
        $data = Customer::find($this->id);
        $this->member = $data->member;
        $this->name = $data->name;
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