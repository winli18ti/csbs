<diV class="mt-3">
  @if($mode === 'table')
    @include('livewire.services.table')
  @elseif($mode === 'add' || $mode === 'edit')
    @include('livewire.services.form')
  @endif
</div>