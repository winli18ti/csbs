<div class="mt-3">
  <div class="container-fluid">
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
        <label for="status" class="col-form-label">Status Layanan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        @if($status === 'active')
        <span class="badge text-bg-success text-uppercase">{{$status}}</span>
        @elseif($status === 'suspend')
        <span class="badge text-bg-primary text-uppercase">{{$status}}</span>
        @elseif($status === 'registration')
        <span class="badge text-bg-info text-uppercase">{{$status}}</span>
        @elseif($status === 'req dismantle')
        <span class="badge text-bg-warning text-uppercase">{{$status}}</span>
        @elseif($status === 'dismantle')
        <span class="badge text-bg-danger text-uppercase">{{$status}}</span>
        @elseif($status === 'cancel')
        <span class="badge text-bg-secondary text-uppercase">{{$status}}</span>
        @endif
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
  </div>

  <div class="container-fluid d-flex gap-1 mt-4">
    <button class="btn btn-outline-primary btn-sm">
      Nonaktifkan Layanan
    </button>
    <button class="btn btn-outline-primary btn-sm">
      Ubah Paket
    </button>
    <button class="btn btn-outline-primary btn-sm">
      Ubah STB/TV
    </button>
    <button class="btn btn-outline-primary btn-sm">
      Request Dismantle
    </button>
  </div>

  <div class="container-fluid">
    <div class="table-responsive">
      <table class="table table-sm table-striped table-hover caption-top text-truncate">
        <thead>
          <tr class="table-danger text-center">
            <th class="col">#</th>
            <th class="col">Nama Layanan</th>
            <th class="col">Keterangan</th>
            <th class="col">Status</th>
            <th class="col">Terlayani Sejak</th>
          </tr>
        </thead>
        <tbody>

          <tr>
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

  <div class="container-fluid">
    <div class="table-responsive">
      <table class="table table-sm table-striped table-hover caption-top text-truncate">
        <thead>
          <tr class="table-danger text-center">
            <th class="col">#</th>
            <th class="col">No Seri Decoder</th>
            <th class="col">No Kartu Pelanggan</th>
            <th class="col">S</th>
          </tr>
        </thead>
        <tbody>

          <tr>
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