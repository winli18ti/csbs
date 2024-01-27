<div>
  <div class="container-fluid">
    <span class="lead">
      Kirim SMS
    </span>
  </div>

  <div class="container-fluid my-2 pb-5">
    @if(session()->has('message'))
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-6 col-xl-5">
          <div class="alert alert-success my-3">
            {{ session('message') }}
          </div>
        </div>
      </div>
    @endif

    <div class="row">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="receiver" class="col-form-label">No penerima</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="receiver" 
          class="form-control form-control-sm"
          wire:model="receiver">
        @error('receiver')
          <span class="text-danger fw-light">
            {{ $message }}
          </span>
        @enderror
        <div class="form-text">
          <span class="fst-italic">Contoh bulk sms: 081xxxxxxxx1;081xxxxxxxx2;081xxxxxxxx3 ..dst..</span>
        </div>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="message" class="col-form-label">Pesan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <textarea type="text" id="message" 
          class="form-control form-control-sm"
          wire:model="message"></textarea>
        @error('message')
          <span class="text-danger fw-light">
            {{ $message }}
          </span>
        @enderror
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-sm-9 col-md-7 col-lg-6 col-xl-5">
        <div class="text-center">
          <button class="btn btn-outline-primary btn-sm"
            wire:click.prevent="create">
            Tambah
          </button>
        </div>
      </div>
    </div>
  </div>
</div>