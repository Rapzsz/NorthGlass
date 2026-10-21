@extends('layouts.website')
@section('title', $title.' — NorthGlass')

@section('content')
    <section class="container inner-page" aria-label="{{ $title }}">
        <h1 class="listing-title">{{ $title }}</h1>
        <div class="content-grid listing-grid">
            @foreach ($items as $item)
                @include('website.partials.card')
            @endforeach
        </div>
    </section>
@endsection
