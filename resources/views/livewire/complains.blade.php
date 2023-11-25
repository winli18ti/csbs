<diV class="mt-3">
  @if($mode === 'table')
    @include('livewire.complains.table')
  @elseif($mode === 'edit')
    @include('livewire.complains.form')
  @elseif($mode === 'hero')
    @include('livewire.complains.hero')
  @endif
</div>