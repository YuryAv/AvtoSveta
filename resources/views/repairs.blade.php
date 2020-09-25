@extends('layouts.layout')

@section('css', asset('css/page-repairs.css'))

@section('title', 'Ремонт')

@section('content')

    @include('modules.repairs.main')

    @include('modules.feedback')

@endsection