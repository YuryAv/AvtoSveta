<div class="card card--zoom" data-card-tab="{{ $car->tabName }}">
    <a class="card__link" href="{{ url("cars/$car->id-" . \Illuminate\Support\Str::slug($car->name)) }}">
        <div class="card__tags">
            <span class="card__tag tag tag--blue">new</span>
        </div>
        <img class="card__image lazy" data-src="{{ asset('storage/' . $car->imageList[0]) }}" alt="..."/>
    </a>
    </a>
    <ul class="card-slider card__slider" style="">
        @foreach($car->imageList as $image)
            @if ($loop->iteration > 3)
                @break
            @endif
            <li class="card-slider__item">
                <img class="card-slider__image" data-mysrc="{{ asset('storage/' . $image) }}" alt="">
            </li>
        @endforeach
    </ul>
    <div class="card__inner">
        <div class="card__body">
            <h4 class="card__title">{{ $car->name }}</h4>
            <p class="card__price">$ {{ $car->price }}</p>
            <ul class="card-list">
                <li class="card-list__item">
                    <img class="card-list__image" src="{{ asset('storage/icons/chassis.svg') }}" alt="Привод иконка"/>
                    <div class="card-list__text">{{ $car->gear }}</div>
                </li>
                <li class="card-list__item">
                    <img class="card-list__image" src="{{ asset('storage/icons/calendar.svg') }}" alt="Год выпуска иконка"/>
                    <div class="card-list__text">{{ $car->year }}</div>
                </li>
                <li class="card-list__item">
                    <img class="card-list__image" src="{{ asset('storage/icons/speedometer.svg') }}" alt="Пробег иконка"/>
                    <div class="card-list__text">{{ $car->mileage }} км.</div>
                </li>
                <li class="card-list__item">                    
                    <img class="card-list__image" src="{{ asset('storage/icons/gas-station.svg') }}" alt="Тип топлива иконка"/>
                    <div class="card-list__text">{{ $car->fuel }}</div>
                </li>
                <li class="card-list__item">
                    <img class="card-list__image" src="{{ asset('storage/icons/car-engine.svg') }}" alt="Обьем двигателя иконка"/>
                    <div class="card-list__text">{{ $car->capacity }} л.</div>
                </li>
                <li class="card-list__item">
                    <img class="card-list__image" src="{{ asset('storage/icons/group.svg') }}" alt="Количество владельцев"/>
                    <div class="card-list__text">1</div>
                </li>
            </ul>
            <p class="card__text">
                Машина находится на аукционе в США. Указана предполагаемая цена покупки без учета доставки, растаможки и аукционного сбора.
            </p>
            <button class="card__button">Заказать</button>
        </div>
    </div>
</div>