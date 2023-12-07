<div>
    <div class="container-fluid">
      <span class="lead">
        Form Komplain
      </span>
    </div>
  
    <div class="container-md mt-3">
      <div class="row justify-content-center">
        <div class="col-lg-9 col-xl-8 col-xxl-7">
          <button class="btn btn-outline-primary btn-sm"
            wire:click.prevent="navigate('hero')">
            Kembali
          </button>
  
          <form wire:submit="complainCreate" enctype="multipart/form-data">
            <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
              <legend class="fs-6 float-none w-auto">Data Pelanggan</legend>
        
              <div class="row align-items-center">
                <div class="col-5 col-md-4">
                  <label for="member" class="col-form-label">No Pelanggan</label>
                </div>
                <div class="col-7 col-md-8">
                    <input type="text" id="member" class="form-control form-control-sm" 
                        wire:model.live="member" disabled>
                    @error('member')<span class="text-danger fw-light">{{ $message }}</span>@enderror
                </div>
              </div>
        
              <div class="row align-items-center">
                <div class="col-5 col-md-4">
                  <label for="name" class="col-form-label">Nama Pelanggan</label>
                </div>
                <div class="col-7 col-md-8">
                    <input type="text" id="name" class="form-control form-control-sm" 
                        wire:model.live="name" disabled>
                    @error('name')<span class="text-danger fw-light">{{ $message }}</span>@enderror
                </div>
              </div>
            </fieldset>
        
            <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
              <legend class="fs-6 float-none w-auto">Data Komplain</legend>
              
              <div class="row align-items-center">
                <div class="col-5 col-md-4">
                  <label for="complain_status" class="col-form-label">Status</label>
                </div>
                <div class="col-7 col-md-8">
                    <select id="complain_status" class="form-select form-select-sm"
                    wire:model.live="complain_status" {{ $mode === 'complainviewform'  ? 'disabled' : ''}}>
                        <option value="">-- Pilih Status Komplain --</option>
                        <option value="tunggu">Tunggu</option>
                        <option value="proses">Proses</option>
                        @if($mode === 'complaineditform') <option value="selesai">Selesai</option> @endif
                    </select>
                    @error('complain_status')<span class="text-danger fw-light">{{ $message }}</span>@enderror
                </div>
              </div>
        
              <div class="row align-items-center">
                <div class="col-5 col-md-4">
                  <label for="complain_priority" class="col-form-label">Prioritas</label>
                </div>
                <div class="col-7 col-md-8">
                    <select id="complain_priority" class="form-select form-select-sm"
                    wire:model.live="complain_priority" {{ $mode === 'complainviewform'  ? 'disabled' : ''}}>
                        <option value="">-- Pilih Prioritas Komplain --</option>
                        <option value="biasa">Biasa</option>
                        <option value="mendesak">Mendesak</option>
                        <option value="prioritas utama">Prioritas Utama</option>
                    </select>
                    @error('complain_priority')<span class="text-danger fw-light">{{ $message }}</span>@enderror
                </div>
              </div>
        
              <div class="row">
                <div class="col-5 col-md-4">
                  <label for="service_type" class="col-form-label">Tipe Layanan</label>
                </div>
                <div class="col-7 col-md-8">
                    <select id="service_type" class="form-select form-select-sm"
                    wire:model.live="service_type" {{ $mode === 'complainviewform'  ? 'disabled' : ''}}>
                        <option value="">-- Pilih Tipe Layanan --</option>
                        <option value="analog">Analog</option>
                        <option value="internet">Internet</option>
                        <option value="non biasa">Non Biasa</option>
                        <option value="tv">TV</option>
                        <option value="tv internet">TV & Internet</option>
                    </select>
                    @error('service_type')<span class="text-danger fw-light">{{ $message }}</span>@enderror
                </div>
              </div>
        
              <div class="row">
                <div class="col-5 col-md-4">
                  <label for="report" class="col-form-label">Via Laporan</label>
                </div>
                <div class="col-7 col-md-8">
                    <select id="report" class="form-select form-select-sm"
                    wire:model.live="report" {{ $mode === 'complainviewform'  ? 'disabled' : ''}}>
                        <option value="">-- Pilih via laporan --</option>
                        <option value="telepon">Telepon/Fax</option>
                        <option value="email">Email</option>
                        <option value="datang">Datang</option>
                    </select>
                    @error('report')<span class="text-danger fw-light">{{ $message }}</span>@enderror
                </div>
              </div>
        
              <div class="row">
                <div class="col-5 col-md-4">
                  <label for="source" class="col-form-label">Sumber</label>
                </div>
                <div class="col-7 col-md-8">
                    <select id="source" class="form-select form-select-sm"
                    wire:model.live="source" {{ $mode === 'complainviewform'  ? 'disabled' : ''}}>
                        <option value="">-- Pilih Sumber --</option>
                        <option value="pelanggan">Pelanggan</option>
                        <option value="internal">internal</option>
                    </select>
                    @error('source')<span class="text-danger fw-light">{{ $message }}</span>@enderror
                </div>
              </div>
        
              <div class="row">
                <div class="col-5 col-md-4">
                  <label for="reporter" class="col-form-label">Disampaikan Oleh</label>
                </div>
                <div class="col-7 col-md-8">
                  <input type="text" name="reporter" id="reporter" class="form-control form-control-sm"
                    wire:model.live="reporter" {{ $mode === 'complainviewform'  ? 'disabled' : ''}}>
                    @error('reporter')<span class="text-danger fw-light">{{ $message }}</span>@enderror
                </div>
              </div>

              <div class="row">
                <div class="col-5 col-md-4">
                  <label for="report_subject" class="col-form-label">Subyek Keluhan</label>
                </div>
                <div class="col-7 col-md-8">
                  <input type="text" name="report_subject" id="report_subject" class="form-control form-control-sm"
                    wire:model.live="report_subject" {{ $mode === 'complainviewform'  ? 'disabled' : ''}}>
                    @error('report_subject')<span class="text-danger fw-light">{{ $message }}</span>@enderror
                </div>
              </div>

              <div class="row">
                <div class="col-5 col-md-4">
                  <label for="customer_complain" class="col-form-label">Keluhan Pelanggan</label>
                </div>
                <div class="col-7 col-md-8">
                  <textarea id="customer_complain" rows="2" class="form-control form-control-sm"
                    wire:model.live="customer_complain" {{ $mode === 'complainviewform'  ? 'disabled' : ''}}></textarea>
                    @error('customer_complain')<span class="text-danger fw-light">{{ $message }}</span>@enderror
                </div>
              </div>

              <div class="row">
                <div class="col-5 col-md-4">
                  <label for="completion" class="col-form-label">Penyelesaian</label>
                </div>
                <div class="col-7 col-md-8">
                  <textarea id="completion" rows="2" class="form-control form-control-sm"
                    wire:model.live="completion" {{$mode === 'complainform' || $mode === 'complainviewform'  ? 'disabled' : ''}}>
                  </textarea>
                    @error('completion')<span class="text-danger fw-light">{{ $message }}</span>@enderror
                </div>
              </div>
            </fieldset>
        
            <fieldset class="border border-2 border-danger-subtle rounded-3 text-center p-3 my-3">
              @if($mode === 'complainform')
                <button type="submit" class="btn btn-outline-primary btn-sm">
                  Tambah
                </button>
              @elseif($mode === 'complaineditform')
                <button type="button" wire:click.prevent="complainUpdate" class="btn btn-outline-primary btn-sm">
                  Ubah
                </button>
              @endif
              <button type="button" wire:click.prevent="navigate('hero')" class="btn btn-outline-primary btn-sm">
                Kembali
              </button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>