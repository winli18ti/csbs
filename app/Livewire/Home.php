<?php

namespace App\Livewire;

use App\Models\User;
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
    $sellingOverview = (new LineChartModel())
      ->singleLine()
      ->setTitle('Jumlah Penjualan')
      ->addPoint('Nov 22', 20)
      ->addPoint('Des 22', 32)
      ->addPoint('Jan 23', 17)
      ->addPoint('Feb 23', 20)
      ->addPoint('Mar 23', 25)
      ->addPoint('Apr 23', 11)
      ->addPoint('Mei 23', 20)
      ->addPoint('Jun 23', 19)
      ->addPoint('Jul 23', 16)
      ->addPoint('Ags 23', 18)
      ->addPoint('Sep 23', 13)
      ->addPoint('Okt 23', 10);

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
