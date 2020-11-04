@extends('layouts.layout')

@section('content')

    @include('modules.index.index-form')

    <section class="section">
        <div class="container">
            <h2 class="section-title">{{ $page->title }}</h2>
            @if($page->image)
            <img class="image image--full lazy" data-src="{{ asset("storage/$page->image")  }}" alt="{{ $page->title }}"/>
            @endif
            <div class="inner-text">
                {!! $page->text !!}
            </div>
        </div>
    </section>

@endsection