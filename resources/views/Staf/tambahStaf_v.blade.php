@extends('Template.main')

@section('container')
<div class="card">
    <div class="card-header">
      @php
          echo $data['judul'];
      @endphp
      <a href="{{ url('staf') }}" class="btn btn-primary btn-sm float-end">Kembali</a>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('staf.simpan') }}">
        @csrf
        <div class="mb-3">
          <label for="nama_staf" class="form-label">Nama Staf</label>
          <input type="text" class="form-control" name="nama_staf" id="nama_staf" value="{{ old('nama_staf') }}">
          @error('nama_staf')
              <div class="alert alert-danger" role="alert">{{ $message }}</div>
          @enderror
          </div>
          <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="text" class="form-control" name="umur" id="umur" value="{{ old('umur') }}">
            @error('umur')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror
            </div>
          <div class="mb-3">
            <label for="tinggi" class="form-label">Tinggi</label>
            <input type="text" class="form-control" name="tinggi" id="tinggi" value="{{ old('tinggi') }}">
            @error('tinggi')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="berat" class="form-label">Berat</label>
                <input type="text" class="form-control" name="berat" id="berat" value="{{ old('berat') }}">
                @error('berat')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="{{ old('alamat') }}">
                @error('alamat')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                </div>
        
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection