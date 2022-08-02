@extends('Template.main')

@section('container')
<div class="card">
    <div class="card-header">
      @php
          echo $data['judul'];
      @endphp
      <a href="{{ url('pemain') }}" class="btn btn-primary btn-sm float-end">Kembali</a>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('pemain.simpan') }}">
        @csrf
        <div class="mb-3">
          <label for="nama_pemain" class="form-label">Nama Pemain</label>
          <input type="text" class="form-control" name="nama_pemain" id="nama_pemain" value="{{ old('nama_pemain') }}">
          @error('nama_pemain')
              <div class="alert alert-danger" role="alert">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="umur" class="form-label">Umur</label>
          <input type="number" name="umur" class="form-control" id="umur" value="{{ old('umur') }}">
          @error('umur')
              <div class="alert alert-danger" role="alert">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="tinggi" class="form-label">Tinggi</label>
          <input type="number" name="tinggi" class="form-control" id="tinggi" value="{{ old('tinggi') }}">
          @error('tinggi')
              <div class="alert alert-sm alert-danger" role="alert">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="berat" class="form-label">Berat</label>
            <input type="number" name="berat" class="form-control" id="berat" value="{{ old('berat') }}">
            @error('berat')
                <div class="alert alert-sm alert-danger" role="alert">{{ $message }}</div>
            @enderror
          </div><div class="mb-3">
            <label for="ukuran_sepatu" class="form-label">Ukuran Sepatu</label>
            <input type="number" name="ukuran_sepatu" class="form-control" id="ukuran_sepatu" value="{{ old('ukuran_sepatu') }}">
            @error('ukuran_sepatu')
                <div class="alert alert-sm alert-danger" role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" value="{{ old('alamat') }}">
            @error('alamat')
                <div class="alert alert-sm alert-danger" role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="posisi" class="form-label">Posisi</label>
            <select class="custom-select " name="posisi" id="posisi">
              <option value="">Pilih</option>
              @foreach ($data['posisi'] as $pss)
              @if (old('posisi') == $pss->id)
              <option value="{{ $pss->id }}" selected>{{ $pss->nama_posisi }}</option>              
              @else
              <option value="{{ $pss->id }}">{{ $pss->nama_posisi }}</option>              
              @endif
              @endforeach
            </select>
            @error('posisi')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="custom-select " name="status" id="status">
              <option value="">Pilih</option>
              @foreach ($data['status'] as $sts)
              @if (old('status') == $sts->id)
              <option value="{{ $sts->id }}" selected>{{ $sts->nama_status }}</option>              
              @else
              <option value="{{ $sts->id }}">{{ $sts->nama_status }}</option>              
              @endif
              @endforeach
            </select>
            @error('status')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="staf" class="form-label">Staf</label>
            <select class="custom-select " name="staf" id="staf">
              <option value="">Pilih</option>
              @foreach ($data['staf'] as $stf)
              @if (old('staf') == $stf->id)
              <option value="{{ $stf->id }}" selected>{{ $stf->nama_staf }}</option>              
              @else
              <option value="{{ $stf->id }}">{{ $stf->nama_staf }}</option>              
              @endif
              @endforeach
            </select>
            @error('staf')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror
          </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection