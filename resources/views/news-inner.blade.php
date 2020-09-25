@extends('layouts.layout')

@section('css', asset('css/page-news.css'))

@section('add-sources')
    <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
    <script src="https://yastatic.net/share2/share.js"></script>
@endsection

@section('title', 'Новости')

@section('content')

    @include('modules.news.popup')

    @include('modules.news.main')

    @include('modules.feedback')

@endsection