<div class="container-fluid">
  <span class="lead mb-2">Laporan Pendapatan Tahunan Berdasarkan Penagihan Invoice</span>

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
              <th scope="col">Pendapatan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Januari</td>
              <td class="text-end">290.043.000</td>
            </tr>
            <tr>
              <td>Februari</td>
              <td class="text-end">273.886.000</td>
            </tr>
            <tr>
              <td>Maret</td>
              <td class="text-end">290.575.646</td>
            </tr>
            <tr>
              <td>April</td>
              <td class="text-end">281.794.000</td>
            </tr>
            <tr>
              <td>Mei</td>
              <td class="text-end">285.198.000</td>
            </tr>
            <tr>
              <td>Juni</td>
              <td class="text-end">276.191.000</td>
            </tr>
            <tr>
              <td>Juli</td>
              <td class="text-end">286.415.000</td>
            </tr>
            <tr>
              <td>Agustus</td>
              <td class="text-end">298.060.500</td>
            </tr>
            <tr>
              <td>September</td>
              <td class="text-end">288.616.000</td>
            </tr>
            <tr>
              <td>Oktober</td>
              <td class="text-end">281.521.000</td>
            </tr>
            <tr>
              <td>November</td>
              <td class="text-end">275.451.000</td>
            </tr>
            <tr>
              <td>Desember</td>
              <td class="text-end">203.401.000</td>
            </tr>
          </tbody>
          <tfoot>
            <tr class="text-end">
              <td>Total Pendapatan</td>
              <td>3.331.149.146</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <div class="col-12 col-md-8">
      <div style="height: 24rem;">
        <livewire:livewire-column-chart 
          key="{{ $annualIncome->reactiveKey() }}" 
          :column-chart-model="$annualIncome" />
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center mb-3">
    <span style="cursor:pointer" class="text-danger-emphasis text-decoration-underline" wire:click.prevent="export">Download as CSV</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#" class="text-danger-emphasis">View Printable Version</a>
  </div>
</div>
