@extends('layouts.website')

@section('title', $item['title'].' — NorthGlass')
@section('meta_description', \Illuminate\Support\Str::limit(strip_tags(data_get($item, 'content', '')), 150))

@section('content')
    <article class="container inner-page detail-page">
        <a class="text-link" href="{{ route($kind.'.index') }}">
            ← {{ $kind === 'services' ? 'Our Services' : 'Product' }}
        </a>

        <h1>{{ $item['title'] }}</h1>

        @if ($item['image'])
            <img
                class="page-image"
                src="{{ asset('storage/'.$item['image']) }}"
                alt="{{ $item['title'] }}"
            >
        @endif

        <div class="prose">
            <p>{{ $item['content'] }}</p>
        </div>

        <div class="detail-actions">
            <a class="button" href="{{ route('contact.create') }}">
                Let's Build <x-arrow />
            </a>
        </div>
    </article>
@endsection