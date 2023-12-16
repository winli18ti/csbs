<div class="mt-3">
  <div class="container-fluid">
    <button wire:click.prevent="navigate('hero')" class="btn btn-outline-primary btn-sm my-2">Kembali</button>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="member" class="col-form-label">No pelanggan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="member" 
          class="form-control form-control-sm" wire:model="member" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="name" class="col-form-label">Nama pelanggan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="name" 
          class="form-control form-control-sm" wire:model="name" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="billnumber" class="col-form-label">No tagihan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="billnumber" 
          class="form-control form-control-sm" wire:model="billnumber" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="period" class="col-form-label">Periode pembayaran</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="period" 
          class="form-control form-control-sm" wire:model="period" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="paytype" class="col-form-label">Metode pembayaran</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="paytype" 
          class="form-control form-control-sm" wire:model="paytype" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="subsperiod" class="col-form-label">Frekuensi pembayaran</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="subsperiod" 
          class="form-control form-control-sm" wire:model="subsperiod" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="duedate" class="col-form-label">Tanggal jatuh tempo</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="duedate" 
          class="form-control form-control-sm" wire:model="duedate" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="paiddate" class="col-form-label">Tanggal bayar</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="paiddate" 
          class="form-control form-control-sm" wire:model="paiddate" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="collectorname" class="col-form-label">Kolektor</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="collectorname" 
          class="form-control form-control-sm" wire:model="collectorname" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="username" class="col-form-label">Adm. pelunasan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="username" 
          class="form-control form-control-sm" wire:model="username" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="servicename" class="col-form-label">Paket layanan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="servicename" 
          class="form-control form-control-sm" wire:model="servicename" readonly>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <span>Rincian Tagihan</span>
    <div class="row align-items-center my-1">
      <div class="col-6 text-center bg-danger bg-opacity-50">
        Keterangan
      </div>
      <div class="col-3 col-xl-2 text-center bg-danger bg-opacity-50">
        Biaya
      </div>
    </div>
    {{-- @foreach($invoiceDetailData as $data)
      <div class="row align-items-center my-1">
        <div class="col-6">
          {{$data->info}}
        </div>
        <div class="col-3 col-xl-2 text-end">
          {{$data->price}}
        </div>
      </div>
    @endforeach --}}
    <div class="row text-end fw-bold">
      <div class="col-6">
        Total (Rp)
      </div>
      <div class="col-3 col-xl-2">
        {{$bill}}
      </div>
    </div>
    <div class="row">
      <div class="col-9 col-xl-8 fw-bold">
        Terbilang : <span class="fst-italic">sekian rupiah</span>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-12 col-xl-10 text-center mb-3">
        <button class="btn btn-outline-primary btn-sm">
          Kembali
        </button>
      </div>
    </div>
  </div>
</div>