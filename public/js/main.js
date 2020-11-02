"use strict";$((function(){$("head").append('<style rel="stylesheet">\n                        :root {\n                            --btnColor: #FA2828; \n                            --mainColor: #1B4788; \n                            --bgColor: #ffffff;\n                        }\n                    </style>'),$(".lazy").Lazy(),$(".accordion__header").on("click",(function(){$(this).next(".accordion__body").slideToggle(300),$(this).closest(".accordion").toggleClass("accordion--opened")}));$(".benefits-card__text").on("click",(function(){console.log($("#popupText")),$("#popupText").length>0?$(".popup#popupText .popup__container p").text($(this).text()):($("body").append("<section class='popup' style='display: none;' id='popupText'><div class='container popup__container'></div></section>"),$(".popup#popupText .popup__container").append('<p class="popup__text-block">'.concat($(this).text(),"</p>"))),$("body").addClass("body--overflow"),$(".popup#popupText").show(300)}));var e=function(e,t){$(e).on("click",(function(e){e.preventDefault(),$("body").addClass("body--overflow"),$(t).show(150,(function(){!function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{item:"body",class:"null",show:!0,type:"transitionend",callback:!1},t=function t(){$(e.item).removeClass(e.class+"-before").removeClass(e.class),$(e.item).off(e.type,t),e.callback&&e.callback()};$(e.item).addClass(e.class+"-before"),e.show&&$(e.item).toggle(),$(e.item).on(e.type,t),$(e.item).addClass(e.class)}({item:"section.popup .popup__inner",class:"a--show",show:!0,type:"transitionend",callback:!1})}))}))};$(document).mouseup((function(e){$.each(["section.popup",".popup__container",".popup__inner"],(function(t,o){0===$(o).has(e.target).length&&($("section.popup").hide(300),$("section.popup .popup__inner").hide(),$("body").removeClass("body--overflow"))}))})),e(".article-info__share","section.popup#popupForm"),e("button.card__button","section.popup#popupForm"),e("a.c-tab__button","section.popup#popupMap");var t=0;$(window).width()<767&&($(".navigation__inner").css({top:$(".header").height()+1+"px",height:"calc(100vh - "+$(".header").height()+"px)"}),$(".navigation__inner .sub-menu").hide(0),$(".navigation__link-icon").on("click",(function(e){e.preventDefault(),$(this).toggleClass("navigation__link-icon--active").closest(".navigation__item-inner").next(".sub-menu").slideToggle(300)}))),$(document).on("scroll",(function(e){!function(e){var t=$(".header").height();if(!($(document).scrollTop()>3*t&&$(window).height()>550&&e))return $(document).scrollTop()>t&&$(window).height()>550&&e?($(".header").addClass("header--fixed"),void $("body").css("padding-top",t+"px")):$(document).scrollTop()<=t&&$(window).height()>550&&!e?($(".header").removeClass("header--visible"),$(".header").removeClass("header--fixed"),void $("body").css("padding-top","")):void 0;$(".header").addClass("header--visible")}($(this).scrollTop()>t),t=$(this).scrollTop()})),$("button.mobile").on("click",(function(){$(this).toggleClass("mobile--active"),$(".navigation__inner").toggleClass("navigation__inner--opened"),$("body").toggleClass("body--overflow")})),$(".index-video__filter-click").on("click",(function(e){var t=$(this).closest(".index-video__right").attr("data-src"),o=document.createElement("video"),i=document.createElement("source");o.setAttribute("controls","controls"),i.setAttribute("src",t),i.setAttribute("type","video/mp4"),o.append(i),o.append("Your browser does not support the video tag."),o.play(),$(this).closest(".index-video__right").html(o)})),$.each($(".review__target"),(function(e,t){$(t).on("click",(function(e){var o=$(t).closest(".review.review--video").attr("data-src"),i=document.createElement("video"),s=document.createElement("source");i.setAttribute("controls","controls"),s.setAttribute("src",o),s.setAttribute("type","video/mp4"),i.append(s),i.append("Your browser does not support the video tag."),i.play(),$(t).closest(".review__header").html(i)}))})),$(".index-tabs__input").on("change",(function(){var e=$(this).attr("data-tab");$.each($(".card"),(function(t,o){console.log({"data-card":$(o).attr("data-card-tab"),tabValue:e,if:$(o).attr("data-card-tab")!=e}),$(o).attr("data-card-tab")!=e?$(o).fadeOut(300):$(o).fadeIn(300)}))})),$(".search__button").on("click",(function(){var e=this;$(".search__input").show(300,(function(){$(e).attr("type","submit")}))})),$(".select-group__inner").on("click",(function(){$(this).toggleClass("select-group__inner--opened").next(".select-group__list").slideToggle(300)})),$(document).on("scroll",(function(){$(document).scrollTop()>600?$(".scroll-top").addClass("scroll-top--active"):$(".scroll-top").removeClass("scroll-top--active")})),$(".scroll-top").on("click",(function(e){e.preventDefault(),$(document).scrollTop(0),$(".scroll-top").removeClass("scroll-top--active")})),$('input[data-val="number"]').on("input",(function(){$(this).val($(this).val().replace(/\D/,""))})),$(window).width()<992&&($(".filter__row").hide(0),$(".filter__label").on("click",(function(){$(this).next(".filter__row").slideToggle(300)}))),$.each($(".filter-banner__item"),(function(e,t){if($(window).width()>991){var o=$(t).width();$(t).height(o),$(t).width(o)}else $(t).hide()})),$(".card__button").on("click",(function(){$("section.popup form textarea").text("Хочу спросить по поводу "+$(this).closest(".card").find(".card__title").text()+"...")}));$.each($(".card-slider"),(function(e,t){var o=$(t).closest(".card--zoom").width()/3;$(t).find(".card-slider__item").css("height",o+"px")})),$.each($(".card--zoom"),(function(e,t){$(window).width()>992&&($(t).find(".card-slider__item").on("mouseenter",(function(){$(t).find("img.card__image").attr("src",$(this).find("img.card-slider__image").attr("src"))})),$(t).on("mouseleave",(function(){$(t).find("img.card__image").attr("src",$(t).find("img.card__image").attr("data-default"))})),$(t).css("max-height",$(t).height()+"px")),$(t).has(".card-slider")&&($(t).on("mouseenter",(function(){null!=$(t).find(".card-slider__image")&&$.each($(t).find(".card-slider__image"),(function(e,t){$(t).attr("src",$(t).attr("data-mysrc"))}));var e=$(t).find("img.card__image").height()-$(t).find(".card-slider").height()-1;$(t).find("img.card__image").css({height:e+"px","min-height":e+"px","max-height":e+"px"}),$(t).find(".card__link").css({height:e+"px","min-height":e+"px","max-height":e+"px"})})),$(t).on("mouseleave",(function(){$(t).find("img.card__image").css({height:"","min-height":"","max-height":""}),$(t).find(".card__link").css({height:"","min-height":"","max-height":""})})))})),$.each($(".card-inner-tabs__head-i"),(function(e,t){$(t).on("click",(function(){$(".card-inner-tabs__head-i--active").removeClass("card-inner-tabs__head-i--active"),$(this).addClass("card-inner-tabs__head-i--active"),$(".card-inner-tabs__body-i").slideUp(300),$($(".card-inner-tabs__body-i")[e]).slideDown(300)}))}));var o='<button class="slider-arrow slider-arrow--next"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve"><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></svg></button>',i='<button class="slider-arrow slider-arrow--prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve"><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></svg></button>',s='<button class="slider-arrow slider-arrow--outside slider-arrow--next"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve"><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></svg></button>',n='<button class="slider-arrow slider-arrow--outside slider-arrow--prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve"><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></svg></button>';$(".banner__slider").slick({slidesToShow:1,arrows:!0,dots:!0,dotsClass:"slide-dots",slidesToScroll:1,autoplay:!0,autoplaySpeed:2e3,nextArrow:o,prevArrow:i,infinite:!1}),$(".page-slider__top").slick({slidesToShow:1,lazyLoad:"progressive",slidesToScroll:1,arrows:!0,dots:!1,asNavFor:".page-slider__bottom",nextArrow:o,prevArrow:i,infinite:!1}),$(".page-slider__bottom").slick({slidesToShow:5,lazyLoad:"progressive",slidesToScroll:1,arrows:!1,dots:!1,centerMode:!0,asNavFor:".page-slider__top",focusOnSelect:!0,infinite:!1,responsive:[{breakpoint:1200,settings:{slidesToShow:4}},{breakpoint:992,settings:{slidesToShow:3}},{breakpoint:768,settings:{slidesToShow:2}}]});$(".contacts-tabs__item").length>5&&$(".contacts-tabs__list").slick({slidesToShow:5,slidesToScroll:1,arrows:!0,dots:!1,nextArrow:s,prevArrow:n,adaptiveHeight:!0,infinite:!1,responsive:[{breakpoint:1200,settings:{slidesToShow:4}},{breakpoint:992,settings:{slidesToShow:3}},{breakpoint:768,settings:{slidesToShow:2}},{breakpoint:486,settings:{slidesToShow:1}}]}),$.each([".auctions-slider__inner",".benefits__row",".top-orders__inner",".vr-row",".similar-row__inner"],(function(e,t){$(t).slick({slidesToShow:4,slidesToScroll:1,arrows:!0,dots:!1,nextArrow:s,prevArrow:n,adaptiveHeight:!0,infinite:!1,responsive:[{breakpoint:992,settings:{slidesToShow:3}},{breakpoint:768,settings:{slidesToShow:2}},{breakpoint:486,settings:{slidesToShow:1}}]})}))}));