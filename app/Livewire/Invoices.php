<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\Invoice;
use Livewire\Component;
use Livewire\WithPagination;

class Invoices extends Component
{
    use WithPagination; protected $paginationTheme = 'bootstrap';
    
    public $currentTab = 'hero';

    public $filterType = '', $filterService = '', $filterSubsperiod = '', $filterStatus = '', 
    $filterDay = '', $filterMonth = '', $filterYear = '', $searchTerm = '';
    
    public $id, $member, $name;

    public $invoicesData;

    public function mount($userid){
        $this->id = $userid;
    }

    public function render()
    {
        $this->setData();
        $table = Invoice::orderby('id', 'desc')->select('*');
        if(!empty($this->filterType)) {
            $table->where(['type' => $this->filterType]);
        }
        if(!empty($this->filterService)) {
            $table->where(['servicetype' => $this->filterService]);
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
        $table = $table->paginate(20);
        return view('livewire.invoices', compact('table'));
    }

    public function setData(){
        $data = Customer::find($this->id);
        $this->member = $data->member;
        $this->name = $data->name;
        $this->invoicesData = Invoice::where('customerid', $this->id)->get();
    }
}
