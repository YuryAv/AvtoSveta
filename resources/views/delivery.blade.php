@extends('layouts.layout')

@section('css', asset('css/page-delivery.css'))

@section('title', 'Доставка')

@section('content')

    @include('modules.delivery.main')

    @include('modules.feedback')

@endsection