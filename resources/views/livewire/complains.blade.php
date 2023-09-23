<diV class="mt-3">
  @if($mode === 'table')
    @include('livewire.complains.table')
  @elseif($mode === 'edit')
    @include('livewire.complains.form')
  @endif
</div>