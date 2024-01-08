<div class="container-fluid">
  <span class="lead mb-2">Grafik Utilisasi Node</span>
  
  <div class="container-fluid row mt-3">
    <div class="col-12 col-md-4">
      <div>
        <table class="table table-sm table-light table-striped table-hover table-bordered">
          <thead class="text-center align-middle">
            <tr>
              <th scope="col">Node</th>
              <th scope="col">Homepass</th>
              <th scope="col">Pelanggan</th>
              <th scope="col">Utilisasi</th>
            </tr>
          </thead>
          <tbody class="text-end">
            <tr>
              <td class="text-start">FN 1</td>
              <td>494</td>
              <td>40</td>
              <td>8.1 %</td>
            </tr>
            <tr>
              <td class="text-start">FN 2</td>
              <td>518</td>
              <td>20</td>
              <td>3.9 %</td>
            </tr>
            <tr>
              <td class="text-start">FN 3</td>
              <td>0</td>
              <td>1</td>
              <td>0 %</td>
            </tr>
            <tr>
              <td class="text-start">FN 4</td>
              <td>535</td>
              <td>8</td>
              <td>1.5 %</td>
            </tr>
            <tr>
              <td class="text-start">FN 5</td>
              <td>514</td>
              <td>15</td>
              <td>2.9 %</td>
            </tr>
            <tr>
              <td class="text-start">FN 6</td>
              <td>652</td>
              <td>16</td>
              <td>2.5 %</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-12 col-md-8">
      <div style="height: 24rem;">
        <livewire:livewire-column-chart 
          key="{{ $nodeChart->reactiveKey() }}" 
          :column-chart-model="$nodeChart" />
      </div>
    </div>
  </div>
</div>
