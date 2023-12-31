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
        <label for="billnumber" class="col-form-label">No tagihan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="billnumber" 
          class="form-control form-control-sm" wire:model="billnumber" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="period" class="col-form-label">Periode pembayaran</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="period" 
          class="form-control form-control-sm" wire:model="period" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="subsperiod" class="col-form-label">Frekuensi pembayaran</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="subsperiod" 
          class="form-control form-control-sm" wire:model="subsperiod" readonly>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="servicename" class="col-form-label">Paket layanan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="servicename" 
          class="form-control form-control-sm" wire:model="servicename" readonly>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row g-2 align-items-center">
      <div class="col-auto">
        <label for="billdate" class="col-form-label">Tanggal invoice</label>
      </div>
      <div class="col-auto">
        <input type="date" id="billdate" 
          class="form-control form-control-sm" wire:model="billdate" readonly>
      </div>
      <div class="col-auto">
        <label for="collectorid" class="col-form-label">Kolektor</label>
      </div>
      <div class="col-auto">
        <select id="collectorid" class="form-select form-select-sm" wire:model.live="collectorid">
          <option value="" selected>-- Pilih Kolektor --</option>
          @foreach($collectorData as $data)
            <option value="{{$data->id}}">{{$data->name}}</option>
          @endforeach
        </select>
      </div>
    </div>
    
    <span>Rincian Tagihan</span>
    <div class="mx-2">
      <div class="row align-items-center my-1">
        <div class="col-3 col-xl-2 text-center bg-danger bg-opacity-50">
          Tipe
        </div>
        <div class="col-6 text-center bg-danger bg-opacity-50">
          Keterangan
        </div>
        <div class="col-3 col-xl-2 text-center bg-danger bg-opacity-50">
          Biaya
        </div>
      </div>
        {{-- <div class="row g-0">
          <div class="col-3 col-xl-2 text-center">
            <select id="type0" class="form-select form-select-sm" wire:model.live="invoice_type">
              <option value="" selected>-- Pilih Tipe --</option>
              <option value="biaya denda">Biaya Denda (+)</option>
              <option value="biaya jasa kolektor">Biaya Jasa Kolektor (+)</option>
              <option value="biaya lain">Biaya Lain-lain (+)</option>
              <option value="biaya layanan">Biaya Layanan (+)</option>
              <option value="biaya material">Biaya Material (+)</option>
              <option value="biaya pemasangan">Biaya Pemasangan (+)</option>
              <option value="biaya pinalti">Biaya Pinalti (+)</option>
              <option value="diskon layanan">Diskon Layanan (-)</option>
              <option value="penambahan tv">Penambahan TV (+)</option>
              <option value="penyesuaian biaya">Penyesuaian Biaya (-)</option>
              <option value="penyesuaian downgrade">Penyesuaian Downgrade (-)</option>
              <option value="penyesuaian upgrade">Penyesuaian Upgrade (+)</option>
            </select>
          </div>
          <div class="col-6 text-center">
            <input type="text" id="info0" 
              class="form-control form-control-sm" wire:model="invoice_info">
          </div>
          <div class="col-3 col-xl-2 text-center">
            <input type="number" id="price0" class="form-control form-control-sm" min="0"
              wire:model="invoice_price">
          </div>
        </div> --}}
      @foreach($cartData as $data)
        <div class="row g-0">
          <div class="col-3 col-xl-2 text-center">
            <select id="type0" class="form-select form-select-sm" value="{{ $data->name }}" wire:change="editTypeCart('{{$data->id}}', $event.target.value)" wire:key="{{$data->id.'-'.$data->name}}">
              <option value="">-- Pilih Tipe --</option>
              @foreach($invoiceDataType as $key => $item)
                <option value="{{$key}}" {{ $key === $data->name ? 'selected' : '' }}>{{$item}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-6 text-center">
            <input type="text" id="invoice_info" class="form-control form-control-sm" value="{{$data->attributes->info}}" wire:change="editInfoCart('{{$data->id}}', $event.target.value)" wire:key="{{$data->id.'-'.$data->attributes->info}}">
          </div>
          <div class="col-3 col-xl-2 text-center">
            <input type="number" id="invoice_price" class="form-control form-control-sm" min="0" value="{{$data->price}}" wire:change="editPriceCart('{{$data->id}}', $event.target.value)" wire:key="{{$data->id.'-'.$data->price}}">
          </div>
          <div class="col-1">
            <button wire:click.prevent="deleteCart('{{$data->id}}')">Hapus</button>
          </div>
        </div>
      @endforeach
      <div class="row g-0">
          <div class="col-3 col-xl-2 text-center">
            <select id="invoice_type" class="form-select form-select-sm" wire:model.live="invoice_type">
              <option value="" selected>-- Pilih Tipe --</option>
              <option value="biaya denda">Biaya Denda (+)</option>
              <option value="biaya jasa kolektor">Biaya Jasa Kolektor (+)</option>
              <option value="biaya lain">Biaya Lain-lain (+)</option>
              <option value="biaya layanan">Biaya Layanan (+)</option>
              <option value="biaya material">Biaya Material (+)</option>
              <option value="biaya pemasangan">Biaya Pemasangan (+)</option>
              <option value="biaya pinalti">Biaya Pinalti (+)</option>
              <option value="diskon layanan">Diskon Layanan (-)</option>
              <option value="penambahan tv">Penambahan TV (+)</option>
              <option value="penyesuaian biaya">Penyesuaian Biaya (-)</option>
              <option value="penyesuaian downgrade">Penyesuaian Downgrade (-)</option>
              <option value="penyesuaian upgrade">Penyesuaian Upgrade (+)</option>
            </select>
          </div>
          <div class="col-6 text-center">
            <input type="text" id="invoice_info" 
              class="form-control form-control-sm" wire:model.live="invoice_info">
          </div>
          <div class="col-3 col-xl-2 text-center">
            <input type="number" id="invoice_price" class="form-control form-control-sm" min="0"
              wire:model.live="invoice_price">
          </div>
          <div class="col-1">
            <button wire:click.prevent="addToCart">Tambah</button>
          </div>
      </div>
      <div>
        @error('invoice_type') <span>{{$message}}</span> @enderror
        @error('invoice_info') <span>{{$message}}</span> @enderror
        @error('invoice_price') <span>{{$message}}</span> @enderror
      </div>
      <div class="row text-end fw-bold">
        <div class="col-9 col-xl-8">
          Total (Rp)
        </div>
        <div class="col-3 col-xl-2">
          Total Harga {{ \Cart::session($userId.'-edit')->getTotal() }}
        </div>
      </div>
      <div class="row align-items-center my-3">
        <div class="col-3 col-xl-2">
          <input type="checkbox" class="form-check-input" value="lunas" id="status" wire:model="status">
          <label for="status" class="form-check-label">Pembayaran sudah lunas</label>
        </div>
        <div class="col-9 col-xl-8">
          <div class="input-group">
            <label for="info" class="input-group-text">Keterangan</label>
            <input type="text" id="info" 
              class="form-control form-control-sm" wire:model="info">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-xl-10 text-center mb-3">
          <button class="btn btn-outline-primary btn-sm" wire:click.prevent="updateDetailInvoice()">
            Simpan
          </button>
        </div>
      </div>
    </div>
  </div>
</div>