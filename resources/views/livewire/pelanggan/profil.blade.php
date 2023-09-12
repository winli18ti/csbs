<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="customer_id" class="col-form-label">Customer ID</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <input type="text" name="customer_id" id="customer_id" class="form-control form-control-sm" value="2308011">
        </div>
      </div>
  
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="nama_pelanggan" class="col-form-label">Nama pelanggan</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control form-control-sm">
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="nama_perusahaan" class="col-form-label">Nama perusahaan</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control form-control-sm">
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="ktp" class="col-form-label">No identitas (KTP)</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <input type="text" name="ktp" id="ktp" class="form-control form-control-sm">
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="alamat" class="col-form-label">Alamat</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <textarea name="alamat" id="alamat" rows="2" class="form-control form-control-sm"></textarea>
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="kota_provinsi" class="col-form-label">Kota / Provinsi</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <select name="kota_provinsi" id="kota_provinsi" class="form-select form-select-sm">
            <option selected>Pekanbaru, Riau</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="kode_pos" class="col-form-label">Kode Pos</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <input type="text" name="kode_pos" id="kode_pos" class="form-control form-control-sm">
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="email" class="col-form-label">Email</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <input type="email" name="email" id="email" class="form-control form-control-sm">
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="vip" class="col-form-label">VIP?</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" value="vip" id="vip">
          </div>
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="tanggal_efektif" class="col-form-label">Tanggal efektif</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <input type="date" name="tanggal_efektif" id="tanggal_efektif" 
            class="form-control form-control-sm" value="2023-08-31" min="2023-08-31">
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="kewarganegaraan" class="col-form-label">Kewarganegaraan</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <select name="kewarganegaraan" id="kewarganegaraan" class="form-select form-select-sm">
            <option selected>WNI</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="tanggal_lahir" class="col-form-label">Tanggal lahir</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <input type="date" name="tanggal_lahir" id="tanggal_lahir" 
            class="form-control form-control-sm">
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6">
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="telepon_rumah" class="col-form-label">Telepon rumah</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <input type="text" name="telepon_rumah" id="telepon_rumah" class="form-control form-control-sm">
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="telepon_kantor" class="col-form-label">Telepon kantor</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <input type="text" name="telepon_kantor" id="telepon_kantor" class="form-control form-control-sm">
        </div>
      </div>
      
      <div class="row">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="telepon_seluler" class="col-form-label">Telepon seluler</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <input type="text" name="telepon_seluler" id="telepon_seluler" class="form-control form-control-sm">
          <div class="form-text">
            <a href="#">Kirim SMS</a>
          </div>
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="jenis_rumah" class="col-form-label">Jenis rumah</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <select name="jenis_rumah" id="jenis_rumah" class="form-select form-select-sm">
            <option selected>Lainnya</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
  
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="status_rumah" class="col-form-label">Status rumah</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <select name="status_rumah" id="status_rumah" class="form-select form-select-sm">
            <option selected>Lainnya</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="tipe_layanan" class="col-form-label">Tipe layanan</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <div class="d-flex">
            <div class="form-check form-check-inline">
              <input type="radio" name="layanan" id="layanan_reguler" class="form-check-input" checked>
              <label for="layanan_reguler" class="form-check-label">Layanan reguler</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" name="layanan" id="layanan_non_reguler" class="form-check-input">
              <label for="layanan_non_reguler" class="form-check-label">Pembayaran non reguler</label>
            </div>
          </div>
        </div>
      </div>
  
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="tarif" class="col-form-label">Tarif per bulan</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <input type="number" name="tarif" id="tarif" class="form-control form-control-sm" min="0">
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="invoice" class="col-form-label">Info invoice non reguler</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <input type="text" name="invoice" id="invoice" class="form-control form-control-sm">
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="pembayaran" class="col-form-label">Cara pembayaran</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <div class="d-flex">
            <div class="form-check form-check-inline">
              <input type="radio" name="pembayaran" id="pembayaran_rumah" class="form-check-input">
              <label for="pembayaran_rumah" class="form-check-label">Penagihan ke pelanggan</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" name="pembayaran" id="pembayaran_kantor" class="form-check-input">
              <label for="pembayaran_kantor" class="form-check-label">Pembayaran ke kantor</label>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="periode_tagihan" class="col-form-label">Periode tagihan</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <select name="periode_tagihan" id="periode_tagihan" class="form-select form-select-sm">
            <option selected>15</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
  
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="periode_berlangganan" class="col-form-label">Periode berlangganan</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <select name="periode_berlangganan" id="periode_berlangganan" class="form-select form-select-sm">
            <option selected>Per 1 Bulan</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
  
      <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-lg-5 col-xl-4">
          <label for="jumlah_tv" class="col-form-label">Jumlah TV</label>
        </div>
        <div class="col-7 col-sm-8 col-lg-7 col-xl-8">
          <input type="number" name="jumlah_tv" id="jumlah_tv" min="0" class="form-control form-control-sm">
        </div>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-5 col-sm-2 col-lg-2">
      <label for="catatan_admin" class="col-form-label">Catatan admin</label>
    </div>
    <div class="col-7 col-sm-10 col-lg-10">
      <textarea name="catatan_admin" id="catatan_admin" rows="2" class="form-control form-control-sm"></textarea>
    </div>
  </div>

  <div class="text-center my-3">
    <button class="btn btn-outline-primary btn-sm">
      Update
    </button>
  </div>
</div>