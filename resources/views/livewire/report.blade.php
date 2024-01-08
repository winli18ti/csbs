<div class="mt-3">
  @if($mode === 'incomepaid')
    @include('livewire.report.incomepaid')
  @elseif($mode === 'income')
    @include('livewire.report.income')
  @elseif($mode === 'sales')
    @include('livewire.report.sales')
  @elseif($mode === 'node')
    @include('livewire.report.node')
  @elseif($mode === 'complain')
    @include('livewire.report.complain')
  @elseif($mode === 'selling')
    @include('livewire.report.selling')
  @elseif($mode === 'dismantledate')
    @include('livewire.report.dismantledate')
  @elseif($mode === 'dismantleregs')
    @include('livewire.report.dismantleregs')
  @endif
</div>