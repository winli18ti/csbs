<div>
  <div class="container-fluid">
    <span class="lead">
      Ubah Pengaduan Pelanggan
    </span>
  </div>

  <div class="container-fluid my-2">
    <button class="btn btn-outline-primary btn-sm"
      wire:click.prevent="navigate('table')">
      Kembali
    </button>
  </div>

  <div class="container-fluid my-2 pb-5">
    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="member" class="col-form-label">Nomor pelanggan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="member" 
          class="form-control form-control-sm"
          wire:model="member" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="name" class="col-form-label">Nama pelanggan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="name" 
          class="form-control form-control-sm"
          wire:model="name" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="code" class="col-form-label">Kode tracking</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="code" 
          class="form-control form-control-sm"
          wire:model="code" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="status" class="col-form-label">Status</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <select id="status" class="form-select form-select-sm"
          wire:model="status">
          <option value="tunggu" selected>Tunggu</option>
          <option value="proses">Proses</option>
          <option value="selesai">Selesai</option>
        </select>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="priority" class="col-form-label">Prioritas</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <select id="priority" class="form-select form-select-sm"
          wire:model="priority">
          <option value="biasa" selected>Biasa</option>
          <option value="mendesak">Mendesak</option>
          <option value="prioritas utama">Prioritas utama</option>
        </select>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="servicetype" class="col-form-label">Tipe layanan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <select id="servicetype" class="form-select form-select-sm"
          wire:model="servicetype">
          <option value="analog" selected>Analog</option>
          <option value="internet">Internet</option>
          <option value="non biasa">Non biasa</option>
          <option value="tv">TV</option>
          <option value="tv & internet">TV & internet</option>
        </select>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="via" class="col-form-label">Via laporan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <select id="via" class="form-select form-select-sm"
          wire:model="via">
          <option value="telepon/fax" selected>Telepon/fax</option>
          <option value="email">Email</option>
          <option value="datang">Datang</option>
        </select>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="source" class="col-form-label">Sumber</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <select id="source" class="form-select form-select-sm"
          wire:model="source">
          <option value="pelanggan" selected>Pelanggan</option>
          <option value="internal">Internal</option>
        </select>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="submittedby" class="col-form-label">Disampaikan oleh</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="submittedby" 
          class="form-control form-control-sm"
          wire:model="submittedby">
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="subject" class="col-form-label">Subjek keluhan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="subject" 
          class="form-control form-control-sm"
          wire:model="subject">
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="complain" class="col-form-label">Keluhan pelanggan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <textarea type="text" id="complain" 
          class="form-control form-control-sm"
          wire:model="complain"></textarea>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="solution" class="col-form-label">Penyelesaian</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <textarea type="text" id="solution" 
          class="form-control form-control-sm"
          wire:model="solution"></textarea>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="acceptedby" class="col-form-label">Diterima oleh</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="acceptedby" 
          class="form-control form-control-sm"
          wire:model="acceptedby" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="updatedby" class="col-form-label">Diubah oleh</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="updatedby" 
          class="form-control form-control-sm"
          wire:model="updatedby" readonly>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-sm-9 col-md-7 col-lg-6 col-xl-5">
        <div class="text-center">
          <button class="btn btn-outline-primary btn-sm"
            wire:click.prevent="update">
            Ubah
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid my-2">
    Tulis Pesan ?
  </div>
</div>