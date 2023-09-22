<diV class="mt-3">
  @if($mode === 'table')
    @include('livewire.collectors.table')
  @elseif($mode === 'add' || $mode === 'edit')
    @include('livewire.collectors.form')
  @endif
</div>