@extends('Template.main')

@section('container')
<div class="card">
    <div class="card-header">
      @php
          echo $data['judul'];
      @endphp
      <a href="{{ url('status') }}" class="btn btn-primary btn-sm float-end">Kembali</a>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('status.simpan') }}">
        @csrf
        <div class="mb-3">
          <label for="nama_status" class="form-label">Nama Status</label>
          <input type="text" class="form-control" name="nama_status" id="nama_status" value="{{ old('nama_status') }}">
          @error('nama_status')
              <div class="alert alert-danger" role="alert">{{ $message }}</div>
          @enderror
          </div>
          <div class="mb-3">
            <label for="rentang_waktu" class="form-label">Rentang Waktu</label>
            <input type="text" class="form-control" name="rentang_waktu" id="rentang_waktu" value="{{ old('rentang_waktu') }}">
            @error('rentang_waktu')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror
            </div>
          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="{{ old('deskripsi') }}">
            @error('deskripsi')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="pertandingan" class="form-label">Pertandingan</label>
                <input type="text" class="form-control" name="pertandingan" id="pertandingan" value="{{ old('pertandingan') }}">
                @error('pertandingan')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection