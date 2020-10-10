@extends('layouts.layout')

@section('title', $page->title)

@section('content')

    <section class="section">
        <div class="container">
            <h2 class="section-title">{{ $page->title }}</h2>
            @if($page->image)
            <img class="image image--full" src="{{ asset("storage/$page->image")  }}" alt="{{ $page->title }}"/>
            @endif
            {!! $page->text !!}
        </div>
    </section>

@endsection