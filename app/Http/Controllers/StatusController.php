<?php

namespace App\Http\Controllers;

use App\Models\Staf;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        // $data['judul'] = 'Status';
        // $data['subjudul'] = 'Daftar Status';
        $data['status'] = Status::all();
        // return view('Status.status_v', ["data" => $data]);
        return response()->json($data['status']);
    }


    public function tambah()
    {
        $data['judul'] = 'Status';
        $data['subjudul'] = 'Tambah Status';
        return view('Status.tambahStatus_v', ["data" => $data]);
    }

    public function ubah($id)
    {
        $data['judul'] = 'Status';
        $data['subjudul'] = 'Ubah Status';
        $data['status'] = Status::find($id);
        return view('Status.ubahStatus_v', ["data" => $data]);
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            'nama_status' => 'required|unique:statuses,nama_status',
            'rentang_waktu' => 'required',
            'deskripsi' => 'required',
            'pertandingan' => 'required',
        ]);
        $data = Status::create($request->all());
        return response()->json($data);
    }

    public function show(Request $request)
    {
        $data = Status::find($request->id);
        return response()->json($data);
    }

    public function perbaharui(Request $request)
    {
        $status = Status::find($request->id);
        // $status->nama_status = $request->nama_status;
        // $status->rentang_waktu = $request->rentang_waktu;
        // $status->deskripsi = $request->deskripsi;
        // $status->pertandingan = $request->pertandingan;
        // $status->save();

        $status->update([
            'nama_status' => $request->nama_status,
            'rentang_waktu' =>$request->rentang_waktu,
            'deskripsi' => $request->deskripsi,
            'pertandingan' => $request->pertandingan,
        ]);

        $data = Status::where('id', '=', $status->id)->get();
        return response()->json($data);
    }
    public function hapus($id)
    {
        $data = Status::find($id);
        $data->delete();
        return response()->json($data);
    }

}
