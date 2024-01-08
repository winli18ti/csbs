<div class="container-fluid">
  <span class="lead mb-2">Laporan Pendapatan Tahunan Berdasarkan Tanggal Pembayaran</span>

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
              <td class="text-end">276.056.500</td>
            </tr>
            <tr>
              <td>Februari</td>
              <td class="text-end">271.981.000</td>
            </tr>
            <tr>
              <td>Maret</td>
              <td class="text-end">297.312.000</td>
            </tr>
            <tr>
              <td>April</td>
              <td class="text-end">243.361.000</td>
            </tr>
            <tr>
              <td>Mei</td>
              <td class="text-end">320.509.646</td>
            </tr>
            <tr>
              <td>Juni</td>
              <td class="text-end">268.894.000</td>
            </tr>
            <tr>
              <td>Juli</td>
              <td class="text-end">294.922.000</td>
            </tr>
            <tr>
              <td>Agustus</td>
              <td class="text-end">301.344.000</td>
            </tr>
            <tr>
              <td>September</td>
              <td class="text-end">283.919.500</td>
            </tr>
            <tr>
              <td>Oktober</td>
              <td class="text-end">294.384.000</td>
            </tr>
            <tr>
              <td>November</td>
              <td class="text-end">275.777.000</td>
            </tr>
            <tr>
              <td>Desember</td>
              <td class="text-end">288.446.000</td>
            </tr>
          </tbody>
          <tfoot>
            <tr class="text-end">
              <td>Total Pendapatan</td>
              <td>3.416.906.646</td>
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
