@extends('Template.main')

@section('container')
<div class="card">
    <div class="card-header">
      @php
          echo $data['judul'];
      @endphp
      <a href="{{ url('posisi') }}" class="btn btn-primary btn-sm float-end">Kembali</a>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('posisi.simpan') }}">
        @csrf
        <div class="mb-3">
          <label for="nama_posisi" class="form-label">Nama Posisi</label>
          <input type="text" class="form-control" name="nama_posisi" id="nama_posisi" value="{{ old('nama_posisi') }}">
          @error('nama_posisi')
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
            <label for="gaya_bermain" class="form-label">Gaya Bermain</label>
            <input type="text" class="form-control" name="gaya_bermain" id="gaya_bermain" value="{{ old('gaya_bermain') }}">
            @error('gaya_bermain')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="peran" class="form-label">Peran</label>
                <input type="text" class="form-control" name="peran" id="peran" value="{{ old('peran') }}">
                @error('peran')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                </div>
        
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection