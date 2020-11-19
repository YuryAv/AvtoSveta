@extends('layouts.layout')

@section('add-sources')
    <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
    <script src="https://yastatic.net/share2/share.js"></script>
@endsection

@section('content')

    @include('modules.catalog.popup')

    @include('modules.popup-form')

    @include('modules.index.index-form')

    {{ Breadcrumbs::render('catalog') }}

    @include('modules.catalog.main')

    @include('modules.catalog.similar')

    @include('modules.feedback')

@endsection