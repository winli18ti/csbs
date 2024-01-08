<?php

namespace App\Livewire;

use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Livewire\Component;

class Report extends Component
{
  public $mode;

  public $filterYear, $filterType = '';

  public function mount()
  {
    if (request()->is('report_income_paid')) {
      $this->mode = 'incomepaid';
    } else if (request()->is('report_income')) {
      $this->mode = 'income';
    } else if (request()->is('report_sales')) {
      $this->mode = 'sales';
    } else if (request()->is('report_node')) {
      $this->mode = 'node';
    } else if (request()->is('report_complain')) {
      $this->mode = 'complain';
    } else if (request()->is('report_selling')) {
      $this->mode = 'selling';
    } else if (request()->is('report_dismantle_date')) {
      $this->mode = 'dismantledate';
    } else if (request()->is('report_dismantle_regs')) {
      $this->mode = 'dismantleregs';
    }
  }

  public function render()
  {
    if($this->mode === 'incomepaid') {
      $annualIncome = (new ColumnChartModel())
        ->multiColumn()
        ->setTitle('Pendapatan Tahunan 2023')
        ->addSeriesColumn('Amount', 'JAN', 276056500)
        ->addSeriesColumn('Amount', 'FEB', 271981000)
        ->addSeriesColumn('Amount', 'MAR', 297312000)
        ->addSeriesColumn('Amount', 'APR', 243361000)
        ->addSeriesColumn('Amount', 'MEI', 320509646)
        ->addSeriesColumn('Amount', 'JUN', 268894000)
        ->addSeriesColumn('Amount', 'JUL', 294922000)
        ->addSeriesColumn('Amount', 'AGS', 301344000)
        ->addSeriesColumn('Amount', 'SEP', 283919500)
        ->addSeriesColumn('Amount', 'OKT', 294384000)
        ->addSeriesColumn('Amount', 'NOV', 275777000)
        ->addSeriesColumn('Amount', 'DES', 288446000);
      
      return view('livewire.report')->with([
        'annualIncome' => $annualIncome
      ]);
    } else if ($this->mode === 'income') {
      $annualIncome = (new ColumnChartModel())
        ->multiColumn()
        ->setTitle('Pendapatan Tahunan 2023')
        ->addSeriesColumn('Amount', 'JAN', 290043000)
        ->addSeriesColumn('Amount', 'FEB', 273886000)
        ->addSeriesColumn('Amount', 'MAR', 290575646)
        ->addSeriesColumn('Amount', 'APR', 281794000)
        ->addSeriesColumn('Amount', 'MEI', 285198000)
        ->addSeriesColumn('Amount', 'JUN', 276191000)
        ->addSeriesColumn('Amount', 'JUL', 286415000)
        ->addSeriesColumn('Amount', 'AGS', 298060500)
        ->addSeriesColumn('Amount', 'SEP', 288616000)
        ->addSeriesColumn('Amount', 'OKT', 281521000)
        ->addSeriesColumn('Amount', 'NOV', 275451000)
        ->addSeriesColumn('Amount', 'DES', 203401000);
      
      return view('livewire.report')->with([
        'annualIncome' => $annualIncome
      ]);
    } else if ($this->mode === 'sales') {

    } else if ($this->mode === 'node') {
      $nodeChart = (new ColumnChartModel())
        ->multiColumn()
        ->setTitle('Node Pelanggan')
        ->addSeriesColumn('Node', 'FN 1', 40)
        ->addSeriesColumn('Node', 'FN 2', 20)
        ->addSeriesColumn('Node', 'FN 3', 1)
        ->addSeriesColumn('Node', 'FN 4', 8)
        ->addSeriesColumn('Node', 'FN 5', 15)
        ->addSeriesColumn('Node', 'FN 6', 16);
      
      return view('livewire.report')->with([
        'nodeChart' => $nodeChart
      ]);
      
    } else if ($this->mode === 'complain') {
      $complainChart = (new ColumnChartModel())
        ->multiColumn()
        ->setTitle('Keluhan Pelanggan')
        ->addSeriesColumn('Keluhan', 'JAN', 338)
        ->addSeriesColumn('Keluhan', 'FEB', 306)
        ->addSeriesColumn('Keluhan', 'MAR', 318)
        ->addSeriesColumn('Keluhan', 'APR', 342)
        ->addSeriesColumn('Keluhan', 'MEI', 338)
        ->addSeriesColumn('Keluhan', 'JUN', 218)
        ->addSeriesColumn('Keluhan', 'JUL', 209)
        ->addSeriesColumn('Keluhan', 'AGS', 264)
        ->addSeriesColumn('Keluhan', 'SEP', 253)
        ->addSeriesColumn('Keluhan', 'OKT', 296)
        ->addSeriesColumn('Keluhan', 'NOV', 264)
        ->addSeriesColumn('Keluhan', 'DES', 252);
      
      return view('livewire.report')->with([
        'complainChart' => $complainChart
      ]);

    } else if ($this->mode === 'selling') {
      $sellingChart = (new LineChartModel())
        ->multiLine()
        ->setTitle('Penjualan Produk');
      
      if ($this->filterType === '' || $this->filterType === 'inet') {
        $sellingChart->addSeriesPoint('Inet', 'Jan', 15)
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
          ->addSeriesPoint('Inet', 'Des', 23);
      }
      if ($this->filterType === '' || $this->filterType === 'tv') {
        $sellingChart->addSeriesPoint('TV', 'Jan', 0)
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
          ->addSeriesPoint('TV', 'Des', 3);
      }
      if ($this->filterType === '' || $this->filterType === 't&i') {
        $sellingChart->addSeriesPoint('T&I', 'Jan', 2)
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
      }
      return view('livewire.report')->with([
        'sellingChart' => $sellingChart
      ]);
    } else if ($this->mode === 'dismantledate') {
      $dismantleChart = (new ColumnChartModel())
        ->multiColumn()
        ->setTitle('Pemutusan Pelanggan Berdasarkan Tanggal Dismantle')
        ->addSeriesColumn('TV', 'JAN', 35)
        ->addSeriesColumn('TV', 'FEB', 23)
        ->addSeriesColumn('TV', 'MAR', 27)
        ->addSeriesColumn('TV', 'APR', 24)
        ->addSeriesColumn('TV', 'MEI', 21)
        ->addSeriesColumn('TV', 'JUN', 30)
        ->addSeriesColumn('TV', 'JUL', 22)
        ->addSeriesColumn('TV', 'AGS', 49)
        ->addSeriesColumn('TV', 'SEP', 15)
        ->addSeriesColumn('TV', 'OKT', 17)
        ->addSeriesColumn('TV', 'NOV', 10)
        ->addSeriesColumn('TV', 'DES', 24)
        
        ->addSeriesColumn('INET', 'JAN', 10)
        ->addSeriesColumn('INET', 'FEB', 12)
        ->addSeriesColumn('INET', 'MAR', 24)
        ->addSeriesColumn('INET', 'APR', 4)
        ->addSeriesColumn('INET', 'MEI', 13)
        ->addSeriesColumn('INET', 'JUN', 13)
        ->addSeriesColumn('INET', 'JUL', 14)
        ->addSeriesColumn('INET', 'AGS', 10)
        ->addSeriesColumn('INET', 'SEP', 15)
        ->addSeriesColumn('INET', 'OKT', 14)
        ->addSeriesColumn('INET', 'NOV', 14)
        ->addSeriesColumn('INET', 'DES', 4)
        
        ->addSeriesColumn('TV&INET', 'JAN', 11)
        ->addSeriesColumn('TV&INET', 'FEB', 3)
        ->addSeriesColumn('TV&INET', 'MAR', 9)
        ->addSeriesColumn('TV&INET', 'APR', 3)
        ->addSeriesColumn('TV&INET', 'MEI', 5)
        ->addSeriesColumn('TV&INET', 'JUN', 8)
        ->addSeriesColumn('TV&INET', 'JUL', 5)
        ->addSeriesColumn('TV&INET', 'AGS', 11)
        ->addSeriesColumn('TV&INET', 'SEP', 7)
        ->addSeriesColumn('TV&INET', 'OKT', 5)
        ->addSeriesColumn('TV&INET', 'NOV', 2)
        ->addSeriesColumn('TV&INET', 'DES', 4);

        return view('livewire.report')->with([
          'dismantleChart' => $dismantleChart
        ]);
    } else if ($this->mode === 'dismantleregs') {
      $dismantleChart = (new ColumnChartModel())
        ->multiColumn()
        ->setTitle('Pemutusan Pelanggan Berdasarkan Tanggal Dismantle')
        ->addSeriesColumn('TV', 'JAN', 0)
        ->addSeriesColumn('TV', 'FEB', 0)
        ->addSeriesColumn('TV', 'MAR', 0)
        ->addSeriesColumn('TV', 'APR', 0)
        ->addSeriesColumn('TV', 'MEI', 0)
        ->addSeriesColumn('TV', 'JUN', 0)
        ->addSeriesColumn('TV', 'JUL', 0)
        ->addSeriesColumn('TV', 'AGS', 0)
        ->addSeriesColumn('TV', 'SEP', 0)
        ->addSeriesColumn('TV', 'OKT', 0)
        ->addSeriesColumn('TV', 'NOV', 0)
        ->addSeriesColumn('TV', 'DES', 0)
        
        ->addSeriesColumn('INET', 'JAN', 6)
        ->addSeriesColumn('INET', 'FEB', 2)
        ->addSeriesColumn('INET', 'MAR', 1)
        ->addSeriesColumn('INET', 'APR', 3)
        ->addSeriesColumn('INET', 'MEI', 3)
        ->addSeriesColumn('INET', 'JUN', 1)
        ->addSeriesColumn('INET', 'JUL', 2)
        ->addSeriesColumn('INET', 'AGS', 0)
        ->addSeriesColumn('INET', 'SEP', 1)
        ->addSeriesColumn('INET', 'OKT', 0)
        ->addSeriesColumn('INET', 'NOV', 0)
        ->addSeriesColumn('INET', 'DES', 0)
        
        ->addSeriesColumn('TV&INET', 'JAN', 0)
        ->addSeriesColumn('TV&INET', 'FEB', 0)
        ->addSeriesColumn('TV&INET', 'MAR', 0)
        ->addSeriesColumn('TV&INET', 'APR', 1)
        ->addSeriesColumn('TV&INET', 'MEI', 0)
        ->addSeriesColumn('TV&INET', 'JUN', 0)
        ->addSeriesColumn('TV&INET', 'JUL', 0)
        ->addSeriesColumn('TV&INET', 'AGS', 0)
        ->addSeriesColumn('TV&INET', 'SEP', 0)
        ->addSeriesColumn('TV&INET', 'OKT', 0)
        ->addSeriesColumn('TV&INET', 'NOV', 0)
        ->addSeriesColumn('TV&INET', 'DES', 0);

        return view('livewire.report')->with([
          'dismantleChart' => $dismantleChart
        ]);
    }

    return view('livewire.report');
  }

  public function export() {

  }
}
