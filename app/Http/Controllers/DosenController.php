<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use Illuminate\Contracts\View\View;

class DosenController extends Controller
{
    public function index(): View
    {
        $dosens = Dosen::paginate(10);
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nid' => 'required',
            'dosen_penguji' => 'required',
            'mahasiswa_skripsi' => 'required',
            'judul_skripsi' => 'required',
        ]);

        Dosen::create($request->all());
        return redirect("dosen/create")->with('status', 'Data Mahasiswa Berhasilahkan');
    }

    public function edit(int $id)
    {
        $dosens = Dosen::findorFail($id);
        return view('dosen.edit', compact('dosens'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
            'nid' => 'required',
            'dosen_penguji' => 'required',
            'mahasiswa_skripsi' => 'required',
            'judul_skripsi' => 'required',
        ]);

        Dosen::findorFail($id)->update($request->all());
        return redirect()->back()->with('status', 'Data Dosen Penguji  Berhasil di update');
    }

    public function destroy(int $id)
    {
        $dosens = Dosen::findorFail($id);
        $dosens->delete();
        return redirect()->back()->with('status', 'Data Dosen Penguji Berhasil dihapus');
    }
}
