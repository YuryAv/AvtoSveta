@extends('layouts.layout')

@section('content')

    @include('modules.index.index-form')

    @include('modules.breadcrumbs')

    @include('modules.news.cards')

    @include('modules.feedback')

@endsection