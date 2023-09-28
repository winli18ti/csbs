<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    public $id, $name, $username, $password, $password_confirmation, $role, $status;
    public $mode = 'table';
    public $title = 'User';
    public $filterStatus = '';
    public $filterRole = '';

    public function render()
    {
        $table = User::select('*');
        if (!empty($this->filterStatus)) {
            $table->where(['status' => $this->filterStatus]);
        }
        if (!empty($this->filterRole)) {
            $table->where(['role' => $this->filterRole]);
        }
        $table = $table->paginate(20);
        return view('livewire.users', compact('table'));
    }

    public function navigate($mode) {
        $this->mode = $mode;
    }

    public function add() {
        $this->navigate('add');
        $this->id = null;
        $this->name = null;
        $this->username = null;
        $this->password = null;
        $this->password_confirmation = null;
        $this->role = null;
        $this->status = 'aktif';
    }

    public function create() {
        $this->validateRule();
        User::create([
            'name' => $this->name,
            'username' => $this->username,
            'password' => $this->password,
            'role' => $this->role,
            'status' => $this->status,
        ]);
        session()->flash('message', $this->title.' baru berhasil ditambahkan');
        $this->navigate('table');
    }

    public function edit($id) {
        $this->navigate('edit');
        $data = User::find($id);
        $this->id = $data->id;
        $this->name = $data->name;
        $this->username = $data->username;
        $this->role = $data->role;
        $this->status = $data->status;
    }

    public function update() {
        User::where('id', $this->id)->update([
            'name' => $this->name,
            'username' => $this->username,
            'status' => $this->status,
        ]);
        session()->flash('message', $this->title.' berhasil diubah');
        $this->navigate('table');
    }

    public function login() {
        return view('livewire.users.login');
    }

    public function logout() {

    }

    public function validateRule() {
        $this->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'Nama wajib diisi',
            'username.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);
    }
}
