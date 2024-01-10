<div>
  <div class="container-fluid mb-2">
    <span class="lead">Rekap Tagihan Kolektor Harian</span>
  </div>

  <div class="container d-flex justify-content-center my-3">
    <div class="row">
      <div class="col">
        <div class="input-group">
          <label for="paiddate" class="input-group-text">Tanggal Pembayaran</label>
          <input type="date" id="paiddate" class="form-control form-control-sm" wire:model.live="filterDate">
          <button class="btn btn-outline-primary" type="button" wire:click.prevent="export">Ekspor Excel</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <table class="table table-sm table-hover table-bordered">
      <thead class="text-center align-middle">
        <tr>
          <th colspan="9">REKAP TAGIHAN KOLEKTOR HARIAN BERDASARKAN TANGGAL PEMBAYARAN -- TGL BULAN TAHUN--</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th colspan="9">Collector: --NAMA KOLEKTOR--</td>
        </tr>
        <tr class="text-center align-middle">
          <th scope="col">#</th>
          <th scope="col">Waktu</th>
          <th scope="col">No Tagihan</th>
          <th scope="col">Periode</th>
          <th scope="col">Nama Pelanggan</th>
          <th scope="col">Cust ID</th>
          <th scope="col">Alamat Pelanggan</th>
          <th scope="col">Total Bayar</th>
          <th scope="col">Keterangan</th>
        </tr>
        <tr>
          <td class="text-end">1</td>
          <td class="text-center">08:14:03</td>
          <td class="text-center">231100238</td>
          <td class="text-center">1 November 2023</td>
          <td>RUDI HENDRA</td>
          <td class="text-center">1211374</td>
          <td>Jl. Tg. Datuk No. 144</td>
          <td class="text-end">90.000</td>
          <td></td>
        </tr>
        <tr>
          <td class="text-end">2</td>
          <td class="text-center">08:59:56</td>
          <td class="text-center">231100896</td>
          <td class="text-center">15 November 2023</td>
          <td>ANG NGO</td>
          <td class="text-center">1203223</td>
          <td>Jl. Setia Budi Gg. Setia No. 1</td>
          <td class="text-end">210.000</td>
          <td></td>
        </tr>
        <tr>
          <td class="text-end">3</td>
          <td class="text-center">09:33:02</td>
          <td class="text-center">231100412</td>
          <td class="text-center">1 November 2023</td>
          <td>YANTO</td>
          <td class="text-center">1507043</td>
          <td>Jl. Sekapur Sirih Perum Graha Hangtuah Permai I...</td>
          <td class="text-end">70.000</td>
          <td>via admin (trf BCA tgl 15/11/2023)</td>
        </tr>
        <tr class="text-end fw-bold">
          <td colspan="7">Total</td>
          <td>5.290.000</td>
          <td></td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <th colspan="9">Collector: --NAMA KOLEKTOR--</td>
        </tr>
        <tr class="text-center align-middle">
          <th scope="col">#</th>
          <th scope="col">Waktu</th>
          <th scope="col">No Tagihan</th>
          <th scope="col">Periode</th>
          <th scope="col">Nama Pelanggan</th>
          <th scope="col">Cust ID</th>
          <th scope="col">Alamat Pelanggan</th>
          <th scope="col">Total Bayar</th>
          <th scope="col">Keterangan</th>
        </tr>
        <tr>
          <td class="text-end">1</td>
          <td class="text-center">08:14:03</td>
          <td class="text-center">231100238</td>
          <td class="text-center">1 November 2023</td>
          <td>RUDI HENDRA</td>
          <td class="text-center">1211374</td>
          <td>Jl. Tg. Datuk No. 144</td>
          <td class="text-end">90.000</td>
          <td></td>
        </tr>
        <tr>
          <td class="text-end">2</td>
          <td class="text-center">08:59:56</td>
          <td class="text-center">231100896</td>
          <td class="text-center">15 November 2023</td>
          <td>ANG NGO</td>
          <td class="text-center">1203223</td>
          <td>Jl. Setia Budi Gg. Setia No. 1</td>
          <td class="text-end">210.000</td>
          <td></td>
        </tr>
        <tr class="text-end fw-bold">
          <td colspan="7">Total</td>
          <td>5.290.000</td>
          <td></td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <th colspan="9">Collector: --NAMA KOLEKTOR--</td>
        </tr>
        <tr class="text-center align-middle">
          <th scope="col">#</th>
          <th scope="col">Waktu</th>
          <th scope="col">No Tagihan</th>
          <th scope="col">Periode</th>
          <th scope="col">Nama Pelanggan</th>
          <th scope="col">Cust ID</th>
          <th scope="col">Alamat Pelanggan</th>
          <th scope="col">Total Bayar</th>
          <th scope="col">Keterangan</th>
        </tr>
        <tr>
          <td class="text-end">1</td>
          <td class="text-center">08:14:03</td>
          <td class="text-center">231100238</td>
          <td class="text-center">1 November 2023</td>
          <td>RUDI HENDRA</td>
          <td class="text-center">1211374</td>
          <td>Jl. Tg. Datuk No. 144</td>
          <td class="text-end">90.000</td>
          <td></td>
        </tr>
        <tr>
          <td class="text-end">2</td>
          <td class="text-center">08:59:56</td>
          <td class="text-center">231100896</td>
          <td class="text-center">15 November 2023</td>
          <td>ANG NGO</td>
          <td class="text-center">1203223</td>
          <td>Jl. Setia Budi Gg. Setia No. 1</td>
          <td class="text-end">210.000</td>
          <td></td>
        </tr>
        <tr>
          <td class="text-end">3</td>
          <td class="text-center">09:33:02</td>
          <td class="text-center">231100412</td>
          <td class="text-center">1 November 2023</td>
          <td>YANTO</td>
          <td class="text-center">1507043</td>
          <td>Jl. Sekapur Sirih Perum Graha Hangtuah Permai I...</td>
          <td class="text-end">70.000</td>
          <td>via admin (trf BCA tgl 15/11/2023)</td>
        </tr>
        <tr class="text-end fw-bold">
          <td colspan="7">Total</td>
          <td>5.290.000</td>
          <td></td>
        </tr>
      </tbody>
      <tfoot>
        <tr class="text-end fw-bold">
          <td colspan="7">Grand Total</td>
          <td>19.640.000</td>
          <td></td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>