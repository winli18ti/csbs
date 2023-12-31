<div class="container-fluid mt-3">
  <span class="lead mb-2">Akun Pengguna</span>

  <div class="row align-items-center">
    <div class="col-5 col-sm-4 col-md-3 col-xl-2">
      <label for="name" class="col-form-label">Nama lengkap</label>
    </div>
    <div class="col-7 col-sm-5 col-md-4 col-lg-3">
      <input type="text" id="name" 
        class="form-control form-control-sm" wire:model="name" readonly>
    </div>
  </div>

  <div class="row align-items-center">
    <div class="col-5 col-sm-4 col-md-3 col-xl-2">
      <label for="email" class="col-form-label">Nama pengguna</label>
    </div>
    <div class="col-7 col-sm-5 col-md-4 col-lg-3">
      <input type="text" id="email" 
        class="form-control form-control-sm" wire:model="email" readonly>
    </div>
  </div>

  <div class="row mt-2">
    <div class="col-sm-9 col-md-7 col-lg-6 col-xl-5">
      <fieldset class="border border-2 border-danger-subtle rounded-3 px-3 pb-3 my-2">
        <legend class="fs-6 float-none w-auto">Ubah Password</legend>
    
        @if(session()->has('message'))
          <div class="alert alert-success">
            {{ session('message') }}
          </div>
        @endif

        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="oldpassword" class="col-form-label">Password lama</label>
          </div>
          <div class="col-7 col-md-8">
            <input type="password" id="oldpassword" 
              class="form-control form-control-sm" wire:model="oldpassword">
            @error('oldpassword')<span class="text-danger fw-light">{{ $message }}</span>@enderror
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="newpassword" class="col-form-label">Password baru</label>
          </div>
          <div class="col-7 col-md-8">
            <input type="password" id="newpassword" 
              class="form-control form-control-sm" wire:model="newpassword">
              @error('newpassword')<span class="text-danger fw-light">{{ $message }}</span>@enderror
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-5 col-md-4">
            <label for="repeatpassword" class="col-form-label">Password baru (ulangi)</label>
          </div>
          <div class="col-7 col-md-8">
            <input type="password" id="repeatpassword" 
              class="form-control form-control-sm" wire:model="repeatpassword">
              @error('repeatpassword')<span class="text-danger fw-light">{{ $message }}</span>@enderror
          </div>
        </div>

        <div class="text-center mt-3">
          <button wire:click.prevent="update" class="btn btn-outline-primary btn-sm">
            Simpan
          </button>

        </div>
      </fieldset>
    </div>
  </div>
</div>