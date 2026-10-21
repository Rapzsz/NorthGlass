@extends('layouts.website')
@section('title', 'Halaman tidak ditemukan — NorthGlass')
@section('content')
    <div class="container inner-page error-page"><span class="eyebrow">404</span><h1>Halaman tidak ditemukan.</h1><a class="button" href="{{ route('home') }}">Kembali ke Home</a></div>
@endsection
