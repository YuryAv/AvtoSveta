<section class="banner">
    <div class="banner__slider">
        @foreach($banners as $banner)
        <a class="banner__link" href="{{ $banner->url }}">
            <img class="d-block w-100 lazy banner__image" src="{{ asset("storage/$banner->image") }}" alt="{{ $banner->name }}"/>
        </a>
        @endforeach
    </div>
</section>