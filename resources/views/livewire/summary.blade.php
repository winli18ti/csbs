<div class="mt-3">
  @if($mode === 'invoice')
    @include('livewire.summary.invoice')
  @elseif($mode === 'paidinvoice')
    @include('livewire.summary.paidinvoice')
  @elseif($mode === 'paiddetail')
    @include('livewire.summary.paiddetail')
  @elseif($mode === 'payment')
    @include('livewire.summary.payment')
  @elseif($mode === 'collector')
    @include('livewire.summary.collector')
  @endif
</div>