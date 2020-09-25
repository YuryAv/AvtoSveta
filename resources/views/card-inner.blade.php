@extends('layouts.layout')

@section('css', asset('css/page-card-inner.css'))

@section('title', 'Авто')

@section('content')

    @include('modules.cards.popup')

    @include('modules.cards.main')

    @include('modules.catalog.similar')

    @include('modules.feedback')

@endsection