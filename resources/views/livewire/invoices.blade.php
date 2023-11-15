<div>
    @if($currentTab === 'table')
        @include('livewire.invoices.table')
    @elseif($currentTab === 'view')
        @include('livewire.invoices.view')
    @elseif($currentTab === 'add')
        @include('livewire.invoices.add')
    @elseif($currentTab === 'edit')
        @include('livewire.invoices.edit')
    @endif
</div>
