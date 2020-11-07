<section class="section">
    <div class="container">
        <div class="index-tabs">
            @foreach($carTabs as $tab)
                <button type="button" data-id="{{$tab->id}}" class="button index-tabs__button">{{ $tab->text }}</button>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="card-wrapper">
            @foreach($cars as $car)
                @include('modules.catalog.card')
            @endforeach
        </div>
    </div>
</section>