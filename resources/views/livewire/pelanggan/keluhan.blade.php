<div class="mt-3">
  <div class="container-fluid">
  <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="kode_sales" class="col-form-label">No pelanggan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" name="no_pelanggan" id="no_pelanggan" 
          class="form-control form-control-sm" wire:model="id">
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="nama_pelanggan" class="col-form-label">Nama pelanggan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" name="nama_pelanggan" id="nama_pelanggan" 
          class="form-control form-control-sm" wire:model="nama_customer">
      </div>
    </div>
  </div>

  <div class="container-fluid d-flex gap-1 justify-content-end">
    <button class="btn btn-outline-primary btn-sm">
      Tambah Pengaduan
    </button>
  </div>

  <div class="container-fluid">
    <div class="table-responsive">
      <table class="table table-sm table-striped table-hover caption-top text-truncate">
        <thead>
          <tr class="table-danger text-center">
            <th class="col">#</th>
            <th class="col">Kode</th>
            <th class="col">Subyek</th>
            <th class="col">Layanan</th>
            <th class="col">Prioritas</th>
            <th class="col">Diterima</th>
            <th class="col">Durasi</th>
            <th class="col">Status</th>
            <th class="col">Opsi</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

        </tbody>
      </table>
    </div>
    <p class="text-center fst-italic">Data tidak ditemukan</p>
  </div>
</div>