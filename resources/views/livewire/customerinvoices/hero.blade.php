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
    
    <div class="container-fluid d-flex gap-1 justify-content-end mb-2">
      <button class="btn btn-outline-primary btn-sm">
        Generate (Reguler)
      </button>
      <button class="btn btn-outline-primary btn-sm" wire:click.prevent="navigate('add')">
        Tambah Tagihan
      </button>
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
              <th class="col">Layanan</th>
              <th class="col">Frekuensi</th>
              <th class="col">Tagihan</th>
              <th class="col">Status</th>
              <th class="col">Tanggal Lunas</th>
              <th class="col">Adm Lunas</th>
              <th class="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($invoicesData as $data)
            <tr>
              <td class="text-center">#</td>
              <td class="text-center"><a href="/{{$data->id}}" class="text-danger-emphasis">{{$data->billnumber}}</a></td>
              <td class="text-center text-uppercase">
                @if($data->type === 'reguler')
                  <span class="badge text-bg-primary">{{$data->type}}</span>
                @elseif($data->type === 'non reguler')
                  <span class="badge text-bg-warning">{{$data->type}}</span>
                @endif
              </td>
              <td>{{date('F Y', strtotime($data->billdate))}}</td>
              <td>{{$data->service->name}}</td>
              <td class="text-center">Per {{$data->subsperiod}} bulan</td>
              <td class="text-end">{{number_format($data->bill, 0, ',', '.')}}</td>
              <td class="text-center text-uppercase">
                @if($data->status === 'lunas')
                <span class="badge text-bg-success">{{$data->status}}</span>
                @elseif($data->status === 'belum lunas')
                <span class="badge text-bg-danger">blm lunas</span>
                @endif
              </td>
              <td>
                @if($data->paiddate)
                {{date('d M Y', strtotime($data->paiddate))}}
                @endif
              </td>
              <td>
                @if(!is_null($data->user))
                {{$data->user->name}}
                @endif
              </td>
              <td class="text-center"><a href="/{{$data->id}}" class="btn btn-outline-warning btn-sm">Ubah</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{-- {{ $invoicesData->links() }} --}}
      </div>
      @if(!$invoicesData->count())
      <p class="text-center fst-italic">Data tagihan tidak ada</p>
      @endif
    </div>
  </div>