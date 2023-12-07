<div>
  <div class="container-fluid">
    <span class="lead">SMS Outbox</span>
  </div>

  <div class="container-fluid my-2">
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
            <th class="col">Tanggal Kirim</th>
            <th class="col">Penerima</th>
            <th class="col">Pesan</th>
            <th class="col">ModemID</th>
            <th class="col">Status</th>
            <th class="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($table as $data)
          <tr>
            <td class="text-center">{{ $table->firstItem() + $loop->index }}</td>
            <td class="text-center"></td>
            <td>{{$data->number}}</td>
            <td>{{$data->message}}</td>
            <td>{{$data->modemid}}</td>
            <td class="text-center">{{$data->status}}</td>
            <td class="text-center">
              
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $table->links() }}
    </div>
    @if(!$table->count())
    <p class="text-center fst-italic">Data sms inbox kosong</p>
    @endif
  </div>
</div>