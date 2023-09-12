<div>
  <div class="container-fluid my-2">
    <nav class="nav nav-tabs">
      <button wire:click.prevent="navigate('profil')" class="nav-link {{ $currentTab === 'profil' ? 'active' : '' }}">Profil</a>
      <button wire:click.prevent="navigate('layanan')" class="nav-link {{ $currentTab === 'layanan' ? 'active' : '' }}">Layanan</a>
      <button wire:click.prevent="navigate('tagihan')" class="nav-link {{ $currentTab === 'tagihan' ? 'active' : '' }}">Tagihan</a>
      <button wire:click.prevent="navigate('spk')" class="nav-link {{ $currentTab === 'spk' ? 'active' : '' }}">SPK</a>
      <button wire:click.prevent="navigate('keluhan')" class="nav-link {{ $currentTab === 'keluhan' ? 'active' : '' }}">Keluhan</a>
    </nav>
  </div>

  @if($currentTab === 'profil')
    @include('livewire.pelanggan.profil')

  @elseif($currentTab === 'layanan')
    @include('livewire.pelanggan.layanan')

  @elseif($currentTab === 'tagihan')
    @include('livewire.pelanggan.tagihan')

  @elseif($currentTab === 'spk')
    @include('livewire.pelanggan.spk')

  @elseif($currentTab === 'keluhan')
    @include('livewire.pelanggan.keluhan')

  @endif
</div>
