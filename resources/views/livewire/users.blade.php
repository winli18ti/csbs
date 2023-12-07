<diV class="mt-3">
  @if($mode === 'table')
    @include('livewire.users.table')
  @elseif($mode === 'add' || $mode === 'edit')
    @include('livewire.users.form')
  @endif
</div>