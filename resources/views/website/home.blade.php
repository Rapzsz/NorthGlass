@extends('layouts.website')

@section('content')
    @php($site = config('ui.site'))
    <section class="hero" aria-labelledby="hero-title">
        <div class="container hero-inner">
            <div class="hero-copy">
                <h1 id="hero-title">Solusi Digital<br>Untuk Bisnis Yang<br>Terus Maju</h1>
                <p>Kami menghadirkan solusi digital yang praktis, mulai dari website dan aplikasi hingga sistem otomatisasi, layanan cloud, dan keamanan digital.</p>
                <a class="button hero-button" href="#footer">Jelajahi <x-arrow class="arrow-down" /></a>
            </div>
            <div class="hero-visual">
                <img src="{{ asset('images/hero-northglass.png') }}" alt="Ilustrasi solusi digital NorthGlass" width="1561" height="1007" fetchpriority="high">
            </div>
        </div>
    </section>
    <section class="content-section services-section" aria-labelledby="services-heading">
        <div class="container section-layout">
            <h2 id="services-heading" class="section-label">{{ $site['services_heading'] }}</h2>
            <div class="content-grid">
                @foreach ($services as $item)
                    @include('website.partials.card', ['kind' => 'services'])
                @endforeach
            </div>
        </div>
    </section>
    <section class="content-section products-section" aria-labelledby="products-heading">
        <div class="container section-layout">
            <h2 id="products-heading" class="section-label">{{ $site['products_heading'] }}</h2>
            <div>
                <p class="section-intro">{{ $site['products_intro'] }}</p>
                <div class="content-grid">
                    @foreach ($products as $item)
                        @include('website.partials.card', ['kind' => 'products'])
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
