@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Transaksi</h1>
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
            <form action="{{route('transaction.update', $item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="username"
                        value="{{ $item->username }}">
                </div>
                <div class="form-group">
                    <label>No telepon</label>
                    <input type="text" class="form-control" name="no_telepon" placeholder="No Telepon"
                        value="{{ $item->no_telepon }}">
                </div>
                <div class="form-group">
                    <label>status</label>
                    <input type="text" class="form-control" name="status" placeholder="Status"
                        value="{{ $item->status }}">
                </div>
                <div class="form-group">
                    <label>Estimasi Waktu</label>
                    <input type="text" class="form-control" name="estimasi_waktu" placeholder="Estimasi Waktu"
                        value="{{ $item->estimasi_waktu }}">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Perbarui</button>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->
@endsection
