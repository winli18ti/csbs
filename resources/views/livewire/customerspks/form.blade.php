<div class="mt-3">
  <div class="container-fluid">
    <button wire:click.prevent="navigate('hero')" class="btn btn-outline-primary btn-sm my-2">Kembali</button>

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
        <label for="spknumber" class="col-form-label">No SPK</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="spknumber" 
          class="form-control form-control-sm" wire:model="spknumber" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="service" class="col-form-label">Nama layanan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="service" 
          class="form-control form-control-sm" wire:model="service" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="servicetype" class="col-form-label">Jenis layanan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="servicetype" 
          class="form-control form-control-sm" wire:model="servicetype" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="status" class="col-form-label">Status</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        @if($status === 'blm proses')
          <span class="badge text-bg-danger text-uppercase">{{$status}}</span>
        @elseif($status === 'pengerjaan')
          <span class="badge text-bg-warning text-uppercase">{{$status}}</span>
        @elseif($status === 'selesai')
          <span class="badge text-bg-primary text-uppercase">{{$status}}</span>
        @elseif($status === 'batal')
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

    <div class="row mt-2">
      <div class="col-sm-9 col-md-7 col-lg-6 col-xl-5">
        @if(str_contains($servicetype, 'tv'))
          <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
            <legend class="fs-6 float-none w-auto">TV Analog</legend>
    
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="tvanalog" class="col-form-label">Jumlah</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="number" id="tvanalog" 
                  class="form-control form-control-sm" wire:model="tvanalog" min="0">
              </div>
            </div>
          </fieldset>
    
          <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
            <legend class="fs-6 float-none w-auto">TV Digital</legend>
            @if($servicetype === 'tv' || $servicetype === 'tv & internet')
              <div class="row align-items-center">
                <div class="col-7 col-md-6">
                  <span class="form-control form-control-sm">No Serial</span>
                </div>
                <div class="col-7 col-md-6">
                  <span class="form-control form-control-sm">smart card</span>
                </div>
                @foreach($cartData as $data)
                    <div class="col-7 col-md-6">
                      <input type="text" class="form-control form-control-sm" wire:change="editSerialNumb('{{$data->id}}', $event.target.value)" value="{{$data->name}}" wire:key="{{$data->id.'-'.$data->name}}">
                    </div>
                    <div class="col-7 col-md-6">
                      <input type="text" class="form-control form-control-sm" wire:Change="editSmartCard('{{$data->id}}', $event.target.value)" value="{{$data->attributes->info}}" wire:key="{{$data->id.'-'.$data->attributes->info}}">
                    </div>
                    <div class="col-7 col-md-6">
                      <button wire:click.prevent="deleteDigitalTv('{{$data->id}}')">Hapus</button>
                    </div>
                @endforeach
                <div class="col-7 col-md-6">
                  <input type="text" class=" form-control form-control-sm" placeholder="Input No Serial" wire:model.live="serial_number">
                </div>
                <div class="col-7 col-md-6">
                  <input type="text" class="form-control form-control-sm" placeholder="Input Smart Card" wire:model.live="smart_card">
                </div>
                <div class="col-7 col-md-6">
                  <button class="form-control form-control-sm" wire:click.prevent="addNewDigitalTv">Add</button>
                </div>
              </div>
            @else
              <div class="row align-items-center">
                <div class="col-7 col-md-6">
                  <input type="text" class="form-control form-control-sm" placeholder="Serial Number" readonly>
                </div>
                <div class="col-7 col-md-6">
                  <input type="text" class="form-control form-control-sm" placeholder="Smart Card" readonly>
                </div>
              </div>
            @endif
    
            {{-- <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="serialnumber" class="col-form-label">No Serial</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="text" id="serialnumber" 
                  class="form-control form-control-sm" wire:model="serialnumber">
              </div>
            </div>
    
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="smartcard" class="col-form-label">Smart Card</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="text" id="smartcard" 
                  class="form-control form-control-sm" wire:model="smartcard">
              </div>
            </div> --}}
          </fieldset>
        @endif
  
        @if(str_contains($servicetype, 'internet'))
          <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
            <legend class="fs-6 float-none w-auto">Internet</legend>
    
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="modemnumber" class="col-form-label">No Seri Modem</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="text" id="modemnumber" 
                  class="form-control form-control-sm" wire:model="modemnumber">
              </div>
            </div>
    
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="modemmac" class="col-form-label">MAC Modem</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="text" id="modemmac" 
                  class="form-control form-control-sm" wire:model="modemmac">
              </div>
            </div>
    
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="modemip" class="col-form-label">IP Address Modem</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="text" id="modemip" 
                  class="form-control form-control-sm" wire:model="modemip">
              </div>
            </div>
    
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="cpemac" class="col-form-label">MAC CPE</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="text" id="cpemac" 
                  class="form-control form-control-sm" wire:model="cpemac">
              </div>
            </div>
    
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="cpeip" class="col-form-label">IP Address CPE</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="text" id="cpeip" 
                  class="form-control form-control-sm" wire:model="cpeip">
              </div>
            </div>
    
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="cpegateway" class="col-form-label">IP Gateway CPE</label>
              </div>
              <div class="col-7 col-md-8">
                <input type="text" id="cpegateway" 
                  class="form-control form-control-sm" wire:model="cpegateway">
              </div>
            </div>
          </fieldset>
        @endif
  
        <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
          <legend class="fs-6 float-none w-auto">Status & Petugas Lapangan</legend>
  
          <div class="row align-items-center">
            <div class="col-5 col-md-4">
              <label for="inputdate" class="col-form-label">Tanggal Input</label>
            </div>
            <div class="col-7 col-md-8">
              {{$inputdate}}
            </div>
          </div>
  
          <div class="row align-items-center">
            <div class="col-5 col-md-4">
              <label for="statusnow" class="col-form-label">Status Pengerjaan</label>
            </div>
            <div class="col-7 col-md-8">
              <select id="statusnow" class="form-select form-select-sm" wire:model.live="statusnow">
                @if($status === 'blm proses')
                  <option value="blm proses">BELUM PROSES</option>
                  <option value="pengerjaan">PROSES PENGERJAAN</option>
                @elseif($status === 'pengerjaan')
                  <option value="pengerjaan">PROSES PENGERJAAN</option>
                  <option value="aktivasi">AKTIVASI LAYANAN</option>
                @elseif($status === 'aktivasi')
                  <option value="aktivasi">AKTIVASI LAYANAN</option>
                  <option value="selesai">SELESAI</option>
                @elseif($status === 'selesai')
                  <option value="selesai">SELESAI</option>
                @endif
              </select>
            </div>
          </div>
  
          <div class="row align-items-center">
            <div class="col-5 col-md-4">
              <label for="startdate" class="col-form-label">Tanggal Pengerjaan</label>
            </div>
            <div class="col-7 col-md-8">
              <input type="date" id="startdate" 
                class="form-control form-control-sm" wire:model="startdate">
            </div>
          </div>
  
          <div class="row align-items-center">
            <div class="col-5 col-md-4">
              <label for="officerid1" class="col-form-label">Petugas 1</label>
            </div>
            <div class="col-7 col-md-8">
              <select id="officerid1" class="form-select form-select-sm" wire:model="officerid1" @if($status === 'blm proses') disabled @endif>
                <option value="">--- PILIH PETUGAS ---</option>
                @foreach($officerData as $data)
                  <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
  
          <div class="row align-items-center">
            <div class="col-5 col-md-4">
              <label for="officerid2" class="col-form-label">Petugas 2</label>
            </div>
            <div class="col-7 col-md-8">
              <select id="officerid2" class="form-select form-select-sm" wire:model="officerid2" @if($status === 'blm proses') disabled @endif>
                <option value="">--- PILIH PETUGAS ---</option>
                @foreach($officerData as $data)
                  <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
  
          <div class="row align-items-center">
            <div class="col-5 col-md-4">
              <label for="nodeid" class="col-form-label">Lokasi Fiber Node</label>
            </div>
            <div class="col-7 col-md-8">
              <select id="nodeid" class="form-select form-select-sm"
                  wire:model="nodeid">
                  @foreach($nodesData as $data)
                  <option value="{{$data->id}}">{{$data->node}}</option>
                  @endforeach
                </select>
            </div>
          </div>
  
          <div class="row align-items-center">
            <div class="col-5 col-md-4">
              <label for="enddate" class="col-form-label">Tanggal Selesai</label>
            </div>
            <div class="col-7 col-md-8">
              @if($status === 'blm proses' || $status === 'pengerjaan')
              <input type="date" id="enddate" 
                class="form-control form-control-sm" wire:model="enddate" readonly>
              @else
              <input type="date" id="enddate" 
                class="form-control form-control-sm" wire:model="enddate">
              @endif
            </div>
          </div>
        </fieldset>
  
        @if($category === 'dismantle')
          <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
            <legend class="fs-6 float-none w-auto">Keterangan</legend>
    
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="reason" class="col-form-label">Alasan Berhenti</label>
              </div>
              <div class="col-7 col-md-8">
                <textarea id="reason" rows="2" class="form-control form-control-sm"
                wire:model="reason"></textarea>
              </div>
            </div>
    
            <div class="row align-items-center">
              <div class="col-5 col-md-4">
                <label for="solution" class="col-form-label">Penyelesaian</label>
              </div>
              <div class="col-7 col-md-8">
                <textarea id="solution" rows="2" class="form-control form-control-sm"
                wire:model="solution"></textarea>
              </div>
            </div>
          </fieldset>
        @endif

        <fieldset class="border border-2 border-danger-subtle rounded-3 text-center p-3 my-3">
            <button wire:click.prevent="update" class="btn btn-outline-primary btn-sm">
              Simpan
            </button>
        </fieldset>
      </div>
    </div>
  </div>
</div>