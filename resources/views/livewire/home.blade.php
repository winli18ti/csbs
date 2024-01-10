<div class="container-fluid mt-3">
  <span class="lead mb-2">Selamat Datang, {{$name}}</span>
  <div class="container-fluid row">
    <div class="col-12 col-md-6">
      <div class="m-2" style="height: 16rem;">
        <livewire:livewire-column-chart key="{{ $sellingOverview->reactiveKey() }}" :column-chart-model="$sellingOverview"/>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="m-2" style="height: 16rem;">
        <livewire:livewire-line-chart 
          key="{{ $sellingGraph->reactiveKey() }}" 
          :line-chart-model="$sellingGraph"/>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="m-2">
        <table class="table table-sm table-borderless">
          <thead>
            <tr class="table-danger">
              <th scope="col">Catatan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <textarea id="notes" rows="3" class="form-control form-control-sm"
                wire:model="notes"></textarea>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <button class="btn btn-outline-primary btn-sm" 
                  wire:click.prevent="update">Simpan</button>
              </td>
            </tr>
            @if(session()->has('message'))
              <tr>
                <td>
                  <div class="alert alert-success">
                    {{ session('message') }}
                  </div>
                </td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
