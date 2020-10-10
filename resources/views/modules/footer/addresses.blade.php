@foreach($items as $item)
    <div class="address-card">
        <p class="address-card__headline">{{ $item->title }}</p><a class="address-card__link">Посмотреть на карте</a>
    </div>
@endforeach