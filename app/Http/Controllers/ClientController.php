<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluhan;
use App\Models\Pelanggan;
use App\Models\InformasiObat;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $uname): View
    {
        $pelanggan = Pelanggan::where('username', $uname)->first();

        if($pelanggan) {
            session()->put('role', 'pelanggan');
            session()->put('uname', $uname);
        }

        return view('clients.index', [
            'pelanggan' => $pelanggan,
            'keluhans' => Keluhan::where('pelanggan_id', $pelanggan->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        return view('clients.show', [
            'keluhan' => Keluhan::where('id', $id)->with('pelanggan','ttk')->first(),
            'informasiObats' => InformasiObat::where('keluhan_id', $id)->with('obat')->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function guide(): View
    {
        return view('clients.guide');
    }
}
