@extends('layouts.layout')

@section('css', asset('css/page-discount.css'))

@section('title', 'Блог')

@section('content')


    @include('modules.blog.cards')

    @include('modules.feedback')

@endsection