<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CustomerDetail extends Component {
  
  public $currentTab = 'profil';
  public $id, $alamat, $tanggal_lahir, $no_hp, $telepon_rumah, $email;
  public $nama_customer;
  public $no_ktp;

  public function mount($id) {
    $dataCustomer = Customer::find($id);

    $this->id = $id;
    $this->nama_customer = $dataCustomer->nama_customer;
    $this->no_ktp = $dataCustomer->no_ktp;
    $this->alamat = $dataCustomer->alamat;
    $this->tanggal_lahir = $dataCustomer->tanggal_lahir;
    $this->no_hp = $dataCustomer->no_hp;
    $this->telepon_rumah = $dataCustomer->telepon_rumah;
    $this->email = $dataCustomer->email;
  }

  public function render() {
    return view('livewire.pelanggan-detail');
  }

  public function navigate($tab) {
    $this->currentTab = $tab;
  }

  public function update() {
    $this->validate();
    /*
    $this->validate([
        'nama' => 'required',
        'no_ktp' => 'required',
        'alamat' => 'required',
        'tanggal_lahir' => 'required',
        'no_hp' => 'required',
    ], [
        'nama.required' => 'Nama wajib diisi',
        'no_ktp.required' => 'No KTP wajib diisi',
        'alamat.required' => 'Alamat wajib diisi',
        'tanggal_lahir.required' => 'Tanggal lahir wajib diisi',
        'no_hp.required' => 'No HP wajib diisi',
    ]);
    */
    Customer::where('id', $this->id)->update([
      'nama_customer' => $this->nama_customer,
      'no_ktp' => $this->no_ktp,
      'tanggal_lahir' => $this->tanggal_lahir,
      'no_hp' => $this->no_hp,
      'telepon_rumah' => $this->telepon_rumah,
      'email' => $this->email,
    ]);

    session()->flash('message', 'Pelanggan berhasil diubah');
    return redirect()->route('pelanggan');
  }
}
?>