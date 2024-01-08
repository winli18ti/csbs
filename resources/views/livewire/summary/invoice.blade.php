<div>
  <div class="container-fluid mb-2">
    <span class="lead">Rekap Tagihan Harian</span>
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
              <th colspan="6">REKAP TAGIHAN HARIAN BERDASARKAN TANGGAL TERBIT TAGIHAN PER DESEMBER 2023</th>
            </tr>
            <tr>
              <td colspan="6">
                <button class="btn btn-outline-primary btn-sm"
                wire:click.prevent="export">Export to Excel</button>
              </td>
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
              <td class="text-center">2023-12-01</td>
              <td>750</td>
              <td>185.630.000</td>
              <td>60.125.000</td>
              <td>125.505.000</td>
            </tr>
            <tr class="text-end">
              <td>2</td>
              <td class="text-center">2023-12-02</td>
              <td>1</td>
              <td>200.000</td>
              <td>0</td>
              <td>200.000</td>
            </tr>
            <tr class="text-end">
              <td>3</td>
              <td class="text-center">2023-12-03</td>
              <td>1</td>
              <td>150.000</td>
              <td>0</td>
              <td>150.000</td>
            </tr>
            <tr class="text-end">
              <td>4</td>
              <td class="text-center">2023-12-04</td>
              <td>1</td>
              <td>200.000</td>
              <td>0</td>
              <td>200.000</td>
            </tr>
            <tr class="text-end">
              <td>5</td>
              <td class="text-center">2023-12-05</td>
              <td>5</td>
              <td>950.000</td>
              <td>0</td>
              <td>950.000</td>
            </tr>
            <tr class="text-end">
              <td>6</td>
              <td class="text-center">2023-12-06</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>7</td>
              <td class="text-center">2023-12-07</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>8</td>
              <td class="text-center">2023-12-08</td>
              <td>2</td>
              <td>500.000</td>
              <td>0</td>
              <td>500.000</td>
            </tr>
            <tr class="text-end">
              <td>9</td>
              <td class="text-center">2023-12-09</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>10</td>
              <td class="text-center">2023-12-10</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>11</td>
              <td class="text-center">2023-12-11</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>12</td>
              <td class="text-center">2023-12-12</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>13</td>
              <td class="text-center">2023-12-13</td>
              <td>1</td>
              <td>200.000</td>
              <td>0</td>
              <td>200.000</td>
            </tr>
            <tr class="text-end">
              <td>14</td>
              <td class="text-center">2023-12-14</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>15</td>
              <td class="text-center">2023-12-15</td>
              <td>601</td>
              <td>108.221.000</td>
              <td>33.605.000</td>
              <td>74.616.000</td>
            </tr>
            <tr class="text-end">
              <td>16</td>
              <td class="text-center">2023-12-16</td>
              <td>2</td>
              <td>350.000</td>
              <td>0</td>
              <td>350.000</td>
            </tr>
            <tr class="text-end">
              <td>17</td>
              <td class="text-center">2023-12-17</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>18</td>
              <td class="text-center">2023-12-18</td>
              <td>1</td>
              <td>150.000</td>
              <td>0</td>
              <td>150.000</td>
            </tr>
            <tr class="text-end">
              <td>19</td>
              <td class="text-center">2023-12-19</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>20</td>
              <td class="text-center">2023-12-20</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>21</td>
              <td class="text-center">2023-12-21</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>22</td>
              <td class="text-center">2023-12-22</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>23</td>
              <td class="text-center">2023-12-23</td>
              <td>1</td>
              <td>150.000</td>
              <td>150.000</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>24</td>
              <td class="text-center">2023-12-24</td>
              <td>2</td>
              <td>300.000</td>
              <td>300.000</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>25</td>
              <td class="text-center">2023-12-25</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>26</td>
              <td class="text-center">2023-12-26</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>27</td>
              <td class="text-center">2023-12-27</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>28</td>
              <td class="text-center">2023-12-28</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>29</td>
              <td class="text-center">2023-12-29</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>30</td>
              <td class="text-center">2023-12-30</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr class="text-end">
              <td>31</td>
              <td class="text-center">2023-12-31</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
          </tbody>
          <tfoot>
            <tr class="text-end fw-bold">
              <td colspan="2">Total:</td>
              <td>1.368</td>
              <td>297.001.000</td>
              <td>94.180.000</td>
              <td>202.821.000</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>