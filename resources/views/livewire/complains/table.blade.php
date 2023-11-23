<div>
  <div class="container-fluid mb-2">
    <span class="lead">Data Pengaduan</span>
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
          <option value="tunggu">Belum diproses</option>
          <option value="proses">Sedang diproses</option>
          <option value="selesai">Telah selesai</option>
        </select>
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
            <th class="col">Kode</th>
            <th class="col">Cust ID</th>
            <th class="col">Alamat</th>
            <th class="col">Subjek</th>
            <th class="col">Layanan</th>
            <th class="col">Prioritas</th>
            <th class="col">Diterima</th>
            <th class="col">Status</th>
            <th class="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($table as $data)
          <tr>
            <td class="text-end">{{ $table->firstItem() + $loop->index }}</td>
            <td class="text-center">
              <a class="text-danger-emphasis" href=""
                wire:click.prevent="edit({{$data->id}})">
                {{$data->code}}
              </a>
            </td>
            <td class="text-center">
              <a class="text-danger-emphasis" 
                href="/customer_detail/{{$data->customerid}}">
                {{$data->customer->member}}
              </a>
            </td>
            <td>{{$data->customer->address}}</td>
            <td>{{$data->subject}}</td>
            <td class="text-uppercase">{{$data->servicetype}}</td>
            <td class="text-capitalize">{{$data->priority}}</td>
            <td>{{ date('d M Y H:i:s', strtotime($data->acceptedbydate))  }}</td>
            <td class="text-center text-uppercase">
              @if($data->status === 'tunggu')
                <span class="badge text-bg-danger">{{$data->status}}</span>
              @elseif($data->status === 'proses')
                <span class="badge text-bg-warning">{{$data->status}}</span>
              @elseif($data->status === 'selesai')
                <span class="badge text-bg-primary">{{$data->status}}</span>
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
        </tbody>
      </table>
      {{ $table->links() }}
    </div>
    @if(!$table->count())
    <p class="text-center fst-italic">Data pengaduan kosong</p>
    @endif
  </div>
</div>