<article @class(['content-card', 'service-card' => $kind === 'services'])>
    <a class="card-link" href="{{ route($kind.'.show', $item['slug']) }}" aria-label="Lihat selengkapnya {{ $item['title'] }}">
        @if ($kind === 'services')
            <h3>{{ $item['title'] }}</h3>
        @endif

        @if ($item['image'])
            <div class="card-image">
                <img
                    src="{{ asset('storage/'.$item['image']) }}"
                    alt="{{ $item['title'] }}"
                    loading="lazy"
                    width="700"
                    height="540"
                >
            </div>
        @else
            <div class="card-image card-image-empty" aria-hidden="true"></div>
        @endif

        @if ($kind === 'products')
            <h3 class="product-caption">
                <strong>{{ $item['title'] }}</strong>
                <span class="card-description">
                    - {{ \Illuminate\Support\Str::limit(strip_tags(data_get($item, 'content', '')), 120) }}
                </span>
            </h3>
        @else
            <p>{{ \Illuminate\Support\Str::limit(strip_tags(data_get($item, 'content', '')), 120) }}</p>
        @endif

        <span class="card-more">
            Lihat Selengkapnya <span aria-hidden="true">→</span>
        </span>
    </a>
</article>