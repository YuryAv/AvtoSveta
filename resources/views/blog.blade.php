@extends('layouts.layout')

@section('content')

    @include('modules.index.index-form')

    @if($isInnerPage)
        {{ Breadcrumbs::render(Route::currentRouteName(), $page) }}
    @else
        {{ Breadcrumbs::render(Route::currentRouteName()) }}
    @endif

    @include('modules.blog.cards')

    @include('modules.feedback')

@endsection