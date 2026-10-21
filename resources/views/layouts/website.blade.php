@php($site = config('ui.site'))
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <title>@yield('title', $site['meta_title'])</title>
    <meta name="description" content="@yield('meta_description', $site['meta_description'])">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="skip-link" href="#main-content">Lewati ke konten</a>
    <header class="site-header">
        <div class="container header-inner">
            <a href="{{ route('home') }}" class="brand-link" aria-label="NorthGlass — Home">
                <x-brand-logo />
            </a>
            <nav id="main-nav" class="main-nav" aria-label="Navigasi utama">
                <a href="{{ route('services.index') }}" @class(['nav-link', 'is-current' => request()->routeIs('services.*')])>Our Services</a>
                <a href="{{ route('products.index') }}" @class(['nav-link', 'is-current' => request()->routeIs('products.*')])>Product</a>
                <a href="{{ route('home') }}#about" class="nav-link">About</a>
                <a href="{{ route('contact.create') }}" @class(['nav-link button nav-button', 'is-current' => request()->routeIs('contact.*')])>Let's Build</a>
            </nav>
        </div>
    </header>
    <main id="main-content" tabindex="-1">
        @yield('content')
    </main>
    <footer id="footer" class="site-footer" tabindex="-1">
        <div class="container">
            <div id="about" class="section-layout footer-about">
                <h2 class="section-label">About Us</h2>
                <p>{{ $site['about_summary'] }}</p>
            </div>
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="{{ route('home') }}" class="brand-link" aria-label="NorthGlass — Home">
                        <x-brand-logo dark />
                    </a>
                    <p>{{ $site['footer_description'] }}</p>
                </div>
                <div class="footer-contact">
                    <h2 class="footer-label">Contact</h2>
                    <a href="mailto:{{ $site['email'] }}">{{ $site['email'] }}</a>
                    <a href="tel:{{ preg_replace('/[^+0-9]/', '', $site['phone']) }}">{{ $site['phone'] }}</a>
                    <p class="footer-address">{{ $site['address'] }}</p>
                    <a href="{{ route('contact.create') }}" class="button button-light button-pill">Let's Make Project <x-arrow /></a>
                </div>
                <div class="footer-social">
                    <h2 class="footer-label">Follow us</h2>
                    <div class="footer-social-icons">
                        @foreach ($site['social_links'] as $platform => $url)
                            <a href="{{ $url }}" target="_blank" rel="noopener noreferrer" aria-label="{{ ucfirst($platform) }}" title="{{ ucfirst($platform) }}">
                                <img src="{{ asset('images/social/'.$platform.'.svg') }}" alt="{{ ucfirst($platform) }}">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <span>© {{ date('Y') }} NorthGlass</span>
                <div class="footer-utility">
                    <button type="button" class="back-to-top" id="back-to-top">Kembali ke atas <span aria-hidden="true">↑</span></button>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
