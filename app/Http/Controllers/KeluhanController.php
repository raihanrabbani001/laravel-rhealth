<?php

namespace App\Http\Controllers;

use App\Models\InformasiObat;
use App\Models\Keluhan;
use App\Models\Obat;
use App\Models\Pelanggan;
use App\Models\Ttk;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KeluhanController extends Controller
{
    public function index(Request $request): View
    {
        $value = $request->input('searchKeluhan');
        if ($value) {
            $keluhans = Keluhan::latest()
                ->where(function ($query) use ($value) {
                    $query->whereHas('pelanggan', function ($query) use ($value) {
                        $query->where('username', 'LIKE', "%$value%")
                            ->orWhere('nama_lengkap', 'LIKE', "%$value%")
                            ->orWhere('alamat', 'LIKE', "%$value%")
                            ->orWhere('umur', 'LIKE', "%$value%")
                            ->orWhere('jenis_kelamin', 'LIKE', "%$value%");
                    });
                })
                ->with('pelanggan')
                ->get();
        } else {
            $keluhans = Keluhan::latest()->with('pelanggan')->get();
        }
        return view('keluhans.index', compact('keluhans'));
    }

    public function create(): View
    {
        $ttks = Ttk::latest()->get();
        return view('keluhans.create', compact('ttks'));
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'keluhan' => 'required|max:255',
            'diagnosa' => 'required|max:255',
            'saran' => 'required|max:255',
        ]);
        $keluhan = new Keluhan([
            'pelanggan_id' => session('idPelanggan'),
            'ttk_id' => $request->penanggungJawab,
            'keluhan' => $request->keluhan,
            'diagnosa' => $request->diagnosa,
            'saran' => $request->saran,
        ]);
        $keluhan->save();
        session()->put('idKeluhan', $keluhan->id);
        return redirect()->route('keluhans.create.add');
    }

    public function show(string $id): View
    {
        return view('keluhans.show', [
            'keluhan' => Keluhan::where('id', $id)->with('pelanggan','ttk')->first(),
            'informasiObats' => InformasiObat::where('keluhan_id', $id)->with('obat')->get(),
        ]);
    }

    public function edit(string $id): View
    {
        return view('keluhans.edit', [
            'keluhan' => Keluhan::findOrFail($id),
        ]);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $this->validate($request, [
            'idPelanggan' => 'required',
            'idTtk' => 'required',
            'keluhan' => 'required|max:255',
            'diagnosa' => 'required|max:255',
            'saran' => 'required|max:255',
        ]);
        keluhan::findOrFail($id)->update([
            'pelanggan_id' => $request->idPelanggan,
            'tenaga_teknis_kefarmasian_id' => $request->idTtk,
            'keluhan' => $request->keluhan,
            'diagnosa' => $request->diagnosa,
            'saran' => $request->saran,
        ]);
        return redirect()->route('keluhans.index');
    }

    public function destroy(String $id): RedirectResponse
    {
        keluhan::findOrFail($id)->delete();
        return redirect()->route('keluhans.index');
    }

    public function pickPelanggan(Request $request): View
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
        return view('keluhans.pick',  compact('pelanggans'));
    }

    public function addObat(Request $request): View
    {
        $value = $request->input('searchObat');
        if ($value) {
            $obats = Obat::where('nama', 'LIKE', "%$value%")
                ->orWhere('dosis', 'LIKE', "%$value%")
                ->orWhere('jenis', 'LIKE', "%$value%")
                ->orWhere('efek_samping', 'LIKE', "%$value%")
                ->latest()
                ->get();
        } else {
            $obats = Obat::latest()->get();
        }
        $informasiObats = InformasiObat::where('keluhan_id', session('idKeluhan'))->with('obat')->get();
        return view('keluhans.add',  compact('obats', 'informasiObats'));
    }

    public function setPelanggan(Request $request, string $id): View
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $request->session()->put('idPelanggan', $id);
        $request->session()->put('namaPelanggan', $pelanggan->nama_lengkap);
        $ttks = Ttk::latest()->get();
        return view('keluhans.create', compact('pelanggan', 'ttks'));
    }

    public function addListObat(string $id): RedirectResponse
    {
        InformasiObat::firstOrCreate([
            'keluhan_id' => session('idKeluhan'),
            'obat_id' => $id,
        ], ['dosis_penggunaan' => '']);
        return redirect()->route('keluhans.create.add');
    }

    public function updateListObat(Request $request): RedirectResponse
    {
        $informasiObatIds = $request->input('informasiObatId', []);
        $dosisPenggunaan = $request->input('dosisPenggunaan', []);
        foreach ($informasiObatIds as $index => $informasiObatId) {
            $informasiObat = InformasiObat::findOrFail($informasiObatId);
            $informasiObat->update([
                'dosis_penggunaan' => $dosisPenggunaan[$index],
            ]);
        }
        return redirect()->route('keluhans.index');
    }
}
