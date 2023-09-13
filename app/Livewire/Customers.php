<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;

class Customers extends Component
{
    use WithPagination;
    public $id, $alamat, $tanggal_lahir, $no_hp, $telepon_rumah, $email;

    #[Rule('required', message: 'Masukkan nama pelanggan')]
    public $nama_customer;

    #[Rule('required', message: 'Masukkan No KTP')]
    public $no_ktp;

    public $mode = 'table';

    public function render() {
        $dataPelanggan = Customer::select('*')->paginate(10);
        return view('livewire.pelanggan', compact('dataPelanggan'));
    }

    public function form() {
        $this->mode = 'create';
    }

    public function table() {
        $this->mode = 'table';
    }

    public function create() {
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
        Customer::create([
            'nama_customer' => $this->nama_customer,
            'no_ktp' => $this->no_ktp,
            'tanggal_lahir' => $this->tanggal_lahir,
            'no_hp' => $this->no_hp,
            'telepon_rumah' => $this->telepon_rumah,
            'email' => $this->email
        ]);
        
        session()->flash('message', 'Pelanggan baru berhasil ditambah');

        $this->mode = 'table';
    }
}
