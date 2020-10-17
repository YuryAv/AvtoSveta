<section class="top-orders section">
    <div class="container">
        <h2 class="section-title">{{ $texts[5]->title }}</h2>
        <h4 class="section-subtitle">{!! $texts[5]->text !!}</h4>
        <div class="top-orders__inner">
            @foreach($recommendations as $car)
            <div class="slide-wrap">
                <div class="card">
                    <a class="card__link" href="{{ url("cars/$car->id-" . \Illuminate\Support\Str::slug($car->name)) }}">
                        <img class="card__image lazy" src="{{ asset('storage/' . json_decode($car->images)[0]) }}" alt="{{ $car->name }}"/>
                    </a>
                    <div class="card__body">
                        <h4 class="card__title">{{ $car->name }}</h4>
                        <p class="card__price">$ {{ $car->price }}</p>
                        <a class="card__button" href="{{ url("cars/$car->id-" . \Illuminate\Support\Str::slug($car->name)) }}">Заказать</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>