<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index()
    {
        $operators = Operator::all();

        return view('operators.index', compact('operators'));
    }

    public function create()
    {
        return view('operators.create');
    }

    public function save(Request $req)
    {
        $data = $req->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required'
        ]);

        Operator::create($data);

        return redirect('operators')->with('success', 'Data Operator berhasil disimpan');
    }

    public function edit($id)
    {
        $operator = Operator::find($id);

        return view('operators.edit', compact('operator'));
    }

    public function update(Request $req, $id)
    {
        $data = $req->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required'
        ]);

        Operator::where('id', $id)->update($data);

        return redirect('operators')->with('success', 'Data Operator berhasil diubah');
    }

    public function destroy($id)
    {
        $operator = Operator::find($id);
        $operator->delete();

        return redirect('operators')->with('success', 'Data Operator behasil dihapus');
    }
}
