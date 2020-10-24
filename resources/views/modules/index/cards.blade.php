<section class="section">
    <div class="container">
        <form class="index-tabs">
            @foreach($carTabs as $tab)
                <label class="index-tabs__label" for="index-tabs{{ $loop->iteration }}">
                    <input data-tab="{{ $tab->name }}"
                           class="index-tabs__input"
                           id="index-tabs{{ $loop->iteration }}"
                           type="radio" name="index-tabs"
                           @if($loop->iteration === 1) checked="checked" @endif/>
                    <span class="button index-tabs__button">{{ $tab->text }}</span>
                </label>
            @endforeach
        </form>
    </div>
    <div class="container">
        <div class="card-wrapper">
            @foreach($cars as $car)
                @include('modules.catalog.card')
            @endforeach
        </div>
    </div>
</section>