<diV class="mt-3">
  @if($mode === 'hero')
    @include('livewire.customerspks.hero')
  @elseif($mode === 'edit')
    @include('livewire.customerspks.form')
  @endif
</div>