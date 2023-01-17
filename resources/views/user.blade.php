@extends('layout.mainlayout')

@section('title', 'User')

@section('content')
<div class="d-sm-flex justify-content-end mb-4">
    <a href="user-add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-fw fa-plus"></i> Add Data</a>
</div>

<div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>Role</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->password }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->role_id }}</td>
                        <td>
                            <a href="#" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-info-circle"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach    
                </tbody>
            </table>
        </div>
    </div>
@endsection