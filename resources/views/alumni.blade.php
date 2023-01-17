@extends('layout.mainlayout')

@section('title', 'Alumni')

@section('content')

<div class="d-sm-flex justify-content-end mb-4">
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-fw fa-plus"></i> Add Data</a>
</div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Fakultas</th>
                        <th>Angkatan</th>
                        <th>No Telpon</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

@endsection