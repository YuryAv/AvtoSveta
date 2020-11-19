@unless ($breadcrumbs->isEmpty())

    <section class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                @foreach ($breadcrumbs as $breadcrumb)

                    @if (!is_null($breadcrumb->url) && !$loop->last)
                        <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                    @else
                        <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                    @endif

                @endforeach
            </ul>
        </div>
    </section>

@endunless