let nextArrowBig = '<button class="slider-arrow slider-arrow--next"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve"><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></svg></button>',
prevArrowBig = '<button class="slider-arrow slider-arrow--prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve"><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></svg></button>',
nextArrowSmall = '<button class="slider-arrow slider-arrow--outside slider-arrow--next"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve"><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></svg></button>',
prevArrowSmall = '<button class="slider-arrow slider-arrow--outside slider-arrow--prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve"><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></svg></button>';

$('.banner__slider').slick({
    slidesToShow: 1,
    arrows: true,
    dots: true,
    dotsClass: 'slide-dots',
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow: nextArrowBig,
    prevArrow: prevArrowBig
});

$('.page-slider__top').slick({
    slidesToShow: 1,
    lazyLoad: 'progressive',
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    asNavFor: '.page-slider__bottom',
    nextArrow: nextArrowBig,
    prevArrow: prevArrowBig
})

$('.page-slider__bottom').slick({
    slidesToShow: 5,
    lazyLoad: 'progressive',
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    centerMode: true,
    asNavFor: '.page-slider__top',
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
            slidesToShow: 4
            }
        },
        {
            breakpoint: 992,
            settings: {
            slidesToShow: 3
            }
        },
        {
            breakpoint: 768,
            settings: {
            slidesToShow: 2
            }
        }
    ]    
})

let sectionSliders = ['.auctions-slider__inner', '.benefits__row', '.top-orders__inner', '.vr-row', '.similar-row__inner'];

if ($('.contacts-tabs__item').length > 5) {
    $('.contacts-tabs__list').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        nextArrow: nextArrowSmall,
        prevArrow: prevArrowSmall,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                slidesToShow: 4
                }
            },
            {
                breakpoint: 992,
                settings: {
                slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 2
                }
            },
            {
                breakpoint: 486,
                settings: {
                slidesToShow: 1
                }
            }
        ]
    })
}



$.each(sectionSliders, function (indexInArray, valueOfElement) { 
    $(valueOfElement).slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        nextArrow: nextArrowSmall,
        prevArrow: prevArrowSmall,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 2
                }
            },
            {
                breakpoint: 486,
                settings: {
                slidesToShow: 1
                }
            }
        ]
    })
});