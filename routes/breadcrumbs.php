<?php

Breadcrumbs::for('index', function ($trail) {
    $trail->push('Главная', route('index'));
});

Breadcrumbs::for('search', function ($trail) {
    $trail->parent('index');
    $trail->push('Поиск', route('search'));
});

Breadcrumbs::for('auction', function ($trail, $auction) {
    $trail->parent('index');
    $trail->push($auction->title, route('auction', $auction->id));
});

Breadcrumbs::for('catalog', function ($trail) {
    $trail->parent('index');
    $trail->push('Каталог', route('catalog'));
});

Breadcrumbs::for('car', function ($trail, $car) {
    $trail->parent('catalog');
    $trail->push($car->name, route('car', $car->id));
});
//---------------------------
Breadcrumbs::for('content', function ($trail) {
    $trail->parent('index');
    $trail->push('О нас', route('content'));
});

Breadcrumbs::for('content.page', function ($trail, $page) {
    $trail->parent('content');
    $trail->push($page->title, route('content.page', $page->url));
});

Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('index');
    $trail->push('Блог', route('content'));
});

Breadcrumbs::for('blog.page', function ($trail, $page) {
    $trail->parent('blog');
    $trail->push($page->title, route('content.page', $page->id));
});

Breadcrumbs::for('services', function ($trail) {
    $trail->parent('index');
    $trail->push('Услуги', route('content'));
});

Breadcrumbs::for('services.page', function ($trail, $page) {
    $trail->parent('services');
    $trail->push($page->title, route('content.page', $page->url));
});

Breadcrumbs::for('stocks', function ($trail) {
    $trail->parent('index');
    $trail->push('Акции', route('content'));
});

Breadcrumbs::for('stocks.page', function ($trail, $page) {
    $trail->parent('stocks');
    $trail->push($page->title, route('content.page', $page->url));
});

Breadcrumbs::for('news', function ($trail) {
    $trail->parent('index');
    $trail->push('Новости', route('content'));
});

Breadcrumbs::for('news.page', function ($trail, $page) {
    $trail->parent('news');
    $trail->push($page->title, route('content.page', $page->id));
});

Breadcrumbs::for('reviews', function ($trail) {
    $trail->parent('index');
    $trail->push('Отзывы', route('content'));
});

Breadcrumbs::for('reviews.page', function ($trail, $page) {
    $trail->parent('reviews');
    $trail->push($page->description, route('content.page', $page->id));
});
