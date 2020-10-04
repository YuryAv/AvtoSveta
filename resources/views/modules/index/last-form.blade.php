<section class="index-selection section">
    <div class="container">
        <h2 class="index-selection__title">{{ $forms[3]->title }}</h2>
        <h4 class="index-selection__subtitle c-bg">{{ $forms[3]->description }}</h4>
        <form class="form index-selection__form form--grid-3" action="{{ route('feedback') }}" method="post">
            @csrf
            <input class="form__input" type="text" name="phone" placeholder="Ваш телефон"/>
            <input class="form__input" type="text" name="name" placeholder="Ваше имя"/>
            <button class="button button--second form__button" type="submit">Отправить</button>
        </form>
    </div>
</section>