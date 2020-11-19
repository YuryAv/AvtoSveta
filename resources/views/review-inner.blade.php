@extends('layouts.layout')

@section('content')

    @include('modules.index.index-form')
    @include('modules.breadcrumbs')

    <section class="section">
        <div class="container">
            <h2 class="section-title">{{ $page->description }}</h2>
            @if($page->type == 'text')
                @if($page->image)
                    <img class="image image--full lazy" data-src="{{ asset("storage/$page->image")  }}" alt="{{ $page->title }}"/>
                @endif
                <div class="inner-text">
                    {!! $page->text !!}
                </div>
            @endif

            @if($page->type == 'video')
                <div class="index-video__right" data-src="{{  asset('storage/' . $page->video) }}"><img
                            class="index-video__image" src="{{ asset('storage/' . $page->image) }}" alt="" />
                    <div class="index-video__filter"></div>
                    <div class="index-video__filter-click"></div>
                    <button class="index-video__play button-play">
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 41.999 41.999"
                             style="enable-background:new 0 0 41.999 41.999;" xml:space="preserve">
                    <path d="M36.068,20.176l-29-20C6.761-0.035,6.363-0.057,6.035,0.114C5.706,0.287,5.5,0.627,5.5,0.999v40
                        c0,0.372,0.206,0.713,0.535,0.886c0.146,0.076,0.306,0.114,0.465,0.114c0.199,0,0.397-0.06,0.568-0.177l29-20
                        c0.271-0.187,0.432-0.494,0.432-0.823S36.338,20.363,36.068,20.176z" />
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                </svg>
                    </button>
                </div>
            @endif
        </div>
    </section>

@endsection