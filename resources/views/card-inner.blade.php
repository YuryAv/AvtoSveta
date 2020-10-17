@extends('layouts.layout')

@section('content')

    @include('modules.cards.popup')

    @include('modules.index.index-form')

    @include('modules.cards.main')

    @include('modules.catalog.similar')

    @include('modules.feedback')

@endsection