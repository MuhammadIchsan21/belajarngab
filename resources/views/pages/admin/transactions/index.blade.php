@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Transaksi</h1>
                <a href="{{route('transaction.create')}}" class="btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>No Telepon</td>
                            <td>Waktu estimasi</td>
                            <td>Status</td>
                            <td>tombol start</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @forelse($items as $item)
                            <td>{{$item->id}}</td>
                            <td>{{$item->username}}</td>
                            <td>{{$item->no_telepon}}</td>
                            <td id="demo">{{$item->estimasi_waktu}}</td>
                            <td>{{$item->status}}</td>
                            <td>
                                <button class="btn btn-primary" id="timer">
                                    <button onclick="clock(); document.getElementById('demo').innerHTML='5';">Start
                                    </button>
                                    <button onclick="clearInterval(myTimer);">Stop </button>
                                </button>
                            </td>
                            <td>
                                <a href="{{route('transaction.edit', $item->id)}}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{route('transaction.destroy', $item->id)}}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    var myTimer;
    function clock() {
    myTimer = setInterval(myClock, 1000);
    var c = 5;

    function myClock() {
    document.getElementById("demo").innerHTML = --c;
    if (c == 0) {
    clearInterval(myTimer);
    alert("Reached zero");
    }
    }
    }
</script>
@endsection
