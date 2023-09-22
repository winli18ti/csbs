<div>
  <div class="container-fluid">
    <span class="lead">Data Kolektor</span>
  </div>
  
  <div class="container-fluid d-flex gap-1 justify-content-end my-2">
    <button class="btn btn-outline-primary btn-sm"
      wire:click.prevent="add">
      Tambah Kolektor
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
            <th class="col">Nama Kolektor</th>
            <th class="col">Status</th>
            <th class="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($table as $data)
          <tr>
            <td class="text-center">{{$data->id}}</td>
            <td>{{$data->name}}</td>
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
        </tbody>
      </table>
      {{ $table->links() }}
    </div>
    @if(empty($table))
    <p class="text-center fst-italic">Data kolektor kosong</p>
    @endif
  </div>
</div>