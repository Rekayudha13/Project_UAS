<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use App\Models\Posisi;
use App\Models\Staf;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemainController extends Controller
{
    public function index()
    {
        // $data['judul'] = 'Pemain';
        // $data['subjudul'] = 'Daftar Pemain';
        $data['pemain'] = DB::Table('Pemains')->join('posisis', 'posisis.id', '=', 'pemains.posisi_id')->join('stafs', 'stafs.id', '=', 'pemains.staf_id')->join('statuses', 'statuses.id', '=', 'pemains.status_id')->get();
        // return view('Pemain.pemain_v', ["data" => $data]);
        // dd($data['pemain']);
        return response()->json($data['pemain']);
    }


    public function tambah()
    {
        $data['judul'] = 'Pemain';
        $data['subjudul'] = 'Tambah Pemain';
        $data['status']=Status::all();
        $data['staf']=Staf::all();
        $data['posisi']=Posisi::all();
        return view('Pemain.tambahPemain_v', ["data" => $data]);
    }

    public function ubah($id)
    {
        $data['judul'] = 'Pemain';
        $data['subjudul'] = 'Ubah Pemain';
        $data['pemain'] = Pemain::find($id);
        return view('Pemain.ubahPemain_v', ["data" => $data]);
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            'nama_pemain' => 'required|unique:pemains,nama_pemain',
            'umur' => 'required',
            'tinggi' => 'required',
            'berat' => 'required',
            'ukuran_sepatu' => 'required',
            'alamat' => 'required',
            'posisi_id' => 'required',
            'status_id' => 'required',
            'staf_id' => 'required',
        ]);

        $pemain = new Pemain;
        $pemain->nama_pemain = $request->nama_pemain;
        $pemain->umur = $request->umur;
        $pemain->tinggi = $request->tinggi;
        $pemain->berat = $request->berat;
        $pemain->ukuran_sepatu = $request->ukuran_sepatu;
        $pemain->alamat = $request->alamat;
        $pemain->posisi_id = $request->posisi_id;
        $pemain->status_id = $request->status_id;
        $pemain->staf_id = $request->staf_id;

        
        $pemain->save();
        $data = Pemain::where('id', '=', $pemain->id)->get();
        return response()->json($data);
    }

    public function show(Request $request)
    {
        $data = Pemain::find($request->id);
        return response()->json($data);
    }

    public function perbaharui(Request $request)
    {
        $pemain = Pemain::find($request->id);
        $pemain->nama_pemain = $request->nama_pemain;
        $pemain->umur = $request->umur;
        $pemain->berat = $request->berat;
        $pemain->ukuran_sepatu = $request->ukuran_sepatu;
        $pemain->alamat = $request->alamat;
        $pemain->posisi_id = $request->posisi;
        $pemain->status_id = $request->status;
        $pemain->staf_id = $request->staf;
        $pemain->save();
        return redirect('pemain');
    }

    public function hapus($id)
    {
        $data = Pemain::find($id);
        $data->delete();
        return response()->json($data);

    }

}

