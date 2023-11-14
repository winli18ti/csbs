<?php

namespace App\Livewire;

use App\Models\Invoice;
use Livewire\Component;

class Invoices extends Component
{
    public $filterType = '', $filterService = '', $filterSubsperiod = '', $filterStatus = '', 
    $filterDay = '', $filterMonth = '', $filterYear = '', $searchTerm = '';

    public function mount() {
        //setting day month year di sini
    }

    public function render()
    {
        $table = Invoice::orderby('id', 'desc')->select('*');
        if(!empty($this->filterType)) {
            $table->where(['servicetype' => $this->filterType]);
        }
        if(!empty($this->filterService)) {
        
        }
        if(!empty($this->filterSubsperiod)) {
            $table->where(['subsperiod' => $this->filterSubsperiod]);
        }
        if(!empty($this->filterStatus)) {
            $table->where(['status' => $this->filterStatus]);
        }
        if(!empty($this->filterDay)) {
        
        }
        if(!empty($this->filterMonth)) {
        
        }
        if(!empty($this->filterYear)) {
        
        }
        if(!empty($this->searchTerm)) {
            
        }
        $table = $table->paginate(10);
        return view('livewire.invoices', compact('table'));
    }
}
