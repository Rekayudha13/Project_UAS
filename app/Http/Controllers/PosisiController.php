<?php

namespace App\Http\Controllers;

use App\Models\Posisi;
use Illuminate\Http\Request;

class PosisiController extends Controller
{
    public function index()
    {
        // $data['judul'] = 'Posisi';
        // $data['subjudul'] = 'Daftar Posisi';
        $data['posisi'] = Posisi::all();
        // return view('Posisi.posisi_v', ["data" => $data]);
        return response()->json($data['posisi']);
    }


    public function tambah()
    {
        $data['judul'] = 'Posisi';
        $data['subjudul'] = 'Tambah Posisi';
        return view('Posisi.tambahPosisi_v', ["data" => $data]);
    }

    public function ubah($id)
    {
        $data['judul'] = 'Posisi';
        $data['subjudul'] = 'Ubah Posisi';
        $data['posisi'] = Posisi::find($id);
        return view('Posisi.ubahPosisi_v', ["data" => $data]);
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            'nama_posisi' => 'required|unique:posisis,nama_posisi',
            'deskripsi' => 'required',
            'gaya_bermain' => 'required',
            'peran' => 'required',
        ]);
        $data = Posisi::create($request->all());
        return response()->json($data);
    }

    public function show(Request $request)
    {
        $data = Posisi::find($request->id);
        return response()->json($data);
    }

    public function perbaharui(Request $request)
    {
        $posisi = posisi::find($request->id);
        // $posisi->nama_posisi = $request->nama_posisi;
        // $posisi->deskripsi = $request->deskripsi;
        // $posisi->gaya_bermain = $request->gaya_bermain;
        // $posisi->peran = $request->peran;
        
        $posisi->update([
            'nama_posisi' => $request->nama_posisi,
            'deskripsi' =>$request->deskripsi,
            'gaya_bermain' => $request->gaya_bermain,
            'peran' => $request->peran,
            
        ]);

        $data = Posisi::where('id', '=', $posisi->id)->get();
        return response()->json($data);
    }

    public function hapus($id)
    {
        $data = Posisi::find($id);
        $data->delete();
        return response()->json($data);
    }

}
