<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ObatController extends Controller
{
    public function index(Request $request): View
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
        return view('obats.index', compact('obats'));
    }

    public function create(): View
    {
        return view('obats.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'nama' => 'required|max:32',
            'dosis' => 'required|max:126',
            'jenis' => 'required|max:16',
            'efekSamping' => 'required|max:64',
        ]);
        Obat::create([
            'nama' => $request->nama,
            'dosis' => $request->dosis,
            'jenis' => $request->jenis,
            'efek_samping' => $request->efekSamping,
        ]);
        return redirect()->route('obats.create');
    }

    public function edit(string $id): View
    {
        return view('obats.edit', [
            'obat' => Obat::findOrFail($id),
        ]);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $this->validate($request, [
            'nama' => 'required|max:32',
            'dosis' => 'required|max:12',
            'jenis' => 'required|max:16',
            'efekSamping' => 'required|max:64',
        ]);
        Obat::findOrFail($id)->update([
            'nama' => $request->nama,
            'dosis' => $request->dosis,
            'jenis' => $request->jenis,
            'efek_samping' => $request->efekSamping,
        ]);
        return redirect()->route('obats.index');
    }

    public function destroy(string $id): RedirectResponse
    {
        Obat::findOrFail($id)->delete();
        return redirect()->route('obats.index');
    }
}
