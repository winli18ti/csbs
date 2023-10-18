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
  </div>

  <div class="container-fluid d-flex gap-1 justify-content-end">
    <button class="btn btn-outline-primary btn-sm" wire:click.prevent="navigate('complainform')">
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
          @if($complainData->count())
            @foreach($complainData as $data)
              <tr>
                <td></td>
                <td>{{ $data->code  }}</td>
                <td>{{ $data->subject  }}</td>
                <td>{{ $data->servicetype  }}</td>
                <td>{{ $data->priority  }}</td>
                <td>{{ $data->submittedby  }}</td>
                <td>{{ Carbon\Carbon::create($data->acceptedbydate)->diffForHumans(Carbon\Carbon::now())  }}</td>
                <td>{{ $data->status  }}</td>
                <td>
                  <button wire:click.prevent="complainView({{$data->id}}, 'view')">View</button>
                  <button wire:click.prevent="complainView({{$data->id}}, 'edit')">Edit</button>
                </td>
              </tr>
            @endforeach
          @else
            <tr>
              <td class="text-center fst-italic" colspan="9">Data tidak ditemukan</td>
            </tr>
          @endif
        </tbody>
      </table>
    </div>
  </div>
</div>