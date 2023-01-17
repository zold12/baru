@extends('layout.mainlayout')

@section('title', 'Surat')

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
                        <th>Name</th>
                        <th>Surat</th>
                        <th>Jenis Surat</th>
                        <th>Tanggal Masuk</th>
                        <th>Status</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mahasiswa</td>
                        <td>Surat Acara mahasiswa</td>
                        <td>Surat Ijin Kegiatan</td>
                        <td>2011/04/25</td>
                        <td>approve</td>
                        <td>
                            <a href="#" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-info-circle"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection