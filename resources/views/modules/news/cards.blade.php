<section class="section">
    <div class="container">
        <h2 class="section-title">{{ $seo->h1 }}</h2>
        <div class="card-wrapper">
            @foreach($news as $new)
            <div class="card card--news"><a class="card__link" href="/news/{{ $new->id }}"><img class="card__image lazy" data-src="{{ asset("storage/$new->image") }}" alt="{{ $new->title }}"/></a>
                <div class="card__body">
                    <p class="card__date">{{ (new DateTimeImmutable($new->created_at))->format('d.m.Y') }}</p>
                    <p class="card__title">{{ $new->title }}</p>
                    <p class="card__text">{{ $new->description }}</p>
                    <a class="card__button button" href="/news/{{ $new->id }}">Подробнее</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>