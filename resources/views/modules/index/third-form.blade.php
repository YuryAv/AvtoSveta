<section class="index-selection section">
    <div class="container">
        <h2 class="index-selection__title">{{ $forms[2]->title }}</h2>
        <form class="form index-selection__form form--grid-3" action="{{ route('feedback') }}" method="post">
            @csrf
            <input class="form__input" type="text" name="phone" placeholder="Ваш город"/>
            <input class="form__input" type="text" name="name" placeholder="Ваше имя"/>
            <button class="button button--second form__button" type="submit">Отправить</button>
        </form>
    </div>
</section>