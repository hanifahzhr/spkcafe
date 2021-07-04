<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');
    //     $this->middleware('admin');
    // }
    public function user() {
        $user_list = User:all();
        return view ('WEB.user.user', compact('user_list'));
    }

    public function create() {
        return view ('WEB.user.create');
    }

    public function store(Request $request) {
        $data = $request->all();

        $validasi = Validator::make($data, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:100|unique:users',
            'password' => 'required|confirmed|min:6',
            'level'    => 'required|in:admin'
        ]);

        if ($validasi->fails()) {
            return redirect('user/create')
                    ->withInput()
                    ->withErrors($validasi);
        }

        // Hash password.
        $data['password'] = bcrypt($data['password']);

        User::create($data);
        Session::flash('flash_message', 'Data Admin berhasil disimpan.');

        return redirect('user');
    }
    public function show($id) {
        return redirect('user');
    }
    public function edit() {
        $user = User::findOrFail($id);
        return view ('WEB.user.edit', compact('user'));
    }
    public function update($id, Request $request) {
        $user = User::findOrFail($id);
        $data = $request->all();

        $validasi = Validator::make($data, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:100|unique:users,email,' . $data['id'],
            'password' => 'sometimes|nullable|confirmed|min:6',
            'level'    => 'required|in:admin'
        ]);

        if ($validasi->fails()) {
            return redirect("user/$id/edit")
                    ->withErrors($validasi)
                    ->withInput();
        }

        if ($request->filled('password')) {
            // Hash password.
            $data['password'] = bcrypt($data['password']);
        }
        else {
            // Hapus password (password tidak diupdate).
            $data = array_except($data, ['password']);
        }

        $user->update($data);
        Session::flash('flash_message', 'Data user berhasil diupdate.');

        return redirect('user');
    }
    protected function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('flash_message', 'Data user berhasil dihapus.');
        Session::flash('penting', true);
        return redirect('user');
    }
}
