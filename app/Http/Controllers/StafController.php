<?php

namespace App\Http\Controllers;

use App\Models\Staf;
use Illuminate\Http\Request;

class StafController extends Controller
{
    public function index()
    {
        // $data['judul'] = 'Staf';
        // $data['subjudul'] = 'Daftar Staf';
        $data['staf'] = Staf::all();
        // return view('Staf.staf_v', ["data" => $data]);
        return response()->json($data['staf']);
    }


    public function tambah()
    {
        $data['judul'] = 'Staf';
        $data['subjudul'] = 'Tambah Staf';
        return view('Staf.tambahStaf_v', ["data" => $data]);
    }

    public function ubah($id)
    {
        $data['judul'] = 'Staf';
        $data['subjudul'] = 'Ubah Staf';
        $data['staf'] = Staf::find($id);
        return view('Staf.ubahStaf_v', ["data" => $data]);
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            // 'nama_staf' => 'required|unique:stafs,nama_staf',
            'umur' => 'required',
            'tinggi' => 'required',
            'berat' => 'required',
            'alamat' => 'required',
        ]);
        $data = Staf::create($request->all());
        return response()->json($data);
    }

    public function show(Request $request)
    {
        $data = Staf::find($request->id);
        return response()->json($data);
    }

    public function perbaharui(Request $request)
    {
        $staf = Staf::find($request->id);
        // $staf->nama_staf = $request->nama;
        // $staf->umur = $request->umur;
        // $staf->tinggi = $request->tinggi;
        // $staf->berat = $request->berat;
        // $staf->alamat = $request->alamat;


        $staf->update([
            'nama_staf' => $request->nama_staf,
            'umur' =>$request->umur,
            'tinggi' => $request->tinggi,
            'berat' => $request->berat,
            'alamat' => $request->alamat,
        ]);

        $data = Staf::where('id', '=', $staf->id)->get();
        return response()->json($data);
    }
    public function hapus($id)
    {
        $data = Staf::find($id);
        $data->delete();
        return response()->json($data);
    }

}
