<div>
  @if($mode === 'hero')
    @include('livewire.customerinvoices.hero')
  @elseif($mode === 'view')
    @include('livewire.customerinvoices.view')
  @elseif($mode === 'add')
    @include('livewire.customerinvoices.add')
  @elseif($mode === 'edit')
    @include('livewire.customerinvoices.edit')
  @endif
</div>
