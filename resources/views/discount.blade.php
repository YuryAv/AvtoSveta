@extends('layouts.layout')

@section('css', asset('css/page-discount.css'))

@section('title', 'Акции')

@section('content')

    @include('modules.discount.main')

    @include('modules.feedback')

@endsection