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
  
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-md-3 col-xl-2">
          <label for="status" class="col-form-label">Status Layanan</label>
        </div>
        <div class="col-7 col-sm-5 col-md-4 col-lg-3">
          @if($status === 'active')
          <span class="badge text-bg-success text-uppercase">{{$status}}</span>
          @elseif($status === 'suspend')
          <span class="badge text-bg-primary text-uppercase">{{$status}}</span>
          @elseif($status === 'registration')
          <span class="badge text-bg-info text-uppercase">{{$status}}</span>
          @elseif($status === 'req dismantle')
          <span class="badge text-bg-warning text-uppercase">{{$status}}</span>
          @elseif($status === 'dismantle')
          <span class="badge text-bg-danger text-uppercase">{{$status}}</span>
          @elseif($status === 'cancel')
          <span class="badge text-bg-secondary text-uppercase">{{$status}}</span>
          @endif
        </div>
      </div>
  
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-md-3 col-xl-2">
          <label for="address" class="col-form-label">Alamat Pemasangan</label>
        </div>
        <div class="col-7 col-sm-5 col-md-4 col-lg-3">
          <textarea readonly id="address" rows="2" class="form-control form-control-sm" wire:model="address" readonly></textarea>
        </div>
      </div>
    </div>
  
    <div class="container-fluid d-flex gap-1 mt-4 mb-2">
      @if($status === 'registration')
      <button class="btn btn-outline-primary btn-sm" wire:click.prevent="updateStatus('cancel')">
        Pembatalan Layanan
      </button>
      @elseif($status === 'cancel' || $status === 'dismantle')
      <button class="btn btn-outline-primary btn-sm" wire:click.prevent="">
        Permintaan Aktivasi Ulang
      </button>
      @elseif($status === 'suspend' || $status === 'active')
        @if($status === 'suspend')
        <button class="btn btn-outline-primary btn-sm" wire:click.prevent="updateStatus('active')">
          Aktifkan Layanan
        </button>
        @elseif($status === 'active')
        <button class="btn btn-outline-primary btn-sm" wire:click.prevent="updateStatus('suspend')">
          Nonaktifkan Layanan
        </button>
        @endif
      <button class="btn btn-outline-primary btn-sm" wire:click.prevent="navigate('packet')">
        Ubah Paket
      </button>
      <button class="btn btn-outline-primary btn-sm" wire:click.prevent="navigate('stb')">
        Ubah STB/TV
      </button>
      <button class="btn btn-outline-primary btn-sm" wire:click.prevent="updateStatus('req dismantle')">
        Request Dismantle
      </button>
      @endif
    </div>
  
    @if($customerServiceData->count())
    <div class="container-fluid">
      <span class="lead">Layanan</span>
      <div class="table-responsive">
        <table class="table table-sm table-striped table-hover caption-top text-truncate">
          <thead>
            <tr class="table-danger text-center">
              <th class="col">#</th>
              <th class="col">Nama Layanan</th>
              <th class="col">Keterangan</th>
              <th class="col">Status</th>
              <th class="col">Terlayani Sejak</th>
            </tr>
          </thead>
          <tbody>
            @if($customerServiceData->count())
              @foreach($customerServiceData as $data)
                <tr wire:key="{{$data->id}}">
                  <td>{{ $customerServiceData->firstItem() + $loop->index }}</td>
                  <td>{{$data->name}}</td>
                  <td>{{$data->info}}</td>
                  <td class="text-center text-uppercase">{{$data->status}}</td>
                  <td class="text-center">{{$data->since}}</td>
                </tr>
              @endforeach
            @else
                <tr>
                  <td colspan="6">Data tidak ditemukan</td>
                </tr>
            @endif
          </tbody>
        </table>
        {{$customerServiceData->links()}}
      </div>
    </div>
    @endif
  
    
    @if($tvAnalogData->count())
    <div class="container-fluid">
      @foreach($tvAnalogData as $data)
      <span class="lead">TV Analog : {{$data->count}}</span>
      @endforeach
    </div>
    @endif
  
    @if($tvDigitalData->count())
    <div class="container-fluid">
      <span class="lead">TV Digital</span>
      <div class="table-responsive">
        <table class="table table-sm table-striped table-hover caption-top text-truncate">
          <thead>
            <tr class="table-danger text-center">
              <th class="col">#</th>
              <th class="col">No Seri Decoder</th>
              <th class="col">No Kartu Pelanggan</th>
              <th class="col">S</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tvDigitalData as $data)
            <tr>
              <td>{{$data->id}}</td>
              <td class="text-center">{{$data->serialnumber}}</td>
              <td class="text-center">{{$data->smartcard}}</td>
              <td class="text-center">O</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    @endif
  
    @if($internetData->count())
    <div class="container-fluid">
      <span class="lead">Internet</span>
      <div class="table-responsive">
        <table class="table table-sm table-striped table-hover caption-top text-truncate">
          <thead>
            <tr class="table-danger text-center">
              <th class="col">#</th>
              <th class="col">No Seri Modem</th>
              <th class="col">IP Modem</th>
              <th class="col">MAC Modem</th>
              <th class="col">IP CPE</th>
              <th class="col">MAC CPE</th>
              <th class="col">S</th>
              <th class="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($internetData as $data)
            <tr>
              <td>{{$data->id}}</td>
              <td class="text-center">{{$data->modemnumber}}</td>
              <td class="text-center">{{$data->modemip}}</td>
              <td class="text-center">{{$data->modemmac}}</td>
              <td class="text-center">{{$data->cpeip}}</td>
              <td class="text-center">{{$data->cpemac}}</td>
              <td class="text-center">O</td>
              <td class="text-center">Opsi</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    @endif
  </div>