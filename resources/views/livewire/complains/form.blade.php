<div>
  <div class="container-fluid">
    <span class="lead">
      Ubah Pengaduan Pelanggan
    </span>
  </div>

  <div class="container-md mt-3">
    <div class="row justify-content-center">
      <div class="col-lg-9 col-xl-8 col-xxl-7">
        <button class="btn btn-outline-primary btn-sm"
          wire:click.prevent="navigate('table')">
          Kembali
        </button>
        <form wire:submit="update" enctype="multipart/form-data">
          <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
            <legend class="fs-6 float-none w-auto">Data Pelanggan</legend>
      
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="member" class="col-form-label">No Pelanggan</label>
              </div>
              <div class="col-7 col-md-8">
                  <input type="text" id="member" class="form-control form-control-sm" 
                      wire:model.live="member" disabled>
                  @error('member')<span class="text-danger fw-light">{{ $message }}</span>@enderror
              </div>
            </div>
      
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="name" class="col-form-label">Nama Pelanggan</label>
              </div>
              <div class="col-7 col-md-8">
                  <input type="text" id="name" class="form-control form-control-sm" 
                      wire:model.live="name" disabled>
                  @error('name')<span class="text-danger fw-light">{{ $message }}</span>@enderror
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="code" class="col-form-label">Kode tracking</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="text" id="code" 
                  class="form-control form-control-sm"
                  wire:model="code" readonly>
              </div>
            </div>
          </fieldset>
          <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
            <legend class="fs-6 float-none w-auto">Data Komplain</legend>
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="status" class="col-form-label">Status</label>
              </div>
              <div class="col-7 col-md-8">
                  <select id="status" class="form-select form-select-sm"
                  wire:model.live="status">
                    <option value="tunggu" selected>Tunggu</option>
                    <option value="proses">Proses</option>
                    <option value="selesai">Selesai</option>
                  </select>
                  @error('status')<span class="text-danger fw-light">{{ $message }}</span>@enderror
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="priority" class="col-form-label">Prioritas</label>
              </div>
              <div class="col-7 col-md-8">
                <select id="priority" class="form-select form-select-sm"
                  wire:model="priority">
                  <option value="biasa" selected>Biasa</option>
                  <option value="mendesak">Mendesak</option>
                  <option value="prioritas utama">Prioritas utama</option>
                </select>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="servicetype" class="col-form-label">Tipe layanan</label>
              </div>
              <div class="col-7 col-md-8">
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
              <div class="col-5 col-md-4">
                <label for="via" class="col-form-label">Via laporan</label>
              </div>
              <div class="col-7 col-md-8">
                <select id="via" class="form-select form-select-sm"
                  wire:model="via">
                  <option value="telepon/fax" selected>Telepon/fax</option>
                  <option value="email">Email</option>
                  <option value="datang">Datang</option>
                </select>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="source" class="col-form-label">Sumber</label>
              </div>
              <div class="col-7 col-md-8">
                <select id="source" class="form-select form-select-sm"
                  wire:model="source">
                  <option value="pelanggan" selected>Pelanggan</option>
                  <option value="internal">Internal</option>
                </select>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="submittedby" class="col-form-label">Disampaikan oleh</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="text" id="submittedby" 
                  class="form-control form-control-sm"
                  wire:model="submittedby">
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="subject" class="col-form-label">Subjek keluhan</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="text" id="subject" 
                  class="form-control form-control-sm"
                  wire:model="subject">
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="description" class="col-form-label">Keluhan pelanggan</label>
              </div>
              <div class="col-7 col-md-8">
                <textarea type="text" id="description" 
                  class="form-control form-control-sm"
                  wire:model="description"></textarea>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="solution" class="col-form-label">Penyelesaian</label>
              </div>
              <div class="col-7 col-md-8">
                <textarea type="text" id="solution" 
                  class="form-control form-control-sm"
                  wire:model="solution"></textarea>
              </div>
            </div>
          </fieldset>
          <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="acceptedby" class="col-form-label">Diterima oleh</label>
              </div>
              <div class="col-7 col-md-8">
                {{$acceptedby}} - {{$acceptedbydate}}
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="updatedby" class="col-form-label">Diubah oleh</label>
              </div>
              <div class="col-7 col-md-8">
                {{$updatedby}} - {{$updatedbydate}}
              </div>
            </div>
          </fieldset>
          <fieldset class="border border-2 border-danger-subtle rounded-3 text-center p-3 my-3">
            <button class="btn btn-outline-primary btn-sm" type="submit">
              Ubah
            </button>
          </fieldset>
          <div class="container-fluid my-2">
            Tulis Pesan ?
          </div>
        </form>
      </div>
    </div>
  </div>

    {{-- <div class="row mt-3">
      <div class="col-sm-9 col-md-7 col-lg-6 col-xl-5">
        <div class="text-center">
          <button class="btn btn-outline-primary btn-sm"
            wire:click.prevent="update">
            Ubah
          </button>
        </div>
      </div>
    </div>
  </div> --}}

  {{-- <div class="container-fluid my-2">
    Tulis Pesan ?
  </div> --}}
</div>