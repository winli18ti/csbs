<div>
  <div class="container-fluid">
    <span class="lead">Data Pelanggan</span>
  </div>

  <div class="container-fluid my-2">
    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="filterStatus" class="col-form-label">Status</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <select id="filterStatus" class="form-select form-select-sm"
          wire:model.live="filterStatus">
          <option value="">Semua</option>
          <option value="active">Aktif</option>
          <option value="suspend">Nonaktif</option>
          <option value="registration">Registrasi</option>
          <option value="req dismantle">Request Dismantle</option>
          <option value="dismantle">Berhenti</option>
          <option value="cancel">Batal</option>
        </select>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="filterPaytype" class="col-form-label">Cara pembayaran</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <select id="filterPaytype" class="form-select form-select-sm"
          wire:model.live="filterPaytype">
          <option value="">Semua</option>
          <option value="penagihan ke pelanggan">Penagihan ke pelanggan</option>
          <option value="pembayaran ke kantor">Pembayaran ke kantor</option>
          <option value="belum terdefinisi">Belum terdefinisi</option>
        </select>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="filterBillperiod" class="col-form-label">Periode tanggal tagihan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <select id="filterBillperiod" class="form-select form-select-sm"
          wire:model.live="filterBillperiod">
          <option value="">Semua</option>
          <option value="1">Tanggal 1</option>
          <option value="15">Tanggal 15</option>
          <option value="belum terdefinisi">Belum terdefinisi</option>
        </select>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="filterSubsperiod" class="col-form-label">Periode pembayaran</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <select id="filterSubsperiod" class="form-select form-select-sm"
          wire:model.live="filterSubsperiod">
          <option value="">Semua</option>
          <option value="1">Per 1 bulan</option>
          <option value="3">Per 3 bulan</option>
          <option value="6">Per 6 bulan</option>
          <option value="12">Per 12 bulan</option>
        </select>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="filterVip" class="col-form-label">VIP</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <select id="filterVip" class="form-select form-select-sm"
          wire:model.live="filterVip">
          <option value="">Semua pelanggan</option>
          <option value="1">Pelanggan VIP</option>
          <option value="0">Selain VIP</option>
        </select>
      </div>
    </div>
  </div>

  <div class="container-fluid d-flex gap-1 justify-content-end mt-4 mb-2">
    <button class="btn btn-outline-primary btn-sm"
      wire:click.prevent="navigate('add')">
        Tambah Pelanggan
    </button>
  </div>

  <div class="container-fluid">
    @if(session()->has('message'))
      <div class="alert alert-success my-3">
        {{ session('message') }}
      </div>
    @endif

    <div class="table-responsive">
      <table class="table table-sm table-striped table-hover caption-top text-truncate">
        <thead>
          <tr class="table-danger text-center">
            <th class="col">#</th>
            @if(!($filterStatus === '' || $filterStatus === 'active'))
            <th class="col">Tanggal</th>
            @endif
            <th class="col">Cust ID</th>
            <th class="col">Nama</th>
            <th class="col">Sales</th>
            <th class="col">Paket Layanan</th>
            <th class="col">Alamat Instalasi</th>
            <th class="col">Telp Rumah</th>
            <th class="col">Telp Seluler</th>
            <th class="col">Tgl</th>
            <th class="col">Periode</th>
            <th class="col">Cara Pembayaran</th>
            <th class="col">FN</th>
            <th class="col">Status</th>
            <th class="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($table as $data)
          <tr>
            <td class="text-center">{{$data->id}}</td>
            @if(!($filterStatus === '' || $filterStatus === 'active'))
            <td class="text-center">{{$data->statusdate}}</td>
            @endif
            <td><a class="text-danger-emphasis" href="/customer_detail/{{$data->id}}">{{$data->member}}</a></td>
            <td>{{$data->name}}</td>
            <td>{{$data->marketerid}}</td>
            <td>Paket Layanan</td>
            <td>{{$data->address}}</td>
            <td>{{$data->homephone}}</td>
            <td>{{$data->cellphone}}</td>
            <td class="text-center">{{$data->billperiod}}</td>
            <td>Per {{$data->subsperiod}} bulan</td>
            <td>{{$data->paytype}}</td>
            <td class="text-center text-uppercase">
              @if($data->node === 'NUL')
              <span class="badge text-bg-warning">{{$data->node}}</span>
              @else
              <span class="badge text-bg-success">{{$data->node}}</span>
              @endif
            </td>
            <td class="text-uppercase">
              @if($data->status === 'active')
              <span class="badge text-bg-success">{{$data->status}}</span>
              @elseif($data->status === 'suspend')
              <span class="badge text-bg-primary">{{$data->status}}</span>
              @elseif($data->status === 'registration')
              <span class="badge text-bg-info">{{$data->status}}</span>
              @elseif($data->status === 'req dismantle')
              <span class="badge text-bg-warning">{{$data->status}}</span>
              @elseif($data->status === 'dismantle')
              <span class="badge text-bg-danger">{{$data->status}}</span>
              @elseif($data->status === 'cancel')
              <span class="badge text-bg-secondary">{{$data->status}}</span>
              @endif
            </td>
            <td class="text-center">
              <a class="btn btn-outline-warning btn-sm" 
                href="/customer_detail/{{$data->id}}">
                Ubah
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $table->links() }}
    </div>
    @if(!$table->count())
    <p class="text-center fst-italic">Data pelanggan kosong</p>
    @endif
  </div>
</div>