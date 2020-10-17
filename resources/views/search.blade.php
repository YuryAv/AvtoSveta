@extends('layouts.layout')

@section('content')

    @include('modules.index.index-form')

    <section class="section">
        <div class="container">
            <h2 class="section-title">Результаты поиска по запросу "{{ $string }}":</h2>
        </div>
        <div class="container">
            @if($cars->count())
            <div class="card-wrapper">
                @foreach($cars as $car)
                    @include('modules.catalog.card')
                @endforeach
            </div>
            <br>
            {{ $cars->links() }}
            <br>
            @else
            Ничего не найдено
            @endif
        </div>
    </section>
@endsection