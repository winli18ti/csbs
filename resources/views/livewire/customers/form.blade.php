<div>
  <div class="container-fluid">
    <span class="lead">
      Tambah Pelanggan Baru
    </span>
  </div>

  <div class="container-md mt-3">
    <div class="row justify-content-center">
      <div class="col-lg-9 col-xl-8 col-xxl-7">
        <button class="btn btn-outline-primary btn-sm"
          wire:click.prevent="navigate('table')">
          Kembali
        </button>
          <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
            <legend class="fs-6 float-none w-auto">Data Registrasi</legend>
      
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="marketerid" class="col-form-label">Sales marketing</label>
              </div>
              <div class="col-7 col-md-8">
                <select id="marketerid" class="form-select form-select-sm"
                  wire:model.live="marketerid">
                  <option value="" selected>-- Pilih Sales --</option>
                  @foreach($marketerData as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                  @endforeach
                </select>
                @error('marketerid') <span class="text-danger fw-light">{{$message}}</span> @enderror
              </div>
            </div>
      
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="statusdate" class="col-form-label">Tanggal registrasi</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="date" id="statusdate" class="form-control form-control-sm"
                  wire:model.live="statusdate">
                @error('statusdate') <span class="text-danger fw-light">{{$message}}</span> @enderror
              </div>
            </div>
          </fieldset>
      
          <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
            <legend class="fs-6 float-none w-auto">Data Pelanggan</legend>
            
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="name" class="col-form-label">Nama pelanggan</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="text" id="name" class="form-control form-control-sm" 
                  wire:model.live="name">
                @error('name')<span class="text-danger fw-light">{{ $message }}</span>@enderror
              </div>
            </div>
      
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="identity" class="col-form-label">Nomor KTP</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="text" id="identity" class="form-control form-control-sm" 
                wire:model.live="identity">
              </div>
            </div>
      
            <div class="row">
              <div class="col-5 col-md-4">
                <label for="address" class="col-form-label">Alamat</label>
              </div>
              <div class="col-7 col-md-8">
                <textarea id="address" rows="2" class="form-control form-control-sm"
                  wire:model.live="address"></textarea>
                  @error('address')<span class="text-danger fw-light">{{ $message }}</span>@enderror
              </div>
            </div>
      
            <div class="row">
              <div class="col-5 col-md-4">
                <label for="cellphone" class="col-form-label">Telepon seluler / HP</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="text" id="cellphone" class="form-control form-control-sm"
                  aria-describedby="cellphone_help" 
                  wire:model.live="cellphone">
                <div id="cellphone_help" class="form-text">
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
                <label for="homephone" class="col-form-label">Telepon rumah</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="text" id="homephone" class="form-control form-control-sm"
                  wire:model.live="homephone">
              </div>
            </div>
      
            <div class="row">
              <div class="col-5 col-md-4">
                <label for="email" class="col-form-label">Email</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="email" name="email" id="email" class="form-control form-control-sm"
                  wire:model.live="email">
              </div>
            </div>
          </fieldset>
          
          <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
            <legend class="fs-6 float-none w-auto">Data Pembayaran</legend>
            
            <div class="form-check">
              <input type="radio" id="paytype1" wire:model.live="paytype" value="penagihan ke pelanggan" class="form-check-input">
              <label for="paytype1" class="form-check-label">Penagihan ke rumah pelanggan</label>
            </div>
            <div class="form-check">
              <input type="radio" id="paytype2" wire:model.live="paytype" value="pembayaran ke kantor" class="form-check-input">
              <label for="paytype2" class="form-check-label">Pembayaran langsung ke kantor</label>
            </div>
            @error('paytype') <span class="text-danger fw-light">{{$message}}</span> @enderror
          </fieldset>
      
          <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
            <legend class="fs-6 float-none w-auto">Data Layanan</legend>
      
            <div class="d-flex justify-content-evenly mb-3">
              <div class="form-check form-check-inline">
                <input type="radio" id="service1" wire:model.live="servicetype" value="reguler" class="form-check-input">
                <label for="service1" class="form-check-label">Layanan reguler</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="radio" id="service2" wire:model.live="servicetype" value="special" class="form-check-input">
                <label for="service2" class="form-check-label">Pembayaran non reguler</label>
              </div>
              @error('servicetype') <span class="text-danger fw-light">{{$message}}</span> @enderror
            </div>

            @if($servicetype === 'reguler')
              <div class="row align-items-center">
                <div class="col-5 col-md-4">
                  <label for="servicename" class="col-form-label">Paket layanan</label>
                </div>
                <div class="col-7 col-md-8">
                  <select id="servicename" class="form-select form-select-sm" wire:model.live="servicename">
                    <option value="" selected>-- Pilih Paket layanan --</option>
                    @foreach($serviceData as $data)
                      <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                  </select>
                  @error('servicename') <span class="text-danger fw-light">{{$message}}</span> @enderror
                </div>
              </div>
        
              <div class="row align-items-center">
                <div class="col-5 col-md-4">
                  <label for="subsperiod" class="col-form-label">Frekuensi layanan</label>
                </div>
                <div class="col-7 col-md-8">
                  <select id="subsperiod" class="form-select form-select-sm" wire:model.live="subsperiod">
                    <option value="" selected>-- Pilih --</option>
                    <option value="1">Per 1 bulan</option>
                    <option value="3">Per 3 bulan</option>
                    <option value="6">Per 6 bulan</option>
                    <option value="12">Per 12 bulan</option>
                  </select>
                  @error('subsperiod') <span class="text-danger fw-light">{{$message}}</span> @endif
                </div>
              </div>
        
              <div class="row">
                <div class="col-5 col-md-4">
                  <label for="notes" class="col-form-label">Keterangan lain</label>
                </div>
                <div class="col-7 col-md-8">
                  <textarea id="notes" wire:model.live="notes" rows="2" class="form-control form-control-sm"></textarea>
                </div>
              </div>
            @elseif($servicetype === 'special')
              <div class="row">
                <div class="col-5 col-md-4">
                  <label for="specialname" class="col-form-label">Nama Paket</label>
                </div>
                <div class="col-7 col-md-8">
                  <input type="text" id="specialname" class="form-control form-control-sm"
                  wire:model.live="specialname">
                  @error('specialname') <span class="text-danger fw-light">{{$message}}</span> @enderror
                </div>
              </div>
              <div class="row">
                <div class="col-5 col-md-4">
                  <label for="specialprice" class="col-form-label">Total harga perbulan</label>
                </div>
                <div class="col-7 col-md-8">
                  <input type="text" id="specialprice" class="form-control form-control-sm"
                  wire:model.live="specialprice">
                  @error('specialprice') <span class="text-danger fw-light">{{$message}}</span> @enderror
                </div>
              </div>
              <div class="row">
                <div class="col-5 col-md-4">
                  <label for="specialinfo" class="col-form-label">Keterangan lain</label>
                </div>
                <div class="col-7 col-md-8">
                  <textarea id="specialinfo" wire:model.live="specialinfo" rows="2" class="form-control form-control-sm"></textarea>
                </div>
              </div>
            @endif
          </fieldset>
      
          <fieldset class="border border-2 border-danger-subtle rounded-3 text-center p-3 my-3">
            <button class="btn btn-outline-primary btn-sm" wire:click.prevent="createData">
              Tambah
            </button>
          </fieldset>
      </div>
    </div>
  </div>
</div>