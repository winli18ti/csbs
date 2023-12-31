<div class="mt-3">
  @if($mode === 'table')
    @include('livewire.invoices.table')
  @elseif($mode === 'view')
    @include('livewire.invoices.view')
  @elseif($mode === 'edit')
    @include('livewire.invoices.edit')
  @endif
</div>
