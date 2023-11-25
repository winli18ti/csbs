<div class="container-fluid mt-3">
    <form wire:submit="update" enctype="multipart/form-data">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="member" class="col-form-label">Customer ID</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <input type="text" id="member" class="form-control form-control-sm" 
                wire:model="member" readonly>
            </div>
          </div>
  
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="name" class="col-form-label">Nama pelanggan</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <input type="text" id="name" class="form-control form-control-sm"
                wire:model="name">
            </div>
          </div>
          
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="company" class="col-form-label">Nama perusahaan</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <input type="text" id="company" class="form-control form-control-sm"
                wire:model="company">
            </div>
          </div>
          
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="identity" class="col-form-label">No identitas (KTP)</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <input type="text" id="identity" class="form-control form-control-sm"
                wire:model="identity">
            </div>
          </div>
          
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="address" class="col-form-label">Alamat</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <textarea id="address" rows="2" class="form-control form-control-sm"
                wire:model="address"></textarea>
            </div>
          </div>
          
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="email" class="col-form-label">Email</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <input type="email" name="email" id="email" class="form-control form-control-sm"
                wire:model="email">
            </div>
          </div>
          
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="vip" class="col-form-label">VIP?</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="1" id="vip"
                  wire:model="vip">
              </div>
            </div>
          </div>
          
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="effectivedate" class="col-form-label">Tanggal efektif</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              @if($status === 'active' || $status === 'suspend')
              <input type="date" id="effectivedate" class="form-control form-control-sm" 
                wire:model="effectivedate">
              @endif
            </div>
          </div>
  
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="node" class="col-form-label">Lokasi node</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <select id="node" class="form-select form-select-sm"
                wire:model="node">
                @foreach($nodes as $node)
                <option value="{{$node}}">{{$node}}</option>
                @endforeach
              </select>
            </div>
          </div>
  
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="marketerid" class="col-form-label">Sales marketing</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <select id="marketerid" class="form-select form-select-sm"
                wire:model="marketerid">
                @foreach($marketerData as $data)
                  <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
  
        <div class="col-12 col-md-6">
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="homephone" class="col-form-label">Telepon rumah</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <input type="text" id="homephone" class="form-control form-control-sm"
                wire:model="homephone">
            </div>
          </div>
          
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="officephone" class="col-form-label">Telepon kantor</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <input type="text" id="officephone" class="form-control form-control-sm"
                wire:model="officephone">
            </div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="cellphone" class="col-form-label">Telepon seluler</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <input type="text" id="cellphone" class="form-control form-control-sm"
                wire:model="cellphone">
              <div class="form-text">
                <a href="#">Kirim SMS</a>
              </div>
            </div>
          </div>
          
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="servicetype" class="col-form-label">Tipe layanan</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <div class="d-flex">
                <div class="form-check form-check-inline">
                  <input type="radio" name="servicetype" id="servicetype1" value="reguler" class="form-check-input" wire:model="servicetype" disabled>
                  <label for="servicetype1" class="form-check-label">Layanan reguler</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="servicetype" id="servicetype2" value="special" class="form-check-input" wire:model="servicetype" disabled>
                  <label for="servicetype2" class="form-check-label">Pembayaran non reguler</label>
                </div>
              </div>
            </div>
          </div>
      
          @if($servicetype === 'special')
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="specialprice" class="col-form-label">Tarif per bulan</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <input type="number" id="specialprice" class="form-control form-control-sm" min="0"
                wire:model="specialprice">
            </div>
          </div>
          
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="specialinfo" class="col-form-label">Info invoice non reguler</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <input type="text" id="specialinfo" class="form-control form-control-sm"
                wire:model="specialinfo">
            </div>
          </div>
          @endif
          
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="paytype" class="col-form-label">Cara pembayaran</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <div class="d-flex">
                <div class="form-check form-check-inline">
                  <input type="radio" name="paytype" id="paytype1" value="penagihan ke pelanggan" class="form-check-input" wire:model="paytype">
                  <label for="paytype1" class="form-check-label">Penagihan ke pelanggan</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="paytype" id="paytype2" value="pembayaran ke kantor" class="form-check-input" wire:model="paytype">
                  <label for="paytype2" class="form-check-label">Pembayaran ke kantor</label>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="billperiod" class="col-form-label">Periode tagihan</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <select id="billperiod" class="form-select form-select-sm"
                wire:model="billperiod">
                <option value="1" selected>1</option>
                <option value="15">15</option>
              </select>
            </div>
          </div>
      
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="subsperiod" class="col-form-label">Periode berlangganan</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <select id="subsperiod" class="form-select form-select-sm"
                wire:model="subsperiod">
                <option value="1">Per 1 bulan</option>
                <option value="3">Per 3 bulan</option>
                <option value="6">Per 6 bulan</option>
                <option value="12">Per 12 bulan</option>
              </select>
            </div>
          </div>
      
          <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
              <label for="tvcount" class="col-form-label">Jumlah TV</label>
            </div>
            <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
              <input type="number" id="tvcount" min="0" class="form-control form-control-sm"
                wire:model="tvcount">
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-5 col-sm-2 col-lg-2">
          <label for="notes" class="col-form-label">Catatan admin</label>
        </div>
        <div class="col-7 col-sm-10 col-lg-10">
          <textarea id="notes" rows="2" class="form-control form-control-sm"
            wire:model="notes"></textarea>
        </div>
      </div>
  
      <div class="text-center my-3">
        <button type="submit" class="btn btn-outline-primary btn-sm">
          Ubah
        </button>
      </div>
    </form>
  </div>