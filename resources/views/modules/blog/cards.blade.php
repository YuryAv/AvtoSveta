<section class="section">
    <div class="container">
        <h2 class="section-title">{{ $seo->h1  ?? 'Блог' }}</h2>
        <div class="discount-wrapper row">
            @foreach($cards as $card)
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="card mb-4"><a class="card__link" href=""><img class="card__image lazy" data-src="{{ asset('storage/' . $card->preview) }}" alt="..."/></a>
                    <div class="card__body">
                        <p class="card__date">{{ (new DateTimeImmutable($card->created_at))->format('d.m.Y') }}</p>
                        <p class="card__text">{{ $card->title }}</p>
                        <p class="card__text">{!! mb_substr($card->text, 0, 150) . '...' !!}</p></p><a class="button button--second card__button" href="{{ "/blog/$card->id" }}">Подробнее</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $cards->links() }}
    </div>
</section>