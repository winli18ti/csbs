<diV class="mt-3">
  @if($mode === 'table')
    @include('livewire.spks.table')
  @elseif($mode === 'add' || $mode === 'edit')
    @include('livewire.spks.form')
  @elseif($mode === 'hero')
    @include('livewire.spks.hero')
  @endif
</div>