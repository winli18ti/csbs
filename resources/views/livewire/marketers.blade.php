<diV class="mt-3">
  @if($mode === 'table')
    @include('livewire.marketers.table')
  @elseif($mode === 'add' || $mode === 'edit')
    @include('livewire.marketers.form')
  @endif
</div>