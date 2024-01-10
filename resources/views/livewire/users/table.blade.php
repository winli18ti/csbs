<div>
  <div class="container-fluid mb-2">
    <span class="lead">Data User</span>
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
          <option value="aktif">Aktif</option>
          <option value="nonaktif">Nonaktif</option>
        </select>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="filterRole" class="col-form-label">Peran</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <select id="filterRole" class="form-select form-select-sm"
          wire:model.live="filterRole">
          <option value="">Semua</option>
          <option value="admin">Admin</option>
          <option value="cs">CS</option>
          <option value="finance">Finance</option>
          <option value="noc">NOC</option>
          <option value="officer">Teknisi</option>
        </select>
      </div>
    </div>
  </div>
  
  <div class="container-fluid d-flex gap-1 justify-content-end my-2">
    <button class="btn btn-outline-primary btn-sm"
      wire:click.prevent="add">
      Tambah User
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
            <th class="col">Nama</th>
            <th class="col">Username</th>
            <th class="col">Peran</th>
            <th class="col">Status</th>
            <th class="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          @if($table->count())
            @foreach($table as $data)
              <tr wire:key="{{$data->id}}">
                <td class="text-center">{{ $table->firstItem() + $loop->index }}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td class="text-center">
                  @if($data->role === 'admin')
                  Admin
                  @elseif($data->role === 'cs')
                  CS
                  @elseif($data->role === 'finance')
                  Finance
                  @elseif($data->role === 'noc')
                  NOC
                  @elseif($data->role === 'officer')
                  Officer
                  @endif
                </td>
                <td class="text-center text-uppercase">
                  @if($data->status === 'aktif')
                    <span class="badge text-bg-success">{{$data->status}}</span>
                  @elseif($data->status === 'nonaktif')
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
            <tr><td colspan="6">Data tidak ditemukan</td></tr>
          @endif
        </tbody>
      </table>
      {{ $table->links() }}
    </div>
  </div>
</div>