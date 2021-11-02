@extends('layouts.index')
@section('title', 'Absensi Pegawai')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card text-center">
            <div class="card-header">
                Absen Masuk
            </div>
            <div class="card-body">
                {{-- <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                <a href="{{ url('/absensi-masuk') }}" class="btn btn-primary">Masuk</a>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card text-center">
            <div class="card-header">
                Absen Keluar
            </div>
            <div class="card-body">
                {{-- <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                <a href="{{ url('/absensi-keluar') }}" class="btn btn-primary">Keluar</a>
            </div>
        </div>
    </div>
</div>
@endsection
