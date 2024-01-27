<div class="mt-3">
  @if($mode === 'send')
    @include('livewire.sms.form')
  @elseif($mode === 'inbox')
    @include('livewire.sms.inbox')
  @elseif($mode === 'outbox')
    @include('livewire.sms.outbox')
  @endif
</div>