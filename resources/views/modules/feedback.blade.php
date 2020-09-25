<section class="section-form section">
    <div class="container">
        <div class="section-form__inner">
            <h2 class="section-title section-form__title">Обратная связь</h2>
            <p class="paragraph section-form__paragraph">Оставьте Ваше сообщение и контактные данные и наши специалисты свяжутся с Вами в ближайшее рабочее время.</p>
            <form class="form section-form__form" action="{{ route('feedback') }}" method="post">
                @csrf
                <input class="form__input" type="text" name="name" placeholder="Ваше имя"/>
                <input class="form__input" type="tel" name="phone" placeholder="Ваш телефон"/>
                <textarea class="form__input form__textarea" type="text" name="comment" placeholder="Ваш комментарий"></textarea>
                <button class="button button--second form__button" type="submit">Отправить</button>
            </form>
        </div>
    </div>
</section>