<?php

namespace App\Livewire;

use App\Models\User;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
  public $name, $notes;

  public function mount()
  {
    $this->name = Auth::user()->name;
    $this->notes = Auth::user()->notes;
    
  }

  public function render()
  {
    $sellingOverview = (new ColumnChartModel())
      ->multiColumn()
      ->setTitle('Jumlah Penjualan')
      ->addSeriesColumn('Jumlah penjualan', 'Nov 22', 20)
      ->addSeriesColumn('Jumlah penjualan', 'Des 22', 32)
      ->addSeriesColumn('Jumlah penjualan', 'Jan 23', 17)
      ->addSeriesColumn('Jumlah penjualan', 'Feb 23', 20)
      ->addSeriesColumn('Jumlah penjualan', 'Mar 23', 25)
      ->addSeriesColumn('Jumlah penjualan', 'Apr 23', 11)
      ->addSeriesColumn('Jumlah penjualan', 'Mei 23', 20)
      ->addSeriesColumn('Jumlah penjualan', 'Jun 23', 19)
      ->addSeriesColumn('Jumlah penjualan', 'Jul 23', 16)
      ->addSeriesColumn('Jumlah penjualan', 'Ags 23', 18)
      ->addSeriesColumn('Jumlah penjualan', 'Sep 23', 13)
      ->addSeriesColumn('Jumlah penjualan', 'Okt 23', 10);

    $sellingGraph = (new LineChartModel())
      ->multiLine()
      ->setTitle('Grafik Penjualan TV & Internet 2023')

      ->addSeriesPoint('Inet', 'Jan', 15)
      ->addSeriesPoint('Inet', 'Feb', 17)
      ->addSeriesPoint('Inet', 'Mar', 19)
      ->addSeriesPoint('Inet', 'Apr', 10)
      ->addSeriesPoint('Inet', 'Mei', 18)
      ->addSeriesPoint('Inet', 'Jun', 15)
      ->addSeriesPoint('Inet', 'Jul', 16)
      ->addSeriesPoint('Inet', 'Ags', 11)
      ->addSeriesPoint('Inet', 'Sep', 12)
      ->addSeriesPoint('Inet', 'Okt', 12)
      ->addSeriesPoint('Inet', 'Nov', 15)
      ->addSeriesPoint('Inet', 'Des', 23)

      ->addSeriesPoint('TV', 'Jan', 0)
      ->addSeriesPoint('TV', 'Feb', 0)
      ->addSeriesPoint('TV', 'Mar', 0)
      ->addSeriesPoint('TV', 'Apr', 0)
      ->addSeriesPoint('TV', 'Mei', 1)
      ->addSeriesPoint('TV', 'Jun', 1)
      ->addSeriesPoint('TV', 'Jul', 0)
      ->addSeriesPoint('TV', 'Ags', 2)
      ->addSeriesPoint('TV', 'Sep', 0)
      ->addSeriesPoint('TV', 'Okt', 0)
      ->addSeriesPoint('TV', 'Nov', 4)
      ->addSeriesPoint('TV', 'Des', 3)

      ->addSeriesPoint('T&I', 'Jan', 2)
      ->addSeriesPoint('T&I', 'Feb', 1)
      ->addSeriesPoint('T&I', 'Mar', 3)
      ->addSeriesPoint('T&I', 'Apr', 1)
      ->addSeriesPoint('T&I', 'Mei', 1)
      ->addSeriesPoint('T&I', 'Jun', 3)
      ->addSeriesPoint('T&I', 'Jul', 0)
      ->addSeriesPoint('T&I', 'Ags', 1)
      ->addSeriesPoint('T&I', 'Sep', 1)
      ->addSeriesPoint('T&I', 'Okt', 2)
      ->addSeriesPoint('T&I', 'Nov', 1)
      ->addSeriesPoint('T&I', 'Des', 0);
    
    return view('livewire.home')->with([
      'sellingOverview' => $sellingOverview,
      'sellingGraph' => $sellingGraph
    ]);
  }

  public function update()
  {
    User::where('id', Auth::user()->id)->update([
      'notes' => $this->notes,
    ]);
    session()->flash('message', 'Catatan berhasil disimpan');
  }
}
