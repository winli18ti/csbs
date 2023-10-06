<div>
  <div class="container-fluid">
    <span class="lead">
      @if($mode === 'add')
      Tambah Teknisi Baru
      @elseif($mode === 'edit')
      Ubah Teknisi
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
        <label for="name" class="col-form-label">Nama teknisi</label>
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
        <label for="status" class="col-form-label">Status</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <select id="status" class="form-select form-select-sm"
          wire:model="status">
          <option value="aktif" selected>Aktif</option>
          <option value="nonaktif">Nonaktif</option>
        </select>
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