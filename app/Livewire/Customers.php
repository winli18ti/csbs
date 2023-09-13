<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Customers extends Component
{
    use WithPagination;
    public $id, $nama, $no_ktp, $alamat, $tanggal_lahir, $no_hp, $telepon_rumah, $email;
    public $mode = 'table';

    public function render() {
        $dataPelanggan = Customer::select('*')->paginate(10);
        return view('livewire.pelanggan', compact('dataPelanggan'));
    }

    public function form() {
        $this->mode = 'create';
    }

    public function create() {
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
        Customer::create([
            'nama' => $this->nama,
            'no_ktp' => $this->no_ktp,
            'alamat' => $this->alamat,
            'tanggal_lahir' => $this->tanggal_lahir,
            'no_hp' => $this->no_hp,
            'telepon_rumah' => $this->telepon_rumah,
            'email' => $this->email
        ]);
        $this->mode = 'table';
    }

    public function edit($id) {
        $dataCustomer = Customer::findOrFail($id);
        $this->id = $id;
        $this->nama = $dataCustomer->nama;
        $this->no_ktp = $dataCustomer->no_ktp;
        $this->alamat = $dataCustomer->alamat;
        $this->tanggal_lahir = $dataCustomer->tanggal_lahir;
        $this->no_hp = $dataCustomer->no_hp;
        $this->telepon_rumah = $dataCustomer->telepon_rumah;
        $this->email = $dataCustomer->email;

        $this->mode = 'edit';
    }

    public function update() {
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
            'nama' => $this->nama,
            'no_ktp' => $this->no_ktp,
            'alamat' => $this->alamat,
            'tanggal_lahir' => $this->tanggal_lahir,
            'no_hp' => $this->no_hp,
            'telepon_rumah' => $this->telepon_rumah,
            'email' => $this->email,
        ]);
        $this->mode = 'table';
    }

    public function delete($id) {
        Customer::delete($id);
    }

    public function back(){
        
    }
}
