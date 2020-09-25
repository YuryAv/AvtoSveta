<section class="benefits section">
    <div class="container">
        <h3 class="section-title">Выбирайте нас</h3>
        <div class="benefits__row">
            @foreach($benefits as $benefit)
            <div class="slide-wrap">
                <div class="benefits-card">
                    <div class="benefits-card__icon">
                        @svg($benefit->image)
                    </div>
                    <h4 class="benefits-card__title">{{ $benefit->title }}</h4>
                    <p class="benefits-card__text">
                        {{ $benefit->text }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>