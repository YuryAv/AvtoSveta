<footer class="footer section">
    <div class="container footer__top">
        <div class="footer-nav row">
            <div class="col-xl-3">
                <div class="fn-col">
                    <p class="fn-col__title">Каталог</p>
                    <div class="fn-col__inner">
                        <ul class="fn-col__list">
                            @foreach($brands as $brand)
                                @if($brand->show)
                                <li class="fn-col__item"><a class="fn-col__link" href="{{ route('catalog', ['brand' => $brand->name]) }}">{{ $brand->name }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                        <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                        <script src="https://yastatic.net/share2/share.js"></script>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="fn-col">
                    <p class="fn-col__title">Наши предложения</p>
                    <ul class="fn-col__list">
                        @foreach($suggestions as $item)
                            <li class="fn-col__item"><a class="fn-col__link" href="{{ url($item->url) }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="fn-col">
                    <p class="fn-col__title">Помощь и сервисы</p>
                    <ul class="fn-col__list">
                        {!! menu('Футер: Помощь и сервисы', 'modules.footer.services') !!}
                    </ul>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="fn-col">
                    <p class="fn-col__title">Наши адреса:</p>
                    <ul class="fn-col__list">
                        <li class="fn-col__item">
                            {!! menu('Футер: Наши адреса', 'modules.footer.addresses') !!}
                            <div class="address-card">
                                <a class="address-card__link" href="tel:{{ setting('site.phone') }}">{{ setting('site.phone') }}</a>
                            </div>
                            <div class="address-card">
                                <p class="address-card__headline">График работы</p>
                                <p class="address-card__headline">Пн-Вс: 24/7</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr class="footer__decorline"/>
    <div class="container footer__bottom pt-3"><a class="logotype" href="index.html"><img class="logotype__image lazy" data-src="../img/logotype-full.png" alt=""/></a>
        <p class="footer__description">{{ setting('site.copyright') }}</p>
    </div>
</footer>