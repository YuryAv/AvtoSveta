<section class="popup" id="popupForm" style="display: none">
    <div class="container popup__container">
        <div class="popup__inner">
            <form class="form popup__form" action="{{ route('feedback') }}" method="POST">
                <h3 class="form__title">Оставьте заявку и наш специалист свяжется с вами для консультации</h3>
                @csrf
                <input class="form__input" type="text" name="name" placeholder="Ваше имя"/>
                <input class="form__input" type="tel" name="phone" placeholder="Ваш телефон"/>
                <textarea class="form__input" name="comment" cols="30" rows="10" type="text" placeholder="Ваш комментарий">Хочу спросить по поводу AUDI Q2 PREMIUM PLUS 2010...</textarea>
                <button class="button button--second form__button" type="submit">Отправить</button>
            </form>
        </div>
    </div>
</section>