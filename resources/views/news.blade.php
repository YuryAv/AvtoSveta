@extends('layouts.layout')

@section('css', asset('css/page-news.css'))

@section('title', 'Новости')

@section('content')

    @include('modules.news.cards')

    @include('modules.feedback')

@endsection