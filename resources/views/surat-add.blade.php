@extends('layout.mainlayout')

@section('title', 'Add Surat')

@section('page-name', 'Add Surat')

@section('content')

<div class="col-lg-8">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow my-4">
        <div class="card-header-py-3">
            <h6 class="m-0 font-weight-bold text-promary">Add Surat</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <form action="surat-add" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surat_code" class="col-sm-2 col-form-label">Surat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection