<section class="index-text section">
    <div class="container">
        <h2 class="section-title">{{ $texts[1]->title }}</h2>
        <img class="image image--middle" src="{{ asset("storage/{$texts[1]->image}") }}" alt="{{ $texts[1]->title }}"/>
        {!! $texts[1]->text !!}
    </div>
</section>