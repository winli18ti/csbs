<div class="container-fluid">
  <span class="lead mb-2">Grafik Pengaduan Pelanggan</span>

  <div class="d-flex my-3">
    <div class="row">
      <div class="col">
        <div class="input-group">
          <label for="filterYear" class="input-group-text">Tahun</label>
          <select id="filterYear" class="form-select form-select-sm"
            wire:model.live="filterYear">
            <option value="2022">2022</option>
            <option value="2023">2023</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container-fluid row">
    <div class="col-12 col-md-4">
      <div>
        <table class="table table-sm table-light table-striped table-hover table-bordered">
          <thead class="text-center align-middle">
            <tr>
              <th scope="col">Bulan</th>
              <th scope="col">Jumlah</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Januari</td>
              <td class="text-end">338</td>
            </tr>
            <tr>
              <td>Februari</td>
              <td class="text-end">306</td>
            </tr>
            <tr>
              <td>Maret</td>
              <td class="text-end">318</td>
            </tr>
            <tr>
              <td>April</td>
              <td class="text-end">342</td>
            </tr>
            <tr>
              <td>Mei</td>
              <td class="text-end">338</td>
            </tr>
            <tr>
              <td>Juni</td>
              <td class="text-end">218</td>
            </tr>
            <tr>
              <td>Juli</td>
              <td class="text-end">209</td>
            </tr>
            <tr>
              <td>Agustus</td>
              <td class="text-end">264</td>
            </tr>
            <tr>
              <td>September</td>
              <td class="text-end">253</td>
            </tr>
            <tr>
              <td>Oktober</td>
              <td class="text-end">296</td>
            </tr>
            <tr>
              <td>November</td>
              <td class="text-end">264</td>
            </tr>
            <tr>
              <td>Desember</td>
              <td class="text-end">252</td>
            </tr>
          </tbody>
          <tfoot>
            <tr class="fw-bold text-end">
              <td>Total Pendapatan</td>
              <td>3.396</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <div class="col-12 col-md-8">
      <div style="height: 24rem;">
        <livewire:livewire-column-chart 
          key="{{ $complainChart->reactiveKey() }}" 
          :column-chart-model="$complainChart" />
      </div>
    </div>
  </div>
</div>
