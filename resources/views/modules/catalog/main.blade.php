<main class="section">
    <div class="container">
        <h2 class="section-title">Каталог</h2>
        <div class="row">
            <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                <aside class="sidebar">
                    <div class="filter">
                        <div class="filter__label">
                            <p class="filter__headline">Открыть фильтр</p>
                            <div class="filter__icon"><svg id="Capa_1" enable-background="new 0 0 512 512" height="512"
                                    viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="m432.733 112.467h-228.461c-6.281-18.655-23.926-32.133-44.672-32.133s-38.391 13.478-44.672 32.133h-35.661c-8.284 0-15 6.716-15 15s6.716 15 15 15h35.662c6.281 18.655 23.926 32.133 44.672 32.133s38.391-13.478 44.672-32.133h228.461c8.284 0 15-6.716 15-15s-6.716-15-15.001-15zm-273.133 32.133c-9.447 0-17.133-7.686-17.133-17.133s7.686-17.133 17.133-17.133 17.133 7.686 17.133 17.133-7.686 17.133-17.133 17.133z" />
                                        <path
                                            d="m432.733 241h-35.662c-6.281-18.655-23.927-32.133-44.672-32.133s-38.39 13.478-44.671 32.133h-228.461c-8.284 0-15 6.716-15 15s6.716 15 15 15h228.461c6.281 18.655 23.927 32.133 44.672 32.133s38.391-13.478 44.672-32.133h35.662c8.284 0 15-6.716 15-15s-6.716-15-15.001-15zm-80.333 32.133c-9.447 0-17.133-7.686-17.133-17.133s7.686-17.133 17.133-17.133 17.133 7.686 17.133 17.133-7.686 17.133-17.133 17.133z" />
                                        <path
                                            d="m432.733 369.533h-164.194c-6.281-18.655-23.926-32.133-44.672-32.133s-38.391 13.478-44.672 32.133h-99.928c-8.284 0-15 6.716-15 15s6.716 15 15 15h99.928c6.281 18.655 23.926 32.133 44.672 32.133s38.391-13.478 44.672-32.133h164.195c8.284 0 15-6.716 15-15s-6.716-15-15.001-15zm-208.866 32.134c-9.447 0-17.133-7.686-17.133-17.133s7.686-17.133 17.133-17.133 17.133 7.685 17.133 17.132-7.686 17.134-17.133 17.134z" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <form class="filter__row" action="{{ route('catalog', ['brand' => $brand]) }}">
                            <div class="select-group">
                                <div class="select-group__inner">
                                    <p class="select-group__title">Производитель</p>
                                    <div class="select-group__icon"><svg class="accordion__arrow" version="1.1"
                                            id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512.011 512.011"
                                            style="enable-background:new 0 0 512.011 512.011;" xml:space="preserve">
                                            <path d="M505.755,123.592c-8.341-8.341-21.824-8.341-30.165,0L256.005,343.176L36.421,123.592c-8.341-8.341-21.824-8.341-30.165,0
                                                        s-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251c5.462,0,10.923-2.091,15.083-6.251l234.667-234.667
                                                        C514.096,145.416,514.096,131.933,505.755,123.592z" />
                                        </svg>

                                    </div>
                                </div>
                                <ul class="select-group__list" style="display: none">
                                    @foreach($brands as $brand)
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="radio" name="brand"
                                                value="{{ $brand->name }}" @if(request()->brand == $brand->name) checked @endif/>
                                            <p class="select-group__text">{{ $brand->name }}</p>
                                        </label>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>




                            <div class="select-group">
                                <div class="select-group__inner">
                                    <p class="select-group__title">Кузов </p>
                                    <div class="select-group__icon"><svg class="accordion__arrow" version="1.1"
                                            id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512.011 512.011"
                                            style="enable-background:new 0 0 512.011 512.011;" xml:space="preserve">
                                            <path d="M505.755,123.592c-8.341-8.341-21.824-8.341-30.165,0L256.005,343.176L36.421,123.592c-8.341-8.341-21.824-8.341-30.165,0
                                                s-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251c5.462,0,10.923-2.091,15.083-6.251l234.667-234.667
                                                C514.096,145.416,514.096,131.933,505.755,123.592z" />
                                        </svg>

                                    </div>
                                </div>
                                <ul class="select-group__list" style="display: none">
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="body[]"
                                                value="седан" @if(collect(request()->body)->contains('седан')) checked @endif/>
                                            <p class="select-group__text">Седан</p>
                                        </label>
                                    </li>
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="body[]"
                                                value="хэтчбек" @if(collect(request()->body)->contains('хэтчбек')) checked @endif/>
                                            <p class="select-group__text">Хэтчбек</p>
                                        </label>
                                    </li>
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="body[]"
                                                value="минивен" @if(collect(request()->body)->contains('минивен')) checked @endif/>
                                            <p class="select-group__text">Минивен</p>
                                        </label>
                                    </li>
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="body[]"
                                                value="спорткар" @if(collect(request()->body)->contains('спорткар')) checked @endif/>
                                            <p class="select-group__text">Спорткар</p>
                                        </label>
                                    </li>
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="body[]"
                                                value="купе" @if(collect(request()->body)->contains('купе')) checked @endif/>
                                            <p class="select-group__text">Купе</p>
                                        </label>
                                    </li>
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="body[]"
                                                value="кабриолет" @if(collect(request()->body)->contains('кабриолет')) checked @endif/>
                                            <p class="select-group__text">Кабриолет</p>
                                        </label>
                                    </li>
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="body[]"
                                                value="кроссовер" @if(collect(request()->body)->contains('кроссовер')) checked @endif/>
                                            <p class="select-group__text">Кроссовер</p>
                                        </label>
                                    </li>
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="body[]"
                                                value="пикап" @if(collect(request()->body)->contains('пикап')) checked @endif/>
                                            <p class="select-group__text">Пикап</p>
                                        </label>
                                    </li>
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="body[]"
                                                value="универсал" @if(collect(request()->body)->contains('универсал')) checked @endif/>
                                            <p class="select-group__text">Универсал</p>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="select-group">
                                <div class="select-group__inner">
                                    <p class="select-group__title">Двигатель</p>
                                    <div class="select-group__icon"><svg class="accordion__arrow" version="1.1"
                                            id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512.011 512.011"
                                            style="enable-background:new 0 0 512.011 512.011;" xml:space="preserve">
                                            <path d="M505.755,123.592c-8.341-8.341-21.824-8.341-30.165,0L256.005,343.176L36.421,123.592c-8.341-8.341-21.824-8.341-30.165,0
                                        s-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251c5.462,0,10.923-2.091,15.083-6.251l234.667-234.667
                                        C514.096,145.416,514.096,131.933,505.755,123.592z" />
                                        </svg>

                                    </div>
                                </div>
                                <ul class="select-group__list" style="display: none">
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="fuel[]"
                                                value="Бензин" @if(collect(request()->fuel)->contains('Бензин')) checked @endif/>
                                            <p class="select-group__text">Бензин</p>
                                        </label>
                                    </li>
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="fuel[]"
                                                value="Газ" @if(collect(request()->fuel)->contains('Газ')) checked @endif/>
                                            <p class="select-group__text">Газ</p>
                                        </label>
                                    </li>
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="fuel[]"
                                                value="Гибрид" @if(collect(request()->fuel)->contains('Гибрид')) checked @endif/>
                                            <p class="select-group__text">Гибрид</p>
                                        </label>
                                    </li>
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="fuel[]"
                                                value="Дизель" @if(collect(request()->fuel)->contains('Дизель')) checked @endif/>
                                            <p class="select-group__text">Дизель</p>
                                        </label>
                                    </li>
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="fuel[]"
                                                value="Электро" @if(collect(request()->fuel)->contains('Электро')) checked @endif/>
                                            <p class="select-group__text">Электро</p>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="select-group">
                                <div class="select-group__inner">
                                    <p class="select-group__title">Коробка</p>
                                    <div class="select-group__icon"><svg class="accordion__arrow" version="1.1"
                                            id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512.011 512.011"
                                            style="enable-background:new 0 0 512.011 512.011;" xml:space="preserve">
                                            <path d="M505.755,123.592c-8.341-8.341-21.824-8.341-30.165,0L256.005,343.176L36.421,123.592c-8.341-8.341-21.824-8.341-30.165,0
			s-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251c5.462,0,10.923-2.091,15.083-6.251l234.667-234.667
			C514.096,145.416,514.096,131.933,505.755,123.592z" />
                                        </svg>

                                    </div>
                                </div>
                                <ul class="select-group__list" style="display: none">
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="transmission[]"
                                                value="Автомат" @if(collect(request()->transmission)->contains('Автомат')) checked @endif/>
                                            <p class="select-group__text">Автомат</p>
                                        </label>
                                    </li>
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="transmission[]"
                                                value="Механика" @if(collect(request()->transmission)->contains('Механика')) checked @endif/>
                                            <p class="select-group__text">Механика</p>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="select-group">
                                <div class="select-group__inner">
                                    <p class="select-group__title">Привод</p>
                                    <div class="select-group__icon"><svg class="accordion__arrow" version="1.1"
                                            id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512.011 512.011"
                                            style="enable-background:new 0 0 512.011 512.011;" xml:space="preserve">
                                            <path d="M505.755,123.592c-8.341-8.341-21.824-8.341-30.165,0L256.005,343.176L36.421,123.592c-8.341-8.341-21.824-8.341-30.165,0
			s-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251c5.462,0,10.923-2.091,15.083-6.251l234.667-234.667
			C514.096,145.416,514.096,131.933,505.755,123.592z" />
                                        </svg>

                                    </div>
                                </div>
                                <ul class="select-group__list" style="display: none">
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="gear[]"
                                                value="Передний" @if(collect(request()->gear)->contains('Передний')) checked @endif/>
                                            <p class="select-group__text">Передний</p>
                                        </label>
                                    </li>
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="gear[]"
                                                value="Задний" @if(collect(request()->gear)->contains('Задний')) checked @endif/>
                                            <p class="select-group__text">Задний</p>
                                        </label>
                                    </li>
                                    <li class="select-group__item">
                                        <label class="select-group__label">
                                            <input class="select-group__input" type="checkbox" name="gear[]"
                                                value="Полный" @if(collect(request()->gear)->contains('Полный')) checked @endif/>
                                            <p class="select-group__text">Полный</p>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="select-group select-group--fields">
                                <p class="select-group__title">Год</p>
                                <div class="input-group">
                                    <label class="input-group__label">
                                        <input class="input-group__input" type="text" data-val="number"
                                            name="year[from]" placeholder="От" value="{{ request()->year['from'] }}"/>
                                    </label>
                                    <label class="input-group__label">
                                        <input class="input-group__input" type="text" data-val="number" name="year[to]"
                                            placeholder="До" value="{{ request()->year['to'] }}"/>
                                    </label>
                                </div>
                            </div>
                            <div class="select-group select-group--fields">
                                <p class="select-group__title">Цена </p>
                                <div class="input-group">
                                    <label class="input-group__label">
                                        <input class="input-group__input" type="text" data-val="number"
                                            name="price[from]" placeholder="От" value="{{ request()->price['from'] }}"/>
                                    </label>
                                    <label class="input-group__label">
                                        <input class="input-group__input" type="text" data-val="number" name="price[to]"
                                            placeholder="До" value="{{ request()->price['to'] }}"/>
                                    </label>
                                </div>
                            </div>
                            <button class="filter__button button button--second">Найти</button>
                        </form>
                    </div>
                </aside>
                <div class="filter-banner">
                    @foreach($banners as $banner)
                    <a class="filter-banner__item" href="{{ $banner->url }}"><img src="{{ asset("storage/$banner->image") }}" alt="{{ $banner->name }}" /></a>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <section class="content">
                    <div class="card-wrapper card-wrapper--short">
                        @foreach($cars as $car)
                        @include('modules.catalog.card')
                        @endforeach
                    </div>
                    <br>
                    {{ $cars->links() }}
                    <br>
                    @if($text)
                    {!! $text !!}
                    @endif
                </section>
            </div>
        </div>
    </div>
</main>
