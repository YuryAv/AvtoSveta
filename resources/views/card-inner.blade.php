@extends('layouts.layout')

@section('title', 'Авто')

@section('content')

    @include('modules.cards.popup')

    @include('modules.cards.main')

    @include('modules.catalog.similar')

    @include('modules.feedback')

@endsection