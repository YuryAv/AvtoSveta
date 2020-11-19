@extends('layouts.layout')

@section('content')

    @include('modules.index.index-form')

    {{ Breadcrumbs::render('auction', $auction) }}

    <section class="section">
        <div class="container">
            <h2 class="section-title">{{ $auction->title }}</h2>
            <div class="inner-text">
                @if($auction->image)
                    <img class="image image--short" src="{{ asset("storage/$auction->image")  }}" alt="{{ $auction->title }}"/>
                @endif
                {!! $auction->text !!}
            </div>
        </div>
    </section>

@endsection