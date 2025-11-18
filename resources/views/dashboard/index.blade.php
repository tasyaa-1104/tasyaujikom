@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-3">
        <div class="card-custom">
            <h6>Total Produk</h6>
            <h2>{{ $total_produk }}</h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card-custom">
            <h6>Total Kategori</h6>
            <h2>{{ $total_kategori }}</h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card-custom">
            <h6>Total Pengguna</h6>
            <h2>{{ $total_pengguna }}</h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card-custom">
            <h6>Total Toko</h6>
            <h2>{{ $total_toko }}</h2>
        </div>
    </div>
</div>

@endsection
