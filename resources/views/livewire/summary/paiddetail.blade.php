<div>
  <div class="container-fluid mb-2">
    <span class="lead">Rekap Penerimaan Tagihan Harian Detail</span>
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
              <th colspan="8">REKAP TAGIHAN HARIAN BERDASARKAN TANGGAL BAYAR PER DESEMBER 2023</th>
            </tr>
            <tr>
              <td colspan="8">
                <button class="btn btn-outline-primary btn-sm"
                wire:click.prevent="export">Export to Excel</button>
              </td>
            </tr>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tgl Tagihan</th>
              <th scope="col">Jumlah</th>
              <th scope="col">TV ONLY</th>
              <th scope="col">INET + Inet TV</th>
              <th scope="col">NONBIASA</th>
              <th scope="col">ANALOG ONLY</th>
              <th scope="col">SUBTOTAL</th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-end">
              <td>1</td>
              <td class="text-center">2023-12-01</td>
              <td>58</td>
              <td>1.335.000</td>
              <td>5.300.000</td>
              <td>305.000</td>
              <td>2.625.000</td>
              <td>9.565.000</td>
            </tr>
            <tr class="text-end">
              <td>2</td>
              <td class="text-center">2023-12-02</td>
              <td>33</td>
              <td>1.020.000</td>
              <td>3.265.000</td>
              <td>0</td>
              <td>895.000</td>
              <td>5.180.000</td>
            </tr>
            <tr class="text-end">
              <td>3</td>
              <td class="text-center">2023-12-03</td>
              <td>6</td>
              <td>500.000</td>
              <td>200.000</td>
              <td>0</td>
              <td>150.000</td>
              <td>850.000</td>
            </tr>
            <tr class="text-end">
              <td>4</td>
              <td class="text-center">2023-12-04</td>
              <td>25</td>
              <td>620.000</td>
              <td>1.965.000</td>
              <td>1.505.000</td>
              <td>1.660.000</td>
              <td>5.750.000</td>
            </tr>
            <tr class="text-end">
              <td>5</td>
              <td class="text-center">2023-12-05</td>
              <td>41</td>
              <td>3.015.000</td>
              <td>4.595.000</td>
              <td>630.000</td>
              <td>1.900.000</td>
              <td>10.140.000</td>
            </tr>
            <tr class="text-end">
              <td>6</td>
              <td class="text-center">2023-12-06</td>
              <td>21</td>
              <td>360.000</td>
              <td>3.470.000</td>
              <td>420.000</td>
              <td>440.000</td>
              <td>4.690.000</td>
            </tr>
            <tr class="text-end">
              <td>7</td>
              <td class="text-center">2023-12-07</td>
              <td>49</td>
              <td>5.365.000</td>
              <td>4.890.000</td>
              <td>0</td>
              <td>1.345.000</td>
              <td>11.600.000</td>
            </tr>
            <tr class="text-end">
              <td>8</td>
              <td class="text-center">2023-12-08</td>
              <td>35</td>
              <td>700.000</td>
              <td>5.500.000</td>
              <td>0</td>
              <td>970.000</td>
              <td>7.170.000</td>
            </tr>
            <tr class="text-end">
              <td>9</td>
              <td class="text-center">2023-12-09</td>
              <td>40</td>
              <td>990.000</td>
              <td>5.970.000</td>
              <td>0</td>
              <td>440.000</td>
              <td>7.400.000</td>
            </tr>
            <tr class="text-end">
              <td>10</td>
              <td class="text-center">2023-12-10</td>
              <td>16</td>
              <td>570.000</td>
              <td>1.060.000</td>
              <td>0</td>
              <td>1.200.000</td>
              <td>2.830.000</td>
            </tr>
            <tr class="text-end">
              <td>11</td>
              <td class="text-center">2023-12-11</td>
              <td>52</td>
              <td>760.000</td>
              <td>3.995.000</td>
              <td>445.000</td>
              <td>3.315.000</td>
              <td>8.515.000</td>
            </tr>
            <tr class="text-end">
              <td>12</td>
              <td class="text-center">2023-12-12</td>
              <td>76</td>
              <td>3.075.000</td>
              <td>7.633.000</td>
              <td>6.500.000</td>
              <td>2.080.000</td>
              <td>19.288.000</td>
            </tr>
            <tr class="text-end">
              <td>13</td>
              <td class="text-center">2023-12-13</td>
              <td>53</td>
              <td>1.455.000</td>
              <td>8.767.000</td>
              <td>6.600.000</td>
              <td>1.985.000</td>
              <td>18.807.000</td>
            </tr>
            <tr class="text-end">
              <td>14</td>
              <td class="text-center">2023-12-14</td>
              <td>41</td>
              <td>1.090.000</td>
              <td>4.720.000</td>
              <td>1.510.000</td>
              <td>820.000</td>
              <td>8.140.000</td>
            </tr>
            <tr class="text-end">
              <td>15</td>
              <td class="text-center">2023-12-15</td>
              <td>114</td>
              <td>2.310.000</td>
              <td>15.719.000</td>
              <td>425.000</td>
              <td>3.590.000</td>
              <td>22.044.000</td>
            </tr>
            <tr class="text-end">
              <td>16</td>
              <td class="text-center">2023-12-16</td>
              <td>47</td>
              <td>1.080.000</td>
              <td>9.050.000</td>
              <td>0</td>
              <td>1.780.000</td>
              <td>11.910.000</td>
            </tr>
            <tr class="text-end">
              <td>17</td>
              <td class="text-center">2023-12-17</td>
              <td>14</td>
              <td>365.000</td>
              <td>2.510.000</td>
              <td>0</td>
              <td>0</td>
              <td>2.875.000</td>
            </tr>
            <tr class="text-end">
              <td>18</td>
              <td class="text-center">2023-12-18</td>
              <td>38</td>
              <td>1.685.000</td>
              <td>4.175.000</td>
              <td>5.625.000</td>
              <td>815.000</td>
              <td>12.300.000</td>
            </tr>
            <tr class="text-end">
              <td>19</td>
              <td class="text-center">2023-12-19</td>
              <td>66</td>
              <td>995.000</td>
              <td>8.030.000</td>
              <td>0</td>
              <td>2.470.000</td>
              <td>11.495.000</td>
            </tr>
            <tr class="text-end">
              <td>20</td>
              <td class="text-center">2023-12-20</td>
              <td>65</td>
              <td>4.665.000</td>
              <td>6.840.000</td>
              <td>665.000</td>
              <td>965.000</td>
              <td>13.135.000</td>
            </tr>
            <tr class="text-end">
              <td>21</td>
              <td class="text-center">2023-12-21</td>
              <td>34</td>
              <td>815.000</td>
              <td>2.800.000</td>
              <td>11.955.000</td>
              <td>1.436.000</td>
              <td>17.006.000</td>
            </tr>
            <tr class="text-end">
              <td>22</td>
              <td class="text-center">2023-12-22</td>
              <td>29</td>
              <td>1.000.000</td>
              <td>3.115.000</td>
              <td>0</td>
              <td>885.000</td>
              <td>5.000.000</td>
            </tr>
            <tr class="text-end">
              <td>23</td>
              <td class="text-center">2023-12-23</td>
              <td>62</td>
              <td>4.245.000</td>
              <td>3.075.000</td>
              <td>0</td>
              <td>3.785.000</td>
              <td>11.105.000</td>
            </tr>
            <tr class="text-end">
              <td>24</td>
              <td class="text-center">2023-12-24</td>
              <td>2</td>
              <td>0</td>
              <td>380.000</td>
              <td>0</td>
              <td>90.000</td>
              <td>470.000</td>
            </tr>
            <tr class="text-end">
              <td>25</td>
              <td class="text-center">2023-12-25</td>
              <td>6</td>
              <td>120.000</td>
              <td>480.000</td>
              <td>0</td>
              <td>320.000</td>
              <td>920.000</td>
            </tr>
            <tr class="text-end">
              <td>26</td>
              <td class="text-center">2023-12-26</td>
              <td>32</td>
              <td>1.605.000</td>
              <td>2.100.000</td>
              <td>0</td>
              <td>1.520.000</td>
              <td>5.225.000</td>
            </tr>
            <tr class="text-end">
              <td>27</td>
              <td class="text-center">2023-12-27</td>
              <td>92</td>
              <td>6.050.000</td>
              <td>8.390.000</td>
              <td>1.810.000</td>
              <td>3.315.000</td>
              <td>19.565.000</td>
            </tr>
            <tr class="text-end">
              <td>28</td>
              <td class="text-center">2023-12-28</td>
              <td>51</td>
              <td>8.730.000</td>
              <td>6.636.000</td>
              <td>0</td>
              <td>700.000</td>
              <td>16.066.000</td>
            </tr>
            <tr class="text-end">
              <td>29</td>
              <td class="text-center">2023-12-29</td>
              <td>27</td>
              <td>600.000</td>
              <td>2.520.000</td>
              <td>110.000</td>
              <td>1.290.000</td>
              <td>4.520.000</td>
            </tr>
            <tr class="text-end">
              <td>30</td>
              <td class="text-center">2023-12-30</td>
              <td>67</td>
              <td>3.040.000</td>
              <td>5.895.000</td>
              <td>355.000</td>
              <td>3.100.000</td>
              <td>12.390.000</td>
            </tr>
            <tr class="text-end">
              <td>31</td>
              <td class="text-center">2023-12-31</td>
              <td>15</td>
              <td>365.000</td>
              <td>1.830.000</td>
              <td>0</td>
              <td>300.000</td>
              <td>2.495.000</td>
            </tr>
          </tbody>
          <tfoot>
            <tr class="text-end fw-bold">
              <td colspan="2">Total:</td>
              <td>1.307</td>
              <td>58.525.000</td>
              <td>144.875.000</td>
              <td>38.860.000</td>
              <td>46.186.000</td>
              <td>288.446.000</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>