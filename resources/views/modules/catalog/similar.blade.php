
<section class="similar-row section">
  <div class="container">
    <h2 class="section-title similar-row__title">Также ищут</h2>
    <div class="similar-row__inner">
      @foreach($recommendations as $car)
      <div class="slide-wrap">
        <div class="similar-row__item">
          <div class="card">
            <a class="card__link" href="{{ url("cars/$car->id-" . \Illuminate\Support\Str::slug($car->name)) }}">
              <img class="card__image lazy" data-src="{{ asset('storage/' . json_decode($car->images)[0]) }}" alt="{{ $car->name }}"/>
            </a>
            <div class="card__body">
              <h4 class="card__title">{{ $car->name }}</h4><a class="card__button" href="{{ url("cars/$car->id-" . \Illuminate\Support\Str::slug($car->name)) }}">Подробнее</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>