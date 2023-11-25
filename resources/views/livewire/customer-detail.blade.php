<div>
  <div class="container-fluid my-2">
    <a href="/customers" class="btn btn-outline-primary btn-sm my-2">
      Kembali
    </a>
    <nav class="nav nav-tabs">
      <button wire:click.prevent="navigate('profile')" class="nav-link {{ $currentTab === 'profile' ? 'active' : '' }}">Profil</a>
      <button wire:click.prevent="navigate('service')" class="nav-link {{ $currentTab === 'service' ? 'active' : '' }}">Layanan</a>
      <button wire:click.prevent="navigate('invoice')" class="nav-link {{ $currentTab === 'invoice' ? 'active' : '' }}">Tagihan</a>
      <button wire:click.prevent="navigate('spk')" class="nav-link {{ $currentTab === 'spk' ? 'active' : '' }}">SPK</a>
      <button wire:click.prevent="openComplain" class="nav-link {{ $currentTab === 'complain' || $currentTab === 'complainform' || $currentTab === 'complainviewform' || $currentTab === 'complaineditform' ? 'active' : '' }}">Keluhan</a>
    </nav>
  </div>

  @if($currentTab === 'profile')
    {{-- @include('livewire.customers.profile') --}}
    <livewire:profile :userid="$id" />
  @elseif($currentTab === 'service')
    {{-- @include('livewire.customers.service') --}}
    <livewire:service :userid="$id" />
  @elseif($currentTab === 'invoice')
    {{-- @include('livewire.customers.invoice') --}}
    <livewire:invoices :userid="$id" />
  @elseif($currentTab === 'spk')
    {{-- @include('livewire.customers.spk') --}}
    <livewire:spks :userid="$id" />
  @elseif($currentTab === 'complain')
    {{-- @include('livewire.customers.complain') --}}
    <livewire:complains :userid="$id" />
  @elseif($currentTab === 'complainform' || $currentTab === 'complainviewform' || $currentTab === 'complaineditform' )
    @include('livewire.customers.complainform')
  
  @elseif($currentTab === 'create-invoices')
    @include('livewire.customers.create-invoices')
  @endif
</div>