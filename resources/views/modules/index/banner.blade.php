<section class="banner">
    <div class="banner__slider">
        @foreach($banners as $banner)
        <a class="banner__link" href="{{ $banner->url }}">
            <img class="d-block w-100 lazy banner__image" src="{{ asset("storage/$banner->image") }}"
                alt="{{ $banner->name }}" />
        </a>
        @endforeach
    </div>
</section>

<section class="index-video">
    <div class="container">
        <div class="index-video--inner" data-src="{{  asset('storage/' . $video->url) }}"><img class="index-video__image"
                src="{{ asset('storage/' . $video->preview) }}" alt="">
            <div class="index-video__filter"></div>
            <div class="index-video__filter-click"></div>
            <button class="index-video__play">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 41.999 41.999"
                    style="enable-background:new 0 0 41.999 41.999;" xml:space="preserve">
                    <path d="M36.068,20.176l-29-20C6.761-0.035,6.363-0.057,6.035,0.114C5.706,0.287,5.5,0.627,5.5,0.999v40
                    c0,0.372,0.206,0.713,0.535,0.886c0.146,0.076,0.306,0.114,0.465,0.114c0.199,0,0.397-0.06,0.568-0.177l29-20
                    c0.271-0.187,0.432-0.494,0.432-0.823S36.338,20.363,36.068,20.176z"></path>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                </svg>
            </button>
        </div>
    </div>
</section>
