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
        <label for="address" class="col-form-label">Alamat Pemasangan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <textarea readonly id="address" rows="2" class="form-control form-control-sm" wire:model="address" readonly></textarea>
      </div>
    </div>

    <div class="mt-2">
      <span class="lead">Perubahan Layanan</span>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-md-3 col-xl-2">
          <label for="service" class="col-form-label">Nama Layanan</label>
        </div>
        <div class="col-7 col-sm-5 col-md-4 col-lg-3">
          <input type="text" id="service" 
            class="form-control form-control-sm" wire:model="service" readonly>
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-md-3 col-xl-2">
          <label for="requestdate" class="col-form-label">Tanggal Permintaan</label>
        </div>
        <div class="col-7 col-sm-5 col-md-4 col-lg-3">
          <input type="date" id="requestdate" 
            class="form-control form-control-sm" wire:model="requestdate">
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-md-3 col-xl-2">
          <label for="tvanalog" class="col-form-label">Ubah Layanan</label>
        </div>
        <div class="col-7 col-sm-5 col-md-4 col-lg-3">
          <select id="servicename" class="form-select form-select-sm" wire:model.live="servicename">
            <option value="" selected>-- Pilih Paket layanan --</option>
            @foreach($serviceData as $data)
              <option value="{{$data->id}}">{{$data->name}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-md-3 col-xl-2">
          <label for="count" class="col-form-label">Keterangan</label>
        </div>
        <div class="col-7 col-sm-5 col-md-4 col-lg-3">
          <textarea id="info" rows="2" class="form-control form-control-sm"
            wire:model="info"></textarea>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-sm-9 col-md-7 col-lg-6 col-xl-5">
          <div class="text-center">
            <button type="submit" class="btn btn-outline-primary btn-sm">
              Proses
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>