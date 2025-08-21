<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User; //panggil model User jika diperlukan

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = User::orderBy('id', 'desc')->get(); // Ambil data user dari model User
        $title = "Data User"; // Judul halaman

        return view('user.index', compact('datas', 'title')); // Mengirim data ke view user.index
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all()); // Simpan data user baru ke database
        return redirect()->to('user'); //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = User::find($id); // Ambil data user berdasarkan ID
        $title = "Ubah Pengguna"; // Judul halaman
        return view('user.edit', compact('edit', 'title')); // Mengirim data ke view user.edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        if ($request->password) {
            $data['password'] = Hash::make($request->password); // Enkripsi password jika diisi
        }
        User::where('id', $id)->update($data); // Update data user berdasarkan ID
        return redirect()->to('user'); // Redirect ke halaman user setelah update

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete(); // Hapus data user berdasarkan ID
        return redirect()->to('user'); // Redirect ke halaman user setelah penghapusan
    }
}
