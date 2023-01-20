<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function save(Request $req)
    {
        $data = $req->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'foto' => 'mimes:jpg,png'
        ]);

        if ($req->file('foto')) {
            $path_foto = $req->foto->store('public/foto_siswa');
        } else {
            $path_foto = "public/foto_siswa/default.jpg";
        }

        $data['foto'] = str_replace("public/foto_siswa", "", $path_foto);

        Student::create($data);

        return redirect('students')->with('success', 'Data Siswa berhasil di buat');
    }

    public function edit($id)
    {
        $student = Student::find($id);

        return view('students.edit', compact('student'));
    }

    public function update(Request $req, $id)
    {
        $data = $req->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'foto' => 'mimes:jpg,png'
        ]);

        if ($req->file('foto')) {
            $path_foto = $req->foto->store('public/foto_siswa');
        } else {
            $path_foto = "public/foto_siswa/default.jpg";
        }

        $data['foto'] = str_replace("public/foto_siswa", "", $path_foto);

        Student::where('id', $id)->update($data);

        return redirect('students')->with('success', 'Data Siswa berhasil di ubah');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('students')->with('success', 'Data Siswa berhasil di hapus');
    }
}
