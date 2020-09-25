<section class="index-form section section--small">
    <div class="container">
        <h1 class="index-form__title">Авто из США
            <h2 class="index-form__subtitle">Закажи себе авто из сша с выгодой до -40% от рынка украины</h2>
            <form class="form index-form__form" action="{{ route('feedback') }}" method="post">
                @csrf
                <input class="form__input index-form__input" type="text" name="name" placeholder="Ваше имя"/>
                <input class="form__input index-form__input" type="tel" name="phone" placeholder="Ваш телефон"/>
                <input class="form__input index-form__input" type="text" name="comment" placeholder="Ваш комментарий"/>
                <button class="button button--second form__button index-form__button" type="submit">Отправить</button>
            </form>
            <p class="index-form__label">Специалисты подберут для вас оптимальные варианты в течение 24 часов!</p>
        </h1>
    </div>
</section>