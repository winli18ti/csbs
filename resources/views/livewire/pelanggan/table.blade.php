<div class="mt-3">
  <div class="container-fluid d-flex gap-1 justify-content-end mt-4">
    <button class="btn btn-outline-primary btn-sm"
      wire:click.prevent="form">
      Tambah Pelanggan
    </button>
  </div>

  <div class="container-fluid">
    
    @if(session()->has('message'))
    <div class="alert alert-success my-3">
      {{ session('message') }}
    </div>
    @endif

    <div class="table-responsive">
      <table class="table table-sm table-striped table-hover caption-top text-truncate">
        <caption>Halaman 1 dari total 1 halaman</caption>
        <thead>
          <tr class="table-danger text-center">
            <th class="col">#</th>
            <th class="col">Nama</th>
            <th class="col">No KTP</th>
            <th class="col">Alamat</th>
            <th class="col">Tanggal Lahir</th>
            <th class="col">No HP</th>
            <th class="col">Telepon Rumah</th>
            <th class="col">Email</th>
            <th class="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($dataPelanggan as $data)
          <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->nama_customer}}</td>
            <td>{{$data->no_ktp}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->tanggal_lahir}}</td>
            <td>{{$data->no_hp}}</td>
            <td>{{$data->telepon_rumah}}</td>
            <td>{{$data->email}}</td>
            <td class="text-center">
              <a class="btn btn-outline-warning btn-sm" 
                href="/pelanggan_detail/{{$data->id}}">
                Ubah
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $dataPelanggan->links() }}
    </div>
    @if(empty($dataPelanggan))
    <p class="text-center fst-italic">$dataPelanggan</p>
    @endif
  </div>
</div>