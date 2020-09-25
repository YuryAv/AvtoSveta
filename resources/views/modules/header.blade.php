<header class="header">
    <div class="header_top">
        <nav class="navigation">
            <div class="container d-flex align-items-center justify-content-between pb-2 pt-2"><a class="logotype" href="/"><img class="logotype__image lazy" data-src="{{ asset('storage/'.setting('site.logo')) }}" alt="logotype"/></a>
                <div class="navigation__inner">
                    {!! menu('main', 'modules.navigation') !!}
                </div>
                <form class="search" action="">
                    <input class="search__input" type="text"/>
                    <button class="search__button" type="button"><img class="search__icon lazy" src="{{ asset('img/svg/loupe.svg') }}" alt=""/></button>
                </form>
                <button class="mobile"><i class="mobile__line"></i><i class="mobile__line"></i><i class="mobile__line"></i></button>
            </div>
        </nav>
    </div>
</header>