<section class="section">
    <div class="container">
        <h2 class="section-title">{{ $texts[3]->title }}</h2>
        <h3 class="section-subtitle">{!! $texts[3]->text !!}</h3>
        <div class="vr-row pt-3">
            @foreach($videoReviews as $review)
            <div class="slide-wrap">
                <div class="review review--video" data-src="{{ asset("storage/$review->video") }}">
                    <div class="review__header">
                        <div class="review__target"></div>
                        <button class="review__play button-play button-play--small">
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
                        <div class="review__filter"></div><img class="review__image" data-lazy="{{ asset("storage/$review->preview") }}" alt="{{ $review->title }}" />
                    </div>
                    <div class="review__footer">
                        <h4 class="review__title">{{ $review->title }}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>