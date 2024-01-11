<div>
  <div class="container-fluid">
    <span class="lead">
      @if($mode === 'add')
      Tambah Layanan Baru
      @elseif($mode === 'edit')
      Ubah Layanan
      @endif
    </span>
  </div>

  <div class="container-fluid my-2">
    <button class="btn btn-outline-primary btn-sm"
      wire:click.prevent="navigate('table')">
      Kembali
    </button>
  </div>

  <div class="container-fluid my-2 pb-5">
    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="name" class="col-form-label">Nama layanan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="name" 
          class="form-control form-control-sm"
          wire:model="name">
      </div>
    </div>

    <div class="row">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">

      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        @error('name')
        <span class="text-danger fw-light">
          {{ $message }}
        </span>
        @enderror
      </div>
    </div>
    
    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="info" class="col-form-label">Keterangan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="info" 
          class="form-control form-control-sm"
          wire:model="info">
      </div>
    </div>
  
    <div class="row">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">

      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        @error('info')
        <span class="text-danger fw-light">
          {{ $message }}
        </span>
        @enderror
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="type" class="col-form-label">Tipe layanan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <select id="type" class="form-select form-select-sm"
          wire:model="type">
          <option value="tv" selected>TV</option>
          <option value="analog">Analog</option>
          <option value="internet">Internet</option>
          <option value="tv & internet">TV & Internet</option>
        </select>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="price" class="col-form-label">Harga</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="number" id="price" 
          class="form-control form-control-sm" min="0"
          wire:model="price">
      </div>
    </div>

    <div class="row">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">

      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        @error('price')
        <span class="text-danger fw-light">
          {{ $message }}
        </span>
        @enderror
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-sm-9 col-md-7 col-lg-6 col-xl-5">
        <div class="text-center">
          @if($mode === 'add')
          <button class="btn btn-outline-primary btn-sm"
            wire:click.prevent="create">
            Tambah
          </button>
          @elseif($mode === 'edit')
          <button class="btn btn-outline-primary btn-sm"
            wire:click.prevent="update">
            Ubah
          </button>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>