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
    <div class="row">
      <div class="col">
        <div class="input-group">
          <label for="filterType" class="input-group-text">Penjualan</label>
          <select id="filterType" class="form-select form-select-sm"
            wire:model.live="filterType">
            <option value="">Semua</option>
            <option value="tv">TV</option>
            <option value="inet">Internet</option>
            <option value="t&i">TV & Internet</option>
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
              @if($filterType === '' || $filterType === 'tv')<th scope="col">TV</th>@endif
              @if($filterType === '' || $filterType === 'inet')<th scope="col">INET</th>@endif
              @if($filterType === '' || $filterType === 't&i')<th scope="col">TV&INET</th>@endif
            </tr>
          </thead>
          <tbody class="text-end">
            <tr>
              <td class="text-start">Januari</td>
              @if($filterType === '' || $filterType === 'tv')<td>0</td>@endif
              @if($filterType === '' || $filterType === 'inet')<td>15</td>@endif
              @if($filterType === '' || $filterType === 't&i')<td>2</td>@endif
            </tr>
            <tr>
              <td class="text-start">Februari</td>
              @if($filterType === '' || $filterType === 'tv')<td>0</td>@endif
              @if($filterType === '' || $filterType === 'inet')<td>17</td>@endif
              @if($filterType === '' || $filterType === 't&i')<td>1</td>@endif
            </tr>
            <tr>
              <td class="text-start">Maret</td>
              @if($filterType === '' || $filterType === 'tv')<td>0</td>@endif
              @if($filterType === '' || $filterType === 'inet')<td>19</td>@endif
              @if($filterType === '' || $filterType === 't&i')<td>3</td>@endif
            </tr>
            <tr>
              <td class="text-start">April</td>
              @if($filterType === '' || $filterType === 'tv')<td>0</td>@endif
              @if($filterType === '' || $filterType === 'inet')<td>10</td>@endif
              @if($filterType === '' || $filterType === 't&i')<td>1</td>@endif
            </tr>
            <tr>
              <td class="text-start">Mei</td>
              @if($filterType === '' || $filterType === 'tv')<td>1</td>@endif
              @if($filterType === '' || $filterType === 'inet')<td>18</td>@endif
              @if($filterType === '' || $filterType === 't&i')<td>1</td>@endif
            </tr>
            <tr>
              <td class="text-start">Juni</td>
              @if($filterType === '' || $filterType === 'tv')<td>1</td>@endif
              @if($filterType === '' || $filterType === 'inet')<td>15</td>@endif
              @if($filterType === '' || $filterType === 't&i')<td>3</td>@endif
            </tr>
            <tr>
              <td class="text-start">Juli</td>
              @if($filterType === '' || $filterType === 'tv')<td>0</td>@endif
              @if($filterType === '' || $filterType === 'inet')<td>16</td>@endif
              @if($filterType === '' || $filterType === 't&i')<td>0</td>@endif
            </tr>
            <tr>
              <td class="text-start">Agustus</td>
              @if($filterType === '' || $filterType === 'tv')<td>2</td>@endif
              @if($filterType === '' || $filterType === 'inet')<td>11</td>@endif
              @if($filterType === '' || $filterType === 't&i')<td>1</td>@endif
            </tr>
            <tr>
              <td class="text-start">September</td>
              @if($filterType === '' || $filterType === 'tv')<td>0</td>@endif
              @if($filterType === '' || $filterType === 'inet')<td>12</td>@endif
              @if($filterType === '' || $filterType === 't&i')<td>1</td>@endif
            </tr>
            <tr>
              <td class="text-start">Oktober</td>
              @if($filterType === '' || $filterType === 'tv')<td>0</td>@endif
              @if($filterType === '' || $filterType === 'inet')<td>12</td>@endif
              @if($filterType === '' || $filterType === 't&i')<td>2</td>@endif
            </tr>
            <tr>
              <td class="text-start">November</td>
              @if($filterType === '' || $filterType === 'tv')<td>4</td>@endif
              @if($filterType === '' || $filterType === 'inet')<td>15</td>@endif
              @if($filterType === '' || $filterType === 't&i')<td>1</td>@endif
            </tr>
            <tr>
              <td class="text-start">Desember</td>
              @if($filterType === '' || $filterType === 'tv')<td>3</td>@endif
              @if($filterType === '' || $filterType === 'inet')<td>23</td>@endif
              @if($filterType === '' || $filterType === 't&i')<td>0</td>@endif
            </tr>
          </tbody>
          <tfoot>
            <tr class="fw-bold text-end">
              <td>Total</td>
              @if($filterType === '' || $filterType === 'tv')<td>11</td>@endif
              @if($filterType === '' || $filterType === 'inet')<td>183</td>@endif
              @if($filterType === '' || $filterType === 't&i')<td>16</td>@endif
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <div class="col-12 col-md-8">
      <div style="height: 24rem;">
        <livewire:livewire-line-chart 
          key="{{ $sellingChart->reactiveKey() }}" 
          :line-chart-model="$sellingChart" />
      </div>
    </div>
  </div>
</div>
