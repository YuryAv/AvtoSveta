@extends('layouts.layout')

@section('content')

    @include('modules.index.index-form')

    <section class="section">
        <div class="container">
            <div class="inner-text">
                <h2 class="section-title">{{ $auction->title }}</h2>
                @if($auction->image)
                    <img class="image image--full" src="{{ asset("storage/$auction->image")  }}" alt="{{ $auction->title }}"/>
                @endif
                {!! $auction->text !!}
            </div>
        </div>
    </section>

@endsection