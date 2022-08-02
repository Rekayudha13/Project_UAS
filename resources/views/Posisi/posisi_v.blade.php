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
            <a href="{{ url('posisi/tambah') }}" class="btn btn-primary btn-sm float-right">Tambah</a>
      </div>
      <div class="card-body">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nama Posisi</th>
              <th>Deskripsi</th>
              <th>Gaya Bermain</th>
              <th>Peran</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data['posisi'] as $pss)
                
            <tr>
              <th scope='row'>{{ $loop->iteration }}</th>
              <td>{{ $pss->nama_posisi }}</td>
              <td>{{ $pss->deskripsi }}</td>
              <td>{{ $pss->gaya_bermain }}</td>
              <td>{{ $pss->peran }}</td>

              <td>
                <a href="{{ url('posisi/ubah/', $pss->id) }}" class="btn btn-warning btn-sm">Ubah</a>
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
                    <a href="{{ url('posisi/hapus/'. $pss->id) }}" type="button" class="btn btn-danger">Hapus</a>
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
@endsection
