<diV class="mt-3">
  @if($mode === 'table')
    @include('livewire.officers.table')
  @elseif($mode === 'add' || $mode === 'edit')
    @include('livewire.officers.form')
  @endif
</div>