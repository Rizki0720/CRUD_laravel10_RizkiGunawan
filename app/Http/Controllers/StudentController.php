<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = Students::paginate(10);
        return view('Student_Skripsi.index', compact('students'));
    }

    public function create()
    {
        return view('Student_Skripsi.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nim_mahasiswa' => 'required',
            'angkatan_mahasiswa' => 'required',
            'judul_mahasiswa' => 'required',
            'prodi_mahasiswa' => 'required',
            'pembimbing_mahasiswa' => 'required',
        ]);

        Students::create($request->all());
        return redirect("/students")->with('success', 'Data Mahasiswa Berhasilahkan');
    }

    public function edit(int $id)
    {
        $students = Students::findorFail($id);
        return view('Student_Skripsi.edit', compact('students'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
            'nim_mahasiswa' => 'required',
            'angkatan_mahasiswa' => 'required',
            'judul_mahasiswa' => 'required',
            'prodi_mahasiswa' => 'required',
            'pembimbing_mahasiswa' => 'required',
        ]);

        Students::findorFail($id)->update($request->all());
        return redirect()->back()->with('status', 'Data Mahasiswa Berhasil diupdate');
    }

    public function destroy(int $id)
    {
        $students = Students::findorFail($id);
        $students->delete();
        return redirect()->back()->with('status', 'Data Mahasiswa Berhasil dihapus');
    }
}