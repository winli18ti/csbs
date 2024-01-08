<div class="container-fluid">
  <span class="lead mb-2">Grafik Pemutusan Pelanggan Berdasarkan Tanggal Dismantle</span>

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
              <th scope="col">TV</th>
              <th scope="col">INET</th>
              <th scope="col">TV&INET</th>
              <th scope="col">Jumlah</th>
            </tr>
          </thead>
          <tbody class="text-end">
            <tr>
              <td class="text-start">Januari</td>
              <td>35</td>
              <td>10</td>
              <td>11</td>
              <td>46</td>
            </tr>
            <tr>
              <td class="text-start">Februari</td>
              <td>23</td>
              <td>12</td>
              <td>3</td>
              <td>26</td>
            </tr>
            <tr>
              <td class="text-start">Maret</td>
              <td>27</td>
              <td>24</td>
              <td>9</td>
              <td>36</td>
            </tr>
            <tr>
              <td class="text-start">April</td>
              <td>24</td>
              <td>4</td>
              <td>3</td>
              <td>27</td>
            </tr>
            <tr>
              <td class="text-start">Mei</td>
              <td>21</td>
              <td>13</td>
              <td>5</td>
              <td>27</td>
            </tr>
            <tr>
              <td class="text-start">Juni</td>
              <td>30</td>
              <td>13</td>
              <td>8</td>
              <td>38</td>
            </tr>
            <tr>
              <td class="text-start">Juli</td>
              <td>22</td>
              <td>14</td>
              <td>5</td>
              <td>27</td>
            </tr>
            <tr>
              <td class="text-start">Agustus</td>
              <td>49</td>
              <td>10</td>
              <td>11</td>
              <td>60</td>
            </tr>
            <tr>
              <td class="text-start">September</td>
              <td>15</td>
              <td>15</td>
              <td>7</td>
              <td>22</td>
            </tr>
            <tr>
              <td class="text-start">Oktober</td>
              <td>17</td>
              <td>14</td>
              <td>5</td>
              <td>22</td>
            </tr>
            <tr>
              <td class="text-start">November</td>
              <td>10</td>
              <td>14</td>
              <td>2</td>
              <td>12</td>
            </tr>
            <tr>
              <td class="text-start">Desember</td>
              <td>24</td>
              <td>4</td>
              <td>4</td>
              <td>28</td>
            </tr>
          </tbody>
          <tfoot class="fw-bold text-end">
            <tr>
              <td>Total</td>
              <td>297</td>
              <td>147</td>
              <td>73</td>
              <td>517</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <div class="col-12 col-md-8">
      <div style="height: 24rem;">
        <livewire:livewire-column-chart 
          key="{{ $dismantleChart->reactiveKey() }}" 
          :column-chart-model="$dismantleChart" />
      </div>
    </div>
  </div>
</div>
