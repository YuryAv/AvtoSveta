<ul class="fn-col__list">
    @foreach($items as $item)
    <li class="fn-col__item"><a class="fn-col__link" href="{{ $item->link() }}">{{ $item->title }}</a></li>
    @endforeach
</ul>