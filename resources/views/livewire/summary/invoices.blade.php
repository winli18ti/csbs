<div>
  <div class="container-fluid mb-2">
    <span class="lead">Rekap Tagihan</span>
  </div>

  <div class="container d-flex justify-content-center my-3">
    <div class="row">
      <div class="col">
        <div class="input-group">
          <select id="filterMonth" class="form-select form-select-sm"
            wire:model.live="filterMonth">
            <option value="1">Januari</option><option value="2">Februari</option><option value="3">Maret</option>
            <option value="4">April</option><option value="5">Mei</option><option value="6">Juni</option>
            <option value="7">Juli</option><option value="8">Agustus</option><option value="9">September</option>
            <option value="10">Oktober</option><option value="11">November</option><option value="12">Desember</option>
          </select>
          <select id="filterYear" class="form-select form-select-sm"
            wire:model.live="filterYear">
            <option value="2022">2022</option>
            <option value="2023">2023</option>
          </select>
          <button class="btn btn-outline-primary" type="button">Tampilkan</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container d-flex justify-content-center">
    <div class="row">
      <div class="col">
        <table class="table table-sm table-light table-striped table-hover table-bordered">
          <thead class="text-center align-middle">
            <tr>
              <th colspan="6">REKAP TAGIHAN HARIAN BERDASARKAN TANGGAL TERBIT TAGIHAN PER --BULAN TAHUN--</th>
            </tr>
            <tr>
              <td colspan="6"><a href="/">Export to Excel</a></td>
            </tr>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tgl Tagihan</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Total Semua Tagihan</th>
              <th scope="col">Tagihan Blm Terbayar</th>
              <th scope="col">Tagihan Terbayar</th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-end">
              <td>1</td>
              <td class="text-center">2023-11-01</td>
              <td>748</td>
              <td>188.861.000</td>
              <td>108.751.000</td>
              <td>80.110.000</td>
            </tr>
            <tr class="text-end">
              <td>2</td>
              <td class="text-center">2023-11-02</td>
              <td>3</td>
              <td>550.000</td>
              <td>200.000</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>3</td>
              <td class="text-center">2023-11-03</td>
              <td>1</td>
              <td>150.000</td>
              <td>150.000</td>
              <td>0</td>
            </tr>
          </tbody>
          <tfoot>
            <tr class="text-end fw-bold">
              <td colspan="2">Total:</td>
              <td>1.354</td>
              <td>293.853.000</td>
              <td>203.793.000</td>
              <td>90.060.000</td>
            </tr>
            <tr class="text-center">
              <td colspan="6"><a href="/">Export to Excel</a></td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>