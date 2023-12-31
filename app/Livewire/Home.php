<?php

namespace App\Livewire;

use App\Models\User;
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
    return view('livewire.home');
  }

  public function update()
  {
    User::where('id', Auth::user()->id)->update([
      'notes' => $this->notes,
    ]);
    session()->flash('message', 'Catatan berhasil disimpan');
  }
}
