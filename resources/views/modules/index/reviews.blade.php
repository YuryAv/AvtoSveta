<section class="benefits section">
    <div class="container">
        <h2 class="section-title">Отзывы о нашей работе</h2>
        <h3 class="section-subtitle">Отзывы владельцев заказавших Авто из США через компанию AvtoSveta</h3>
        <div class="benefits__row pt-3">
            @foreach($reviews as $review)
            <div class="slide-wrap">
                <div class="benefits-card">
                    <div class="benefits-card__icon">
                        <img class="benefits-card__image" data-lazy="{{ asset("storage/$review->image") }}" alt="{{ $review->name }}"/>
                    </div>
                    <h4 class="benefits-card__title benefits-card__title--short">{{ $review->name }}</h4>
                    <h4 class="benefits-card__title">{{ $review->description }}</h4>
                    <p class="benefits-card__text">{{ $review->text }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>