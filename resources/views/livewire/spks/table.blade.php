<div>
  <div class="container-fluid mb-2">
    <span class="lead">Data SPK</span>
  </div>

  <div class="container-fluid my-2">
    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="filterStatus" class="col-form-label">Status</label>
      </div>
      <div class="col-7 col-sm-5 col-md-3 col-lg-3">
        <select id="filterStatus" class="form-select form-select-sm"
          wire:model.live="filterStatus">
          <option value="">Semua</option>
          <option value="blm proses">Belum diproses</option>
          <option value="pengerjaan">Proses pengerjaan</option>
          <option value="selesai">Telah selesai</option>
          <option value="batal">Pembatalan</option>
        </select>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="category" class="col-form-label">Kategori</label>
      </div>
      <div class="col-7 col-sm-5 col-md-3 col-lg-3">
        <select id="filterCategory" class="form-select form-select-sm"
          wire:model.live="filterCategory">
          <option value="">Semua</option>
          <option value="Registrasi">Registrasi</option>
          <option value="Tambah TV">Tambah TV</option>
          <option value="Hapus TV">Hapus TV</option>
          <option value="Dismantle">Dismantle</option>
        </select>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="searchTerm" class="col-form-label">Cari</label>
      </div>
      <div class="col-7 col-sm-5 col-md-3 col-lg-3">
        <input type="text" id="searchTerm" class="form-control form-control-sm"
          wire:model.live="searchTerm">
      </div>
    </div>
  </div>
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
            <th class="col">Kategori</th>
            <th class="col">No SPK</th>
            <th class="col">Cust ID</th>
            <th class="col">Nama Pelanggan</th>
            <th class="col">No Telp</th>
            <th class="col">Alamat</th>
            @if($filterStatus === 'batal')
              <th class="col">Tgl Batal</th>
            @else            
              <th class="col">Pengerjaan</th>
            @endif
            <th class="col">Status</th>
            <th class="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          @if($table->count())
            @foreach($table as $data)
            <tr wire:key="{{$data->id}}">
              <td class="text-center">{{ $table->firstItem() + $loop->index }}</td>
              <td class="text-center">{{$data->category}}</td>
              <td class="text-center"><a class="text-danger-emphasis" href="#">{{$data->spknumber}}</a></td>
              <td class="text-center"><a class="text-danger-emphasis" href="/customer_detail/{{$data->customerid}}">{{$data->customer->member}}</a></td>
              <td>{{$data->customer->name}}</td>
              <td>{{$data->customer->cellphone}}</td>
              <td>{{strlen($data->customer->address) > 50 ? substr($data->customer->address, 0, 50)."..." : $data->customer->address }}</td>
              <td class="text-center">
                @if(!($data->status === 'blm proses'))
                  @if($data->enddate)
                  {{date('d M Y', strtotime($data->enddate))}}
                  @elseif($data->startdate)
                  {{date('d M Y', strtotime($data->startdate))}}
                  @elseif($data->inputdate)
                  {{date('d M Y', strtotime($data->inputdate))}}
                  @endif
                @endif
              </td>
              <td class="text-center text-uppercase">
                @if($data->status === 'blm proses')
                  <span class="badge text-bg-danger">{{$data->status}}</span>
                @elseif($data->status === 'pengerjaan')
                  <span class="badge text-bg-warning">{{$data->status}}</span>
                @elseif($data->status === 'selesai')
                  <span class="badge text-bg-primary">{{$data->status}}</span>
                @elseif($data->status === 'batal')
                  <span class="badge text-bg-secondary">{{$data->status}}</span>
                @endif
              </td>
              <td class="text-center">
                <button class="btn btn-outline-warning btn-sm" 
                  wire:click.prevent="edit({{$data->id}})">
                  Ubah
                </a>
              </td>
            </tr>
            @endforeach
          @else
            <tr>
              <td colspan="10">Data tidak ditemukan</td>
            </tr>
          @endif
        </tbody>
      </table>
      {{ $table->links() }}
    </div>
  </div>
</div>