<div>
  <div class="container-fluid">
    <span class="lead">
      Tambah User Baru
    </span>
  </div>

  <div class="container-md mt-3">
    <div class="row justify-content-center">
      <div class="col-lg-9 col-xl-8 col-xxl-7">
        <button class="btn btn-outline-primary btn-sm"
          wire:click.prevent="navigate('table')">
          Kembali
        </button>

        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="name" class="col-form-label">Nama user</label>
          </div>
          <div class="col-7 col-md-8">
            <input type="text" id="name" class="form-control form-control-sm" 
              wire:model="name">
            @error('name')<span class="text-danger fw-light">{{ $message }}</span>@enderror
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="email" class="col-form-label">Username</label>
          </div>
          <div class="col-7 col-md-8">
            <input type="text" id="email" class="form-control form-control-sm" 
              wire:model="email">
            @error('email')<span class="text-danger fw-light">{{ $message }}</span>@enderror
          </div>
        </div>

        @if($mode === 'add')
        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="password" class="col-form-label">Password</label>
          </div>
          <div class="col-7 col-md-8">
            <input type="password" id="password" class="form-control form-control-sm" 
              wire:model="password">
            @error('password')<span class="text-danger fw-light">{{ $message }}</span>@enderror
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="password_confirmation" class="col-form-label">Konfirmasi password</label>
          </div>
          <div class="col-7 col-md-8">
            <input type="password" id="password_confirmation" class="form-control form-control-sm" 
              wire:model="password_confirmation">
          </div>
        </div>
        @endif

        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="role" class="col-form-label">Peran</label>
          </div>
          <div class="col-7 col-md-8">
            <select id="role" class="form-select form-select-sm"
              wire:model="role">
              <option value="admin" selected>Admin</option>
              <option value="customer service">CS</option>
              <option value="finance">Finance</option>
              <option value="noc">NOC</option>
              <option value="officer">Teknisi</option>
            </select>
          </div>
        </div>
        
        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="status" class="col-form-label">Status</label>
          </div>
          <div class="col-7 col-md-8">
            <select id="status" class="form-select form-select-sm"
              wire:model="status">
              <option value="aktif" selected>Aktif</option>
              <option value="nonaktif">Nonaktif</option>
            </select>
          </div>
        </div>

        <div class="text-center p-3 my-3">
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