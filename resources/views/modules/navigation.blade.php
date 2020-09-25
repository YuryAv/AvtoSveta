<ul class="navigation__list">
    @foreach($items as $item)
        <li class="navigation__item">
            <div class="navigation__item-inner"><a class="navigation__link" href="{{ url($item->link()) }}">{{ $item->title }}</a>
                <div class="navigation__link-icon">
                    <svg class="accordion__arrow" version="1.1" id="Layer_1"
                         xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 512.011 512.011"
                         style="enable-background:new 0 0 512.011 512.011;" xml:space="preserve"><path d="M505.755,123.592c-8.341-8.341-21.824-8.341-30.165,0L256.005,343.176L36.421,123.592c-8.341-8.341-21.824-8.341-30.165,0
                    s-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251c5.462,0,10.923-2.091,15.083-6.251l234.667-234.667
                    C514.096,145.416,514.096,131.933,505.755,123.592z"/>
                    </svg>
                </div>
            </div>
        @if(count($item->children))
            <ul class="sub-menu">
                @foreach($item->children as $subItem)
                    <li class="sub-menu__item"><a class="sub-menu__link" href="{{ url($subItem->link()) }}">{{ $subItem->title }}</a></li>
                @endforeach
            </ul>
        @endif
        </li>
    @endforeach
</ul>