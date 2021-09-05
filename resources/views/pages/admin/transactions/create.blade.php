@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Transaksi</h1>
    </div>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('transaction.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="username">
                </div>
                <div class="form-group">
                    <label>No telepon</label>
                    <input type="text" class="form-control" name="no_telepon" placeholder="No Telepon">
                </div>
                <div class="form-group">
                    <label>status</label>
                    <input type="text" class="form-control" name="status" placeholder="Status">
                </div>
                <div class="form-group">
                    <label>Estimasi Waktu</label>
                    <input type="text" class="form-control" name="estimasi_waktu" placeholder="Estimasi Waktu">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->
@endsection
