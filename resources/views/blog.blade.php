@extends('layouts.layout')

@section('title', 'Блог')

@section('content')

    @include('modules.blog.cards')

    @include('modules.feedback')

@endsection