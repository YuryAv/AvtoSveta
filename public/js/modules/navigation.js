"use strict";var e=0;$(window).width()<767&&($(".navigation__inner").css({top:$(".header").height()+1+"px",height:"calc(100vh - "+$(".header").height()+"px)"}),$(".navigation__inner .sub-menu").hide(0),$(".navigation__link-icon").on("click",(function(e){e.preventDefault(),$(this).toggleClass("navigation__link-icon--active").closest(".navigation__item-inner").next(".sub-menu").slideToggle(300)}))),$(document).on("scroll",(function(i){!function(e){var i=$(".header").height();if(!($(document).scrollTop()>3*i&&$(window).height()>550&&e))return $(document).scrollTop()>i&&$(window).height()>550&&e?($(".header").addClass("header--fixed"),void $("body").css("padding-top",i+"px")):$(document).scrollTop()<=i&&$(window).height()>550&&!e?($(".header").removeClass("header--visible"),$(".header").removeClass("header--fixed"),void $("body").css("padding-top","")):void 0;$(".header").addClass("header--visible")}($(this).scrollTop()>e),e=$(this).scrollTop()})),$("button.mobile").on("click",(function(){$(this).toggleClass("mobile--active"),$(".navigation__inner").toggleClass("navigation__inner--opened"),$("body").toggleClass("body--overflow")}));