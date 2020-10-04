<section class="index-selection section">
    <div class="container">
        <h3 class="index-selection__title">{{ $forms[1]->title }}</h3>
        <form class="form index-selection__form form--grid-3" action="{{ route('feedback') }}" method="post">
            @csrf
            <input type="text" name="parameters" value="1" hidden>
            <select class="form__input form__input--border" id="exampleFormControlSelect1" name="type" placeholder="Тип транспорта">
                <option value="-">-</option>
                <option value="Седан">Седан</option>
                <option value="Хэтчбек">Хэтчбек</option>
                <option value="Кроссовер">Кроссовер</option>
                <option value="Купе">Купе</option>
                <option value="Минивен">Минивен</option>
                <option value="Пикап">Пикап</option>
                <option value="Мотоцикл">Мотоцикл</option>
                <option value="Квадроцикл">Квадроцикл</option>
                <option value="Багги">Багги</option>
                <option value="Водный транспорт">Водный транспорт</option>
                <option value="Спец техника">Спец техника</option>
            </select>
            <select class="form__input form__input--border" id="exampleFormControlSelect1" name="year_from" placeholder="Год от">
                <option value="-">-</option>
                <option value="до 2008">до 2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
            </select>
            <select class="form__input form__input--border" id="exampleFormControlSelect1" name="year_to" placeholder="Год до">
                <option value="-">-</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
            </select>
            <select class="form__input form__input--border" id="exampleFormControlSelect1" name="price" placeholder="Стоимость">
                <option value="-">-</option>
                <option value="до 2008">до 7000$</option>
                <option value="от 7000$ до 10 000$">от 7000$ до 10 000$</option>
                <option value="2010">от 10 000$ до 15 000$</option>
                <option value="от 10 000$ до 15 000$">от 15 000$ до 20 000$</option>
                <option value="от 20 000$ до 25 000$">от 20 000$ до 25 000$</option>
                <option value="от 25 000$ до 30 000$">от 25 000$ до 30 000$</option>
                <option value="от 30 000$ до 35 000$">от 30 000$ до 35 000$</option>
                <option value="от 35 000$ до 40 000$">от 35 000$ до 40 000$</option>
                <option value="от 40 000$ до 45 000$">от 40 000$ до 45 000$</option>
                <option value="от 45 000$ до 50 000$">от 45 000$ до 50 000$</option>
                <option value="свыше 50 000$">свыше 50 000$</option>
            </select>
            <input class="form__input" type="text" name="name" placeholder="Ваше имя"/>
            <input class="form__input" type="tel" name="phone" placeholder="Ваш телефон"/>
            <button class="button button--second form__button" type="submit">Отправить</button>
        </form>
    </div>
</section>