@extends('layouts.layout')

@section('content')

    @include('modules.cards.popup')

    @include('modules.popup-form')

    @include('modules.index.index-form')

    {{ Breadcrumbs::render('car', $car) }}

    @include('modules.cards.main')

    @include('modules.catalog.similar')

    @include('modules.feedback')

@endsection