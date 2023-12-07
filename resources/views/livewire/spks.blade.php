<diV class="mt-3">
  @if($mode === 'table')
    @include('livewire.spks.table')
  @elseif($mode === 'edit')
    @include('livewire.spks.form')
  @endif
</div>