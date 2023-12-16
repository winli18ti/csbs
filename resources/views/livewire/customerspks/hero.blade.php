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
  
    <div class="container-fluid my-3">
      <div class="table-responsive">
        <table class="table table-sm table-striped table-hover caption-top text-truncate">
          <thead>
            <tr class="table-danger text-center">
              <th class="col">No</th>
              <th class="col">Kategori</th>
              <th class="col">No SPK</th>
              <th class="col">Tanggal Selesai</th>
              <th class="col">Status</th>
              <th class="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
            @if($spkData->count())
              @foreach($spkData as $data)
              <tr class="text-center" wire:key="{{$data->id}}">
                <td>{{ $spkData->firstItem() + $loop->index }}</td>
                <td>{{$data->category}}</td>
                <td>{{$data->spknumber}}</td>
                <td>
                  @if($data->enddate)
                  {{date('d M Y', strtotime($data->enddate))}}
                  @endif
                </td>
                <td class="text-uppercase">
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
                <td>
                  
                </td>
              </tr>
              @endforeach
            @else
              <tr>
                <td colspan="6">Data tidak ditemukan</td>
              </tr>
            @endif
          </tbody>
        </table>
        {{ $spkData->links() }}
      </div>
    </div>
  </div>