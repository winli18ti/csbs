<div>
  @if($mode === 'hero')
    @include('livewire.customerservices.hero')
  @elseif($mode === 'packet')
    @include('livewire.customerservices.packet')
  @elseif($mode === 'stb')
    @include('livewire.customerservices.stb')
  @endif
</div>