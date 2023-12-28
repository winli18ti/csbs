<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Account extends Component
{
  public $id, $name, $email, $oldpassword, $newpassword, $repeatpassword;

  public function mount()
  {
    $this->id = Auth::user()->id;
    $this->name = Auth::user()->name;
    $this->email = Auth::user()->email;
  }

  public function render()
  {
    return view('livewire.account');
  }

  public function update()
  {
    //$this->validateRule();
    User::where('id', $this->id)->update([
      'password' => $this->newpassword, //hashing
    ]);
    session()->flash('message', 'Password berhasil diubah');
  }

  public function validateRule()
  {
    $this->validate([
      'oldpassword' => 'required',
      'newpassword' => 'required|same:repeatpassword',
      'repeatpassword' => 'required',
    ], [
      'oldpassword.required' => 'Password lama wajib diisi',
      'newpassword.required' => 'Password baru wajib diisi',
      'newpassword.same' => 'Password baru wajib sama',
      'repeatpassword.required' => 'Password baru (ulangi) wajib diisi',
    ]);

    if($this->oldpassword !== Auth::user()->password) { //hashing
      $this->addError('oldpassword', 'Password salah');
    }
  }
}

?>