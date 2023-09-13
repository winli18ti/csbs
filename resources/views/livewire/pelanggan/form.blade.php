@section('title')
Tambah Pelanggan Baru
@endsection

<div class="container-md mt-3">
  <div class="row justify-content-center">
    <div class="col-lg-9 col-xl-8 col-xxl-7">
      <button class="btn btn-outline-primary btn-sm"
        wire:click.prevent="table">
        Kembali
      </button>

      <form wire:submit="create" enctype="multipart/form-data">
      <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
        <legend class="fs-6 float-none w-auto">Data Registrasi</legend>
  
        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="kode_sales" class="col-form-label">Kode sales</label>
          </div>
          <div class="col-7 col-md-8">
            <select name="kode_sales" id="kode_sales" class="form-select form-select-sm">
              <option selected>Pilih</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
  
        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="tanggal_registrasi" class="col-form-label">Tanggal registrasi</label>
          </div>
          <div class="col-7 col-md-8">
            <input type="date" name="tanggal_registrasi" id="tanggal_registrasi" 
              class="form-control form-control-sm" value="2023-08-31" min="2023-08-31">
          </div>
        </div>
      </fieldset>
  
      <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
        <legend class="fs-6 float-none w-auto">Data Pelanggan</legend>
        
        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="nama_customer" class="col-form-label">Nama pelanggan</label>
          </div>
          <div class="col-7 col-md-8">
            <input type="text" id="nama_customer" 
              class="form-control form-control-sm" wire:model="nama_customer">
            @error('nama')<span>{{ $message }}</span>@enderror
          </div>
        </div>
  
        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="nomor_ktp" class="col-form-label">Nomor KTP</label>
          </div>
          <div class="col-7 col-md-8">
            <input type="text" id="nomor_ktp" 
              class="form-control form-control-sm" wire:model="no_ktp">
            @error('no_ktp')<span>{{ $message }}</span>@enderror
          </div>
        </div>
  
        <div class="row">
          <div class="col-5 col-md-4">
            <label for="alamat" class="col-form-label">Alamat</label>
          </div>
          <div class="col-7 col-md-8">
            <textarea id="alamat" rows="2" class="form-control form-control-sm"
              wire:model="alamat"></textarea>
              @error('alamat')<span>{{ $message }}</span>@enderror
          </div>
        </div>
  
        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="tanggal_lahir" class="col-form-label">Tanggal lahir</label>
          </div>
          <div class="col-7 col-md-8">
            <input type="date" id="tanggal_lahir" 
              class="form-control form-control-sm" wire:model="tanggal_lahir">
              @error('tanggal_lahir')<span>{{ $message }}</span>@enderror
          </div>
        </div>
  
        <div class="row">
          <div class="col-5 col-md-4">
            <label for="hp" class="col-form-label">Telepon seluler / HP</label>
          </div>
          <div class="col-7 col-md-8">
            <input type="text" id="hp" class="form-control form-control-sm"
              aria-describedby="hp_help" wire:model="no_hp">
            @error('no_hp')<span>{{ $message }}</span>@enderror
            <div id="hp_help" class="form-text">
              <p>
                Mohon diisi <span class="fw-bold text-uppercase">hanya nomor hp saja</span>
                Bisa dengan format: 0812xxxxxx;0856xxxxxxx
                (pakai <span class="fw-bold">titik koma</span>, jika nomor lebih dari satu)<br/><br/>
    
                Mohon jangan mengisi nomor telepon rumah,
                karena untuk keperluan Mass SMS Broadcast
              </p>
            </div>
          </div>
        </div>
  
        <div class="row">
          <div class="col-5 col-md-4">
            <label for="telepon_rumah" class="col-form-label">Telepon rumah</label>
          </div>
          <div class="col-7 col-md-8">
            <input type="text" id="telepon_rumah" class="form-control form-control-sm"
              wire:model="telepon_rumah">
            @error('telepon_rumah')<span>{{ $message }}</span>@enderror
          </div>
        </div>
  
        <div class="row">
          <div class="col-5 col-md-4">
            <label for="email" class="col-form-label">Email</label>
          </div>
          <div class="col-7 col-md-8">
            <input type="email" name="email" id="email" class="form-control form-control-sm"
              wire:model="email">
            @error('email')<span>{{ $message }}</span>@enderror
          </div>
        </div>
      </fieldset>
      
      <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
        <legend class="fs-6 float-none w-auto">Data Pembayaran</legend>
        
        <div class="form-check">
          <input type="radio" name="pembayaran" id="pembayaran_rumah" class="form-check-input">
          <label for="pembayaran_rumah" class="form-check-label">Penagihan ke rumah pelanggan</label>
        </div>
        <div class="form-check">
          <input type="radio" name="pembayaran" id="pembayaran_kantor" class="form-check-input">
          <label for="pembayaran_kantor" class="form-check-label">Pembayaran langsung ke kantor</label>
        </div>
      </fieldset>
  
      <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
        <legend class="fs-6 float-none w-auto">Data Layanan</legend>
  
        <div class="d-flex justify-content-evenly mb-3">
          <div class="form-check form-check-inline">
            <input type="radio" name="layanan" id="layanan_reguler" class="form-check-input" checked>
            <label for="layanan_reguler" class="form-check-label">Layanan reguler</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" name="layanan" id="layanan_non_reguler" class="form-check-input">
            <label for="layanan_non_reguler" class="form-check-label">Pembayaran non reguler</label>
          </div>
        </div>
  
        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="paket_layanan" class="col-form-label">Paket layanan</label>
          </div>
          <div class="col-7 col-md-8">
            <select name="paket_layanan" id="paket_layanan" class="form-select form-select-sm">
              <option value="asm_internet_50_mbps" selected>ASM Internet 50 MBPS</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
  
        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="frekuensi_layanan" class="col-form-label">Frekuensi layanan</label>
          </div>
          <div class="col-7 col-md-8">
            <select name="frekuensi_layanan" id="frekuensi_layanan" class="form-select form-select-sm">
              <option selected>Pilih</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
  
        <div class="row">
          <div class="col-5 col-md-4">
            <label for="keterangan_lain" class="col-form-label">Keterangan lain</label>
          </div>
          <div class="col-7 col-md-8">
            <textarea name="keterangan_lain" id="keterangan_lain" rows="2" class="form-control form-control-sm"></textarea>
          </div>
        </div>
      </fieldset>
  
      <fieldset class="border border-2 border-danger-subtle rounded-3 text-center p-3 my-3">
        <button type="submit" class="btn btn-outline-primary btn-sm">
          Tambah
        </button>
      </fieldset>
      </form>
    </div>
  </div>
</div>