<div>
  <div class="container-fluid">
    <span class="lead">Tagihan Pelanggan</span>
  </div>

  <div class="container-fluid my-2">
    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="filterType" class="col-form-label">Jenis</label>
      </div>
      <div class="col-7 col-sm-5 col-md-3 col-lg-3">
        <select id="filterType" class="form-select form-select-sm"
          wire:model.live="filterType">
          <option value="">Semua</option>
          <option value="reguler">Reguler</option>
          <option value="non reguler">Non reguler</option>
        </select>
      </div>
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="filterService" class="col-form-label">Layanan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-3 col-lg-3">
        <select id="filterService" class="form-select form-select-sm"
          wire:model.live="filterService">
          <option value="">Semua</option>
          <option value="tv">TV only</option>
          <option value="inet">Inet only</option>
          <option value="tv & inet">TV & Inet</option>
          <option value="nonbiasa">Nonbiasa</option>
          <option value="analog">Analog only</option>
        </select>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="filterSubsperiod" class="col-form-label">Frekuensi</label>
      </div>
      <div class="col-7 col-sm-5 col-md-3 col-lg-3">
        <select id="filterSubsperiod" class="form-select form-select-sm"
          wire:model.live="filterSubsperiod">
          <option value="">Semua</option>
          <option value="1">Per 1 bulan</option>
          <option value="3">Per 3 bulan</option>
          <option value="6">Per 6 bulan</option>
          <option value="12">Per 12 bulan</option>
        </select>
      </div>
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="filterStatus" class="col-form-label">Status</label>
      </div>
      <div class="col-7 col-sm-5 col-md-3 col-lg-3">
        <select id="filterStatus" class="form-select form-select-sm"
          wire:model.live="filterStatus">
          <option value="">Semua</option>
          <option value="lunas">Lunas</option>
          <option value="belum lunas">Belum lunas</option>
        </select>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="filterDay" class="col-form-label">Tanggal Tagihan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-3 col-lg-3">
        <div class="input-group">
          <select id="filterDay" class="form-select form-select-sm"
            wire:model.live="filterDay">
            <option value="">Semua</option>
            <option value="1">1</option><option value="2">2</option><option value="3">3</option>
            <option value="4">4</option><option value="5">5</option><option value="6">6</option>
            <option value="7">7</option><option value="8">8</option><option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option><option value="12">12</option><option value="13">13</option>
            <option value="14">14</option><option value="15">15</option><option value="16">16</option>
            <option value="17">17</option><option value="18">18</option><option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option><option value="22">22</option><option value="23">23</option>
            <option value="24">24</option><option value="25">25</option><option value="26">26</option>
            <option value="27">27</option><option value="28">28</option><option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
          <select id="filterMonth" class="form-select form-select-sm"
            wire:model.live="filterMonth">
            <option value="">Semua</option>
            <option value="1">Januari</option><option value="2">Februari</option><option value="3">Maret</option>
            <option value="4">April</option><option value="5">Mei</option><option value="6">Juni</option>
            <option value="7">Juli</option><option value="8">Agustus</option><option value="9">September</option>
            <option value="10">Oktober</option><option value="11">November</option><option value="12">Desember</option>
          </select>
          <select id="filterYear" class="form-select form-select-sm"
            wire:model.live="filterYear">
            <option value="">Semua</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
          </select>
          
        </div>
      </div>
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="searchTerm" class="col-form-label">Cari</label>
      </div>
      <div class="col-7 col-sm-5 col-md-3 col-lg-3">
        <input type="text" id="searchTerm" class="form-control form-control-sm"
          wire:model.live="searchTerm">
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="table-responsive">
      <table class="table table-sm table-striped table-hover caption-top text-truncate">
        <thead>
          <tr class="table-danger text-center">
            <th class="col">#</th>
            <th class="col">No Tagihan</th>
            <th class="col">Jenis</th>
            <th class="col">Periode</th>
            <th class="col">Tanggal Tagihan</th>
            <th class="col">Cust ID</th>
            <th class="col">Nama Pelanggan</th>
            <th class="col">Layanan</th>
            <th class="col">Tagihan</th>
            <th class="col">Status</th>
            <th class="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          @if($table->count())
            @foreach($table as $data)
              <tr wire:key="{{$data->id}}">
                <td class="text-end">{{ $table->firstItem() + $loop->index }}</td>
                <td class="text-center"><a class="text-danger-emphasis" href="/{{$data->id}}">{{$data->billnumber}}</a></td>
                <td class="text-center text-uppercase">
                  @if($data->type === 'reguler')
                    <span class="badge text-bg-primary">{{$data->type}}</span>
                  @elseif($data->type === 'non reguler')
                    <span class="badge text-bg-warning">{{$data->type}}</span>
                  @endif
                </td>
                <td>{{date('F Y', strtotime($data->billdate))}}</td>
                <td>{{date('d M Y', strtotime($data->billdate))}}</td>
                <td><a href="/customer_detail/{{$data->customerid}}" class="text-danger-emphasis">{{$data->customer->member}}</a></td>
                <td>{{$data->customer->name}}</td>
                <td>{{$data->service->name}}</td>
                <td class="text-end">{{number_format($data->bill, 0, ',', '.')}}</td>
                <td class="text-center text-uppercase">
                  @if($data->status === 'lunas')
                  <span class="badge text-bg-success">{{$data->status}}</span>
                  @elseif($data->status === 'belum lunas')
                  <span class="badge text-bg-danger">blm lunas</span>
                  @endif
                </td>
                <td class="text-center">
                  <a class="btn btn-outline-warning btn-sm" 
                    href="/{{$data->id}}">
                    Ubah
                  </a>
                </td>
              </tr>
            @endforeach
          @else
            <tr class="text-center fst-italic">
              <td colspan="11">Data tidak ditemukan</td>
            </tr>
          @endif
        </tbody>
      </table>
      {{ $table->links() }}
    </div>
  </div>

</div>