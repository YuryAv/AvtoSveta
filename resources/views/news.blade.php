@extends('layouts.layout')

@section('title', 'Новости')

@section('content')

    @include('modules.news.cards')

    @include('modules.feedback')

@endsection