<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">{{ $car->name }}</h2>
            </div>
            <div class="col-lg-9">
                <div class="page-slider">
                    <div class="page-slider__top">
                        @foreach($car->imageList as $image)
                            <div class="page-slider__top-slide"><img class="page-slider__top-image lazy" src="{{ asset("storage/$image") }}" alt="{{ $car->name }}"/></div>
                        @endforeach
                    </div>
                    <div class="page-slider__bottom">
                        @foreach($car->imageList as $image)
                        <div class="page-slider__bottom-slide"><img class="page-slider__bottom-image lazy" src="{{ asset("storage/$image") }}" alt="{{ $car->name }}"/></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <aside class="card-inner-sidebar">
                    <p class="card-inner-sidebar__title">${{ $car->price }}</p>
                    <button class="card-inner-sidebar__button button button--second">Заказать</button>
                    <p class="card-inner-sidebar__text">Цена с доставкой, растаможкой и ремонтом</p>
                    <button class="card-inner-sidebar__button button button--second">Рассчитать</button>
                    <p class="card-inner-sidebar__text">Проконсультироваться:</p><a class="button card-inner-sidebar__button button--second" href="tel:{{ setting('site.phone') }}">{{ setting('site.phone') }}</a>
                </aside>
            </div>
            <div class="col-12">
          <div class="card-inner">
            <ul class="card-inner-tabs__head">
              <li class="card-inner-tabs__head-i card-inner-tabs__head-i--active">
                <h3>Характеристики</h3>
              </li>
              <li class="card-inner-tabs__head-i">
                <h3>Доп. Характеристики</h3>
              </li>
              <li class="card-inner-tabs__head-i">
                <h3>Описание</h3>
              </li>
            </ul>
            <ul class="card-inner-tabs__body">
              <li class="card-inner-tabs__body-i inner-text">
                <table>
                  <tbody>
                  @foreach($chars['main'] as $key => $value)
                    <tr>
                      <td>{{ $key }}</td>
                      <td>{{ $value }}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </li>
              <li class="card-inner-tabs__body-i inner-text" style="display: none">
                <table>
                  <tbody>
                  @foreach($chars['additional'] as $key => $value)
                      @if($value)
                      <tr>
                          <td>{{ $key }}</td>
                          <td>{{ $value }}</td>
                      </tr>
                      @endif
                  @endforeach
                  </tbody>
                </table>
              </li>
              <li class="card-inner-tabs__body-i inner-text" style="display: none">
                  {!! $car->description !!}
              </li>
            </ul>
          </div>
        </div>
        </div>
    </div>
</section>