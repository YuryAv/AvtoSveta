"use strict";$((function(){$("head").append('<style rel="stylesheet">\n                        :root {\n                            --btnColor: #FA2828; \n                            --mainColor: #1B4788; \n                            --bgColor: #ffffff;\n                        }\n                    </style>'),$(".lazy").Lazy(),$(".accordion__header").on("click",(function(){$(this).next(".accordion__body").slideToggle(300),$(this).closest(".accordion").toggleClass("accordion--opened")}));var e=function(e,o){$(e).on("click",(function(){$("body").addClass("body--overflow"),$(o).show(150,(function(){!function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{item:"body",class:"null",show:!0,type:"transitionend",callback:!1},o=function o(){$(e.item).removeClass(e.class+"-before").removeClass(e.class),$(e.item).off(e.type,o),e.callback&&e.callback()};$(e.item).addClass(e.class+"-before"),e.show&&$(e.item).toggle(),$(e.item).on(e.type,o),$(e.item).addClass(e.class)}({item:"section.popup .popup__inner",class:"a--show",show:!0,type:"transitionend",callback:!1})}))}))};$(document).mouseup((function(e){$.each(["section.popup",".popup__container",".popup__inner"],(function(o,s){0===$(s).has(e.target).length&&($("section.popup").hide(300),$("section.popup .popup__inner").hide(),$("body").removeClass("body--overflow"))}))})),e(".article-info__share","section.popup"),e("button.card__button","section.popup"),e("button.card-inner-sidebar__button","section.popup");var o=0;$(window).width()<767&&($(".navigation__inner").css({top:$(".header").height()+1+"px",height:"calc(100vh - "+$(".header").height()+"px)"}),$(".navigation__inner .sub-menu").hide(0),$(".navigation__link-icon").on("click",(function(e){e.preventDefault(),$(this).toggleClass("navigation__link-icon--active").closest(".navigation__item-inner").next(".sub-menu").slideToggle(300)}))),$(document).on("scroll",(function(e){!function(e){var o=$(".header").height();if(!($(document).scrollTop()>3*o&&$(window).height()>550&&e))return $(document).scrollTop()>o&&$(window).height()>550&&e?($(".header").addClass("header--fixed"),void $("body").css("padding-top",o+"px")):$(document).scrollTop()<=o&&$(window).height()>550&&!e?($(".header").removeClass("header--visible"),$(".header").removeClass("header--fixed"),void $("body").css("padding-top","")):void 0;$(".header").addClass("header--visible")}($(this).scrollTop()>o),o=$(this).scrollTop()})),$("button.mobile").on("click",(function(){$(this).toggleClass("mobile--active"),$(".navigation__inner").toggleClass("navigation__inner--opened"),$("body").toggleClass("body--overflow")})),$(".search__button").on("click",(function(){var e=this;$(".search__input").show(300,(function(){$(e).attr("type","submit")}))})),$(".select-group__inner").on("click",(function(){$(this).toggleClass("select-group__inner--opened").next(".select-group__list").slideToggle(300)})),$('input[data-val="number"]').on("input",(function(){$(this).val($(this).val().replace(/\D/,""))})),$(window).width()<992&&($(".filter__row").hide(0),$(".filter__label").on("click",(function(){$(this).next(".filter__row").slideToggle(300)}))),$(".card__button").on("click",(function(){$("section.popup form textarea").text("Хочу спросить по поводу "+$(this).closest(".card").find(".card__title").text()+"...")}));var s='<button class="slider-arrow slider-arrow--next"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve"><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></svg></button>',t='<button class="slider-arrow slider-arrow--prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve"><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></svg></button>';$(".banner__slider").slick({slidesToShow:1,arrows:!0,dots:!0,dotsClass:"slide-dots",slidesToScroll:1,autoplay:!0,autoplaySpeed:2e3,nextArrow:s,prevArrow:t}),$(".page-slider__top").slick({slidesToShow:1,lazyLoad:"progressive",slidesToScroll:1,arrows:!0,dots:!1,asNavFor:".page-slider__bottom",nextArrow:s,prevArrow:t}),$(".page-slider__bottom").slick({slidesToShow:5,lazyLoad:"progressive",slidesToScroll:1,arrows:!1,dots:!1,centerMode:!0,asNavFor:".page-slider__top",focusOnSelect:!0}),$(".similar-row__inner").slick({slidesToShow:5,slidesToScroll:1,arrows:!0,dots:!1,nextArrow:s,prevArrow:t});$.each([".auctions-slider__inner",".benefits__row",".top-orders__inner"],(function(e,o){$(o).slick({slidesToShow:4,slidesToScroll:1,arrows:!0,dots:!1,nextArrow:'<button class="slider-arrow slider-arrow--outside slider-arrow--next"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve"><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></svg></button>',prevArrow:'<button class="slider-arrow slider-arrow--outside slider-arrow--prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve"><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></svg></button>',adaptiveHeight:!0,responsive:[{breakpoint:992,settings:{slidesToShow:3}},{breakpoint:768,settings:{slidesToShow:2}},{breakpoint:486,settings:{slidesToShow:1}}]})}))}));