<diV>
  @if($mode === 'table')
    @include('livewire.pelanggan.table')
  @elseif($mode === 'create' || $mode === 'edit')
    @include('livewire.pelanggan.form')
  @endif
</div>