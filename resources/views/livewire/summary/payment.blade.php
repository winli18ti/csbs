<div>
  <div class="container-fluid mb-2">
    <span class="lead">Rekap Pembayaran Pelanggan Tahunan</span>
  </div>

  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-5 col-sm-4 col-md-3 col-xl-2">
        <label for="searchTerm" class="col-form-label">Cari Pelanggan</label>
      </div>
      <div class="col-7 col-sm-5 col-md-4 col-lg-3">
        <input type="text" id="searchTerm" class="form-control form-control-sm"
          wire:model.live="searchTerm">
      </div>
    </div>
  </div>

  <div class="container d-flex justify-content-center my-3">
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

  <div class="container-fluid">
    <div class="table-responsive">
      <table class="table table-sm table-striped table-hover caption-top text-truncate">
        <thead>
          <tr class="table-danger text-center">
            <th class="col">#</th>
            <th class="col">Cust ID</th>
            <th class="col">Nama</th>
            <th class="col">Januari</th>
            <th class="col">Februari</th>
            <th class="col">Maret</th>
            <th class="col">April</th>
            <th class="col">Mei</th>
            <th class="col">Juni</th>
            <th class="col">Juli</th>
            <th class="col">Agustus</th>
            <th class="col">September</th>
            <th class="col">Oktober</th>
            <th class="col">November</th>
            <th class="col">Desember</th>
            <th class="col">Status</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <td class="text-end">#</td>
            <td><a class="text-danger-emphasis" href="/">2312001</a></td>
            <td>---nama---</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td class="text-uppercase text-center">
              <span class="badge text-bg-success">active</span>
            </td>
          </tr>
          <tr>
            <td class="text-end">#</td>
            <td><a class="text-danger-emphasis" href="/">2312001</a></td>
            <td>---nama---</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td class="text-uppercase text-center">
              <span class="badge text-bg-success">active</span>
            </td>
          </tr>
          <tr>
            <td class="text-end">#</td>
            <td><a class="text-danger-emphasis" href="/">2312001</a></td>
            <td>---nama---</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td class="text-uppercase text-center">
              <span class="badge text-bg-success">active</span>
            </td>
          </tr>
          <tr>
            <td class="text-end">#</td>
            <td><a class="text-danger-emphasis" href="/">2312001</a></td>
            <td>---nama---</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td class="text-uppercase text-center">
              <span class="badge text-bg-success">active</span>
            </td>
          </tr>
          <tr>
            <td class="text-end">#</td>
            <td><a class="text-danger-emphasis" href="/">2312001</a></td>
            <td>---nama---</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td class="text-uppercase text-center">
              <span class="badge text-bg-success">active</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>