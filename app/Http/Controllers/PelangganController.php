<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PelangganController extends Controller
{
    public function index(Request $request): View
    {
        $value = $request->input('searchPelanggan');
        if ($value) {
            $pelanggans = Pelanggan::where('username', 'LIKE', "%$value%")
                ->orWhere('nama_lengkap', 'LIKE', "%$value%")
                ->orWhere('alamat', 'LIKE', "%$value%")
                ->orWhere('umur', 'LIKE', "%$value%")
                ->orWhere('jenis_kelamin', 'LIKE', "%$value%")
                ->latest()
                ->get();
        } else {
            $pelanggans = Pelanggan::latest()->get();
        }
        return view('pelanggans.index', compact('pelanggans'));
    }

    public function create(): View
    {
        return view('pelanggans.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'username' => 'required|max:16',
            'namaLengkap' => 'required|max:32',
            'alamat' => 'required|max:64',
            'umur' => 'required|max:2',
            'jenisKelamin' => 'required|max:12',
        ]);
        Pelanggan::create([
            'username' => $request->username,
            'nama_lengkap' => $request->namaLengkap,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenisKelamin,
        ]);
        return redirect()->route('pelanggans.create');
    }

    public function edit(string $id): View
    {
        return view('pelanggans.edit', [
            'pelanggan' => Pelanggan::findOrFail($id),
        ]);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $this->validate($request, [
            'username' => 'required|max:16',
            'namaLengkap' => 'required|max:32',
            'alamat' => 'required|max:64',
            'umur' => 'required|max:2',
            'jenisKelamin' => 'required|max:12',
        ]);
        Pelanggan::findOrFail($id)->update([
            'username' => $request->username,
            'nama_lengkap' => $request->namaLengkap,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenisKelamin,
        ]);
        return redirect()->route('pelanggans.index');
    }

    public function destroy(String $id): RedirectResponse
    {
        Pelanggan::findOrFail($id)->delete();
        return redirect()->route('pelanggans.index');
    }
}
