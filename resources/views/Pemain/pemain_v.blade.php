@extends('Template.main')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{ $data['judul'] }}</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

  <!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">{{ $data['subjudul'] }}</h3>
        <a href="{{ url('pemain/tambah') }}" class="btn btn-primary btn-sm float-right">Tambah</a>
      </div>
      <div class="card-body">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pemain</th>
              <th>Umur</th>
              <th>Tinggi</th>
              <th>Berat</th>
              <th>Ukuran Sepatu</th>
              <th>Alamat</th>
              <th>Posisi</th>
              <th>Status</th>
              <th>Staf</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data['pemain'] as $pmn)
                
            <tr>
              <th scope='row'>{{ $loop->iteration }}</th>
              <td>{{ $pmn->nama_pemain }}</td>
              <td>{{ $pmn->umur }}</td>
              <td>{{ $pmn->tinggi }}</td>
              <td>{{ $pmn->berat }}</td>
              <td>{{ $pmn->ukuran_sepatu }}</td>
              <td>{{ $pmn->alamat }}</td>
              <td>{{ $pmn->nama_posisi }}</td>
              <td>{{ $pmn->nama_status }}</td>
              <td>{{ $pmn->nama_staf }}</td>
              <td>
                <a href="{{ url('pemain/ubah/', $pmn->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Hapus</button>
              </td>
            </tr>
             <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Hapus ?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Yakin ingin hapus data ?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  <a href="{{ url('pemain/hapus/'. $pmn->id) }}" type="button" class="btn btn-danger">Hapus</a>
                </div>
                </div>
              </div>
            </div>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->

    </div>
    <!-- /.card -->

</section>
  <!-- /.content -->
@endsection