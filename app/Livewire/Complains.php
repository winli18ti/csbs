<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Complain;
use App\Models\Marketer;
use Livewire\WithPagination;

class Complains extends Component
{
    use WithPagination;
    public $id, $code, $customerid, $member, $name, 
    $status, $priority, $servicetype, $via, $source, 
    $submittedby, $subject, $complain, $solution, $acceptedby,
    $updatedby;
    public $mode = 'table';
    public $title = 'Pengaduan pelanggan';
    public $filterStatus = '';

    public function render()
    {
        $table = Complain::select('*');
        if (!empty($this->filterStatus)) {
            $table->where(['status' => $this->filterStatus]);
        }
        $table = $table->paginate(20);
        return view('livewire.complains', compact('table'));
    }

    public function navigate($mode) {
        $this->mode = $mode;
    }

    public function edit($id) {
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
        $this->complain = $data->complain;
        $this->solution = $data->solution;
        $this->acceptedby = $data->acceptedby;
        $this->updatedby = $data->updatedby;
    }

    public function update() {
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
        session()->flash('message', $this->title.' berhasil diubah');
        $this->navigate('table');
    }
}