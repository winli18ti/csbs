<div class="min-vh-100 d-flex justify-content-center align-items-center bg-secondary bg-opacity-25 bg-gradient">
  <div class="container d-flex justify-content-center mb-5">
    <div class="bg-danger p-3 rounded-2">
      <div class="row mb-4">
        <div class="col text-center text-white">
          <div class="bg-secondary rounded-2 p-2">
            <span class="lead fw-bold">Selamat Datang</span><br/>
            <span>Silahkan masukkan detail login anda untuk autentikasi.</span>
          </div>
        </div>
      </div>
      <form wire:submit="auth_login">
        @csrf
        <div class="row">
          <label for="email" class="col-sm-4 col-form-label text-end text-white fw-light">Nama Pengguna</label>
          <div class="col-sm-8">
            <input type="text" id="email" class="form-control form-control-sm" 
              wire:model.live="email">
            @error('email') <span class="text-white">{{$message}}</span> @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="password" class="col-sm-4 col-form-label text-end text-white fw-light">Password</label>
          <div class="col-sm-8">
            <input type="password" id="password" class="form-control form-control-sm" 
              wire:model.live="password">
            @error('password') <span class="text-white">{{$message}}</span> @enderror
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <button type="submit" class="btn btn-light btn-sm">Login</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>