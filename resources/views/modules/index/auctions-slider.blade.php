<section class="auctions-slider section">
    <div class="container">
        <h2 class="section-title">{{ $texts[0]->title }}</h2>
        {!! $texts[0]->text !!}
        <div class="auctions-slider__inner">
            @foreach($auctions as $auction)
            <div class="slide-wrap">
                <div class="auctions-card">
                    <div class="auctions-card__image-wrap"><img class="auctions-card__image" src="{{ asset("storage/$auction->image") }}" alt="{{ $auction->title }}"/></div>
                    <div class="auctions-card__title">{{ $auction->title }}</div>
                    <div class="auctions-card__text">{{ $auction->text }}</div><a class="auctions-card__button button button--second" href="{{ url("auction/$auction->id") }}">Подробнее</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>