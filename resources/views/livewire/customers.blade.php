<diV>
  @if($mode === 'table')
    @include('livewire.customers.table')
  @elseif($mode === 'add')
    @include('livewire.customers.form')
  @elseif($mode === 'edit')
    @include('livewire.customers.profile')
  @endif
</div>