<div class="mt-3">
  @if($mode === 'table')
    @include('livewire.customers.table')
  @elseif($mode === 'add')
    @include('livewire.customers.form')
  @endif
</div>