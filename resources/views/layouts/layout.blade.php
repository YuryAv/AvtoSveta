<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ $seo->title ?? 'AvtoSveta' }}</title>
    <meta name="description" content="{{ $seo->description ?? '' }}">
    <meta name="keywords" content="{{ $seo->keywords ?? '' }}">
    <meta name="robots" content="{{ $seo->robots ?? '' }}">
    <meta name="googlebot" content="{{ $seo->googlebot ?? '' }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet"/>
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/> -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.lazy.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <link rel="stylesheet" href="@yield('css', asset('css/all-styles.css'))"/>
    @yield('add-sources', '')
    <style>
        @-ms-viewport{width:device-width}a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,main,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}*,::after,::before{box-sizing:inherit}body{line-height:1;font-family:sans-serif;text-align:left;background:var(--bgColor)}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote::after,blockquote::before,q::after,q::before{content:'';content:none}table{border-collapse:collapse;border-spacing:0}caption{caption-side:bottom}th{text-align:inherit}hr{box-sizing:content-box;height:0;overflow:visible}code,kbd,pre,samp{font-family:monospace,monospace}pre{overflow:auto;-ms-overflow-style:scrollbar}a{background-color:transparent;-webkit-text-decoration-skip:objects;color:inherit;text-decoration:none}abbr[title]{border-bottom:none;text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted;cursor:help;-webkit-text-decoration-skip-ink:none;text-decoration-skip-ink:none}b,strong{font-weight:bolder}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0}sub{bottom:-.25em}sup{top:-.5em}img{border-style:none}svg:not(:root){overflow:hidden}button{border-radius:0}button:focus{outline:-webkit-focus-ring-color auto 5px}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}input[type=date],input[type=datetime-local],input[type=month],input[type=time]{-webkit-appearance:listbox}textarea{resize:vertical;overflow:auto}button,input{overflow:visible}button,select{text-transform:none}select{word-wrap:normal}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=checkbox],[type=radio],input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}[tabindex="-1"]:focus{outline:0!important}fieldset{min-width:0}legend{max-width:100%;white-space:normal;color:inherit;display:block}progress{vertical-align:baseline}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}output{display:inline-block}[hidden],template{display:none}a:-moz-focusring,a:focus{outline:0}[role=button],button,input[type=button],input[type=reset],input[type=submit]{padding:0;border:0;font:inherit;font-size:100%;color:inherit;text-align:inherit;background:0 0;-webkit-appearance:button;-moz-appearance:button;appearance:button;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}[role=button]:-moz-focusring,button:-moz-focusring,input[type=button]:-moz-focusring,input[type=reset]:-moz-focusring,input[type=submit]:-moz-focusring{outline:0}[role=button]:focus,button:focus,input[type=button]:focus,input[type=reset]:focus,input[type=submit]:focus{outline:0}.slick-slider{position:relative;display:block;box-sizing:border-box;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{position:relative;overflow:hidden;display:block;margin:0;padding:0}.slick-list:focus{outline:0}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-list,.slick-slider .slick-track{transform:translate3d(0,0,0)}.slick-track{position:relative;left:0;top:0;display:flex;align-items:center;margin-left:auto;margin-right:auto}.slick-track:after,.slick-track:before{content:"";display:table}.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}.slick-slide{float:left;height:100%;min-height:1px;display:none}[dir=rtl] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-loading .slick-slide{visibility:hidden}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}.slide-dots{position:absolute;bottom:5px;left:0;width:100%;display:flex;align-items:center;justify-content:center}.slide-dots .slick-active{border:3px solid var(--btnColor)}.slide-dots li{height:20px;width:20px;background:var(--bgColor);border-radius:50%;font-size:0;cursor:pointer;margin:0 4px;border:3px solid var(--mainColor)}.slide-dots li:hover{opacity:.8}.slider-arrow{height:100%;width:3rem;position:absolute;top:0;z-index:5}.slider-arrow--outside{width:2rem}.slider-arrow--outside.slider-arrow--prev{left:-2rem;transform:rotate(180deg)}.slider-arrow--outside.slider-arrow--next{right:-2rem}@media screen and (max-width:767px){.slide-dots li{height:15px;width:15px}.slider-arrow{width:2rem}}.slider-arrow:hover svg{fill:var(--btnColor)}.slider-arrow svg{width:100%;fill:var(--mainColor);transition:fill .3s}.slider-arrow--prev{left:0;transform:rotate(180deg)}.slider-arrow--next{right:0}html{box-sizing:border-box;touch-action:manipulation;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-ms-overflow-style:scrollbar;-webkit-tap-highlight-color:transparent;font-size:16px;scroll-behavior:smooth}.body--overflow{overflow:hidden}@media screen and (min-width:1600px){.container{max-width:1440px}}.section{padding:65px 0}@media screen and (max-width:1199px){.section{padding:58.5px 0}}@media screen and (max-width:991px){.section{padding:52.65px 0}}@media screen and (max-width:767px){.section{padding:47.385px 0}}@media screen and (max-width:575px){.slider-arrow--outside.slider-arrow--prev{left:0}.slider-arrow--outside.slider-arrow--next{right:0}.section{padding:42.6465px 0}}.section--small{padding:35px 0}@media screen and (max-width:1199px){.section--small{padding:31.5px 0}}@media screen and (max-width:991px){.section--small{padding:28.35px 0}}@media screen and (max-width:767px){.section--small{padding:25.515px 0}}@media screen and (max-width:575px){.section--small{padding:22.9635px 0}}.slide-wrap{padding:0 5px}.image{margin-bottom:2rem}.image--full{width:100%;height:auto;max-width:100%;-o-object-fit:cover;object-fit:cover}.image--middle{display:block;width:80%;margin:0 auto 2rem}.image--short{float:left;width:50%;margin-right:2rem}.social{padding:.7rem;background:var(--bgColor)}.button-play{height:4em;width:4em;background:var(--btnColor);border:none;display:flex;justify-content:center;align-items:center;font-family:Roboto,sans-serif;font-size:19px;line-height:1.3em}@media screen and (max-width:1199px){.button-play{font-size:17.1px}}@media screen and (max-width:991px){.button-play{font-size:15.39px}}@media screen and (max-width:767px){.button-play{font-size:13.851px}}@media screen and (max-width:575px){.button-play{font-size:12.4659px}}.button-play--small{font-family:Roboto,sans-serif;font-size:14px;line-height:1.3em}.button-play svg{height:50%;width:50%;fill:var(--bgColor)}@media screen and (max-width:1199px){.button-play--small{font-size:12.6px}}@media screen and (max-width:991px){.button-play--small{font-size:11.34px}}@media screen and (max-width:767px){.button-play--small{font-size:10.206px}}@media screen and (max-width:575px){.button-play--small{font-size:9.1854px}}.logotype{display:block}.logotype__image{width:auto;height:calc(10rem * .4764595103578154)}.search{display:flex;align-items:center}@media screen and (max-width:1599px){.search{justify-content:flex-end}}.search__input{display:none;border:1px solid var(--mainColor);font-family:Roboto,sans-serif;font-size:16px;line-height:1.3em;height:2.5em;padding-left:.65em;margin-right:.5em}@media screen and (max-width:1199px){.search__input{font-size:14.4px}}@media screen and (max-width:991px){.search__input{font-size:12.96px}}@media screen and (max-width:767px){.search__input{font-size:11.664px;display:block}}@media screen and (max-width:575px){.search__input{font-size:10.4976px}}.search__button{font-family:Roboto,sans-serif;font-size:14px;line-height:1.3em;height:3em;width:3em;background:var(--btnColor);display:flex;justify-content:center;align-items:center}@media screen and (max-width:1199px){.search__button{font-size:12.6px}}@media screen and (max-width:991px){.search__button{font-size:11.34px}}@media screen and (max-width:767px){.search__button{font-size:10.206px}}@media screen and (max-width:575px){.search__button{font-size:9.1854px}}.search__button:active{transform:scale(.97)}.search__icon{height:55%;width:55%}.sub-menu{position:absolute;top:100%;z-index:10;left:0;width:-webkit-max-content;width:-moz-max-content;width:max-content;min-width:100%;display:none;background:var(--bgColor)}.sub-menu__link{font-family:Roboto,sans-serif;font-size:16px;line-height:1.3em;display:block;color:var(--mainColor);text-decoration:none;padding:.2em .8em;margin:.2em 0}@media screen and (max-width:1199px){.sub-menu__link{font-size:14.4px}}@media screen and (max-width:991px){.sub-menu__link{font-size:12.96px}}@media screen and (max-width:767px){.sub-menu{display:block;position:static;border-top:1px solid var(--mainColor);background:var(--mainColor)}.sub-menu__link{font-size:11.664px}}@media screen and (max-width:575px){.sub-menu__link{font-size:10.4976px}}@media screen and (max-width:767px){.sub-menu__link{color:var(--bgColor);padding:.4em .8em;margin:0;font-family:Roboto,sans-serif;font-size:24px;line-height:1.3em}}@media screen and (max-width:767px) and (max-width:1199px){.sub-menu__link{font-size:21.6px}}@media screen and (max-width:767px) and (max-width:991px){.sub-menu__link{font-size:19.44px}}@media screen and (max-width:767px) and (max-width:767px){.sub-menu__link{font-size:17.496px}}@media screen and (max-width:767px) and (max-width:575px){.sub-menu__link{font-size:15.7464px}}.sub-menu__link:hover{-webkit-text-decoration-color:var(--btnColor);text-decoration-color:var(--btnColor);color:var(--mainColor)}.navigation__item{margin:0 .5em;position:relative}.navigation__item:hover .sub-menu{display:block}.navigation__item:first-of-type .navigation__link{margin-left:0}.navigation__item:last-of-type .navigation__link{margin-right:0}.navigation__list{display:flex}@media screen and (max-width:767px){.sub-menu__link:hover{color:var(--bgColor)}.navigation__item{border-top:1px solid var(--mainColor);border-left:1px solid var(--mainColor);border-right:1px solid var(--mainColor)}.navigation__item:last-of-type{border-bottom:1px solid var(--mainColor)}.navigation__item-inner{display:flex;justify-content:space-between}.navigation__list{flex-direction:column;width:calc(100% - 30px);max-width:350px}}.navigation__link{font-family:Roboto,sans-serif;font-size:19px;line-height:1.3em;color:var(--mainColor);display:block;text-transform:uppercase;text-decoration:none;padding:.5em .8em}@media screen and (max-width:1199px){.navigation__link{font-size:17.1px}}@media screen and (max-width:991px){.navigation__item{margin:0}.navigation__link{font-size:15.39px;padding:.2em .4em}}@media screen and (max-width:767px){.navigation__link{font-size:13.851px;width:100%}}@media screen and (max-width:575px){.navigation__link{font-size:12.4659px}}.navigation__link-icon{display:none}@media screen and (max-width:767px){.navigation__link-icon{display:block;position:relative;height:3em;width:3em;min-height:3em;min-width:3em;background:var(--mainColor)}.navigation__link-icon svg{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);height:1.5em;width:1.5em;min-height:1.5em;min-width:1.5em;fill:var(--bgColor);transition:transform .3s}.navigation__link-icon--active svg{transform:translate(-50%,-50%) rotate(180deg)}.navigation__link{font-family:Roboto,sans-serif;font-size:28px;line-height:1.3em}.navigation__link--sub::after{content:'';height:1em;background:url(../img/svg/down-arrow.svg) center center/contain no-repeat}}@media screen and (max-width:767px) and (max-width:1199px){.navigation__link{font-size:25.2px}}@media screen and (max-width:767px) and (max-width:991px){.navigation__link{font-size:22.68px}}@media screen and (max-width:767px) and (max-width:767px){.navigation__link{font-size:20.412px}}@media screen and (max-width:767px) and (max-width:575px){.navigation__link{font-size:18.3708px}}.navigation__link:hover{-webkit-text-decoration-color:var(--btnColor);text-decoration-color:var(--btnColor);color:var(--mainColor)}@media screen and (max-width:767px){.navigation__inner{position:fixed;left:0;width:100%;background:var(--bgColor);transition:transform .3s;transform:translateY(150%);display:flex;align-items:flex-start;justify-content:center;padding-top:2rem;padding-bottom:2rem;overflow:auto;z-index:0}.navigation__inner--opened{z-index:6;transform:translateY(0)}}.mobile{flex-direction:column;align-items:center;font-size:10px;padding:.5em;width:4.2em;display:none}@media screen and (max-width:767px){.mobile{display:flex}.header{box-sizing:border-box}}.mobile__line{font-size:1em;display:block;background:var(--mainColor);height:.3em;width:3.2em;transition:transform .3s;transform-origin:50% 50%}.mobile__line:nth-of-type(1){transform:translateY(-150%)}.mobile__line:nth-of-type(3){transform:translateY(150%)}.mobile--active .mobile__line{background:var(--btnColor)}.mobile--active .mobile__line:nth-of-type(1){transform:translateY(100%) rotate(45deg)}.mobile--active .mobile__line:nth-of-type(2){transform:scale(0)}.mobile--active .mobile__line:nth-of-type(3){transform:translateY(-100%) rotate(-45deg)}.header{border-bottom:1px solid rgba(var(--mainColor),.7);background:var(--bgColor);border-bottom:1px solid var(--mainColor)}.header--fixed{top:0;left:0;position:fixed;z-index:7;width:100%;transform:translateY(-150%)}.header--fixed .search{display:none}.header--visible{transform:translateY(0);transition:transform .3s}.header__sidebar{display:flex}.h-contacts{margin-right:15px}@media screen and (max-width:1599px){.header__sidebar{flex-direction:column}.h-contacts{margin-right:0;margin-bottom:15px}}.h-contacts__link{font-family:Roboto,sans-serif;font-size:19px;line-height:1.3em;display:flex;align-items:center}@media screen and (max-width:1199px){.h-contacts__link{font-size:17.1px}}@media screen and (max-width:991px){.h-contacts__link{font-size:15.39px}}@media screen and (max-width:767px){.h-contacts__link{font-size:13.851px}}@media screen and (max-width:575px){.h-contacts__link{font-size:12.4659px}}.h-contacts__link:hover{color:var(--mainColor)}.h-contacts__link svg{font-size:1em;max-width:1em;max-height:1em;height:1em;margin-right:.5em;width:auto;fill:var(--btnColor)}.contacts-tabs__inner{padding:22px 0}.contacts-tabs__list{display:flex;justify-content:space-evenly}.c-tab{margin:0 8px;position:relative;padding:0 25px}.c-tab__inner{font-family:Roboto,sans-serif;font-size:14px;line-height:1.3em;display:flex;flex-direction:column;align-items:center}@media screen and (max-width:1199px){.c-tab{padding:0 15px}.c-tab__inner{font-size:12.6px}}@media screen and (max-width:991px){.c-tab__inner{font-size:11.34px}}@media screen and (max-width:767px){.c-tab__inner{font-size:10.206px}}@media screen and (max-width:575px){.c-tab__inner{font-size:9.1854px}}.c-tab__title{font-family:Roboto,sans-serif;font-size:16px;line-height:1.3em;font-weight:600;margin-bottom:.7em;text-align:center}@media screen and (max-width:1199px){.c-tab__title{font-size:14.4px}}@media screen and (max-width:991px){.c-tab__title{font-size:12.96px}}@media screen and (max-width:767px){.c-tab__title{font-size:11.664px}}@media screen and (max-width:575px){.c-tab__title{font-size:10.4976px}}.c-tab__link{font-family:Roboto,sans-serif;font-size:16px;line-height:1.3em;padding-left:.5em;color:var(--mainColor);display:flex;align-items:center}@media screen and (max-width:1199px){.c-tab__link{font-size:14.4px}}@media screen and (max-width:991px){.c-tab__link{font-size:12.96px}}@media screen and (max-width:767px){.c-tab__link{font-size:11.664px}}@media screen and (max-width:575px){.c-tab__link{font-size:10.4976px}}.c-tab__link:hover{color:var(--mainColor);-webkit-text-decoration-color:var(--btnColor);text-decoration-color:var(--btnColor)}.c-tab__link svg{max-height:1em;max-width:1em;height:1em;width:auto;margin-right:.5em;fill:var(--btnColor)}.c-tab__button{display:block;opacity:0;font-weight:500;color:var(--mainColor);margin-top:.5em;font-family:Roboto,sans-serif;font-size:14px;line-height:1.3em;padding-left:.5714285714285714em}@media screen and (max-width:1199px){.c-tab__button{font-size:12.6px}}@media screen and (max-width:991px){.c-tab__button{font-size:11.34px}}@media screen and (max-width:767px){.c-tab__button{font-size:10.206px}}@media screen and (max-width:575px){.c-tab__button{font-size:9.1854px}}.c-tab__button:hover{color:var(--mainColor);-webkit-text-decoration-color:var(--btnColor);text-decoration-color:var(--btnColor)}.c-tab:hover .c-tab__button{opacity:1}.index-form{background:var(--mainColor)}.index-form__form{display:grid;grid-template-columns:2fr 2fr 2fr 1fr;gap:0 15px}@media screen and (max-width:767px){.index-form__form{grid-template-rows:1fr 1fr;grid-template-columns:1fr 1fr;gap:15px}}@media screen and (max-width:425px){.index-form__form{grid-template-columns:repeat(1,1fr);max-width:270px;margin:0 auto}}.index-form__input{margin-right:0}.index-form__title{font-family:Roboto,sans-serif;font-size:28px;line-height:1.3em;color:var(--bgColor);text-transform:uppercase;font-weight:700;margin-bottom:.5em;text-align:center}@media screen and (max-width:1199px){.index-form__title{font-size:25.2px}}@media screen and (max-width:991px){.index-form__title{font-size:22.68px}}@media screen and (max-width:767px){.index-form__title{font-size:20.412px}}@media screen and (max-width:575px){.index-form__title{font-size:18.3708px}}.index-form__subtitle{font-family:Roboto,sans-serif;font-size:24px;line-height:1.3em;color:var(--bgColor);text-transform:uppercase;margin-bottom:.5em;text-align:center}@media screen and (max-width:1199px){.index-form__subtitle{font-size:21.6px}}@media screen and (max-width:991px){.index-form__subtitle{font-size:19.44px}}@media screen and (max-width:767px){.index-form__subtitle{font-size:17.496px}}@media screen and (max-width:575px){.index-form__subtitle{font-size:15.7464px}}.index-form__label{font-family:Roboto,sans-serif;font-size:14px;line-height:1.3em;text-align:center;margin-top:.7em;color:var(--bgColor)}@media screen and (max-width:1199px){.index-form__label{font-size:12.6px}}@media screen and (max-width:991px){.index-form__label{font-size:11.34px}}@media screen and (max-width:767px){.index-form__label{font-size:10.206px}}@media screen and (max-width:575px){.index-form__label{font-size:9.1854px}}.index-form__button{justify-content:center}.form__title{font-family:Roboto,sans-serif;font-size:19px;line-height:1.3em;text-align:center;text-transform:uppercase;margin-bottom:1em}@media screen and (max-width:1199px){.form__title{font-size:17.1px}}@media screen and (max-width:991px){.form__title{font-size:15.39px}}@media screen and (max-width:767px){.form__title{font-size:13.851px}}@media screen and (max-width:575px){.form__title{font-size:12.4659px}}.form--grid-3{display:grid;max-width:700px;grid-template-columns:repeat(3,1fr);gap:1em;margin:0 auto}@media screen and (max-width:767px){.form--grid-3{grid-template-columns:repeat(2,1fr)}}.form--grid-3 .form__input{margin-right:0}.form--grid-3 .form__button{display:flex;justify-content:center;grid-column:3/span 1}@media screen and (max-width:767px){.form--grid-3 .form__button{grid-column:2/span 1}}@media screen and (max-width:425px){.form--grid-3{grid-template-columns:repeat(1,1fr);max-width:270px}.form--grid-3 .form__button{grid-column:1/span 1}}.form__input{font-family:Roboto,sans-serif;font-size:16px;line-height:1.3em;padding:1em 1.5em;outline:0;border:none;margin-right:.5em;resize:none}.form__input--border{border:1px solid var(--mainColor)}.form__button{padding:1em 1.5em!important;color:var(--bgColor)}.banner{display:flex}.banner,.banner__image,.banner__inner,.banner__link{min-height:36rem;height:40rem}@media screen and (max-width:1199px){.form__input{font-size:14.4px}.banner,.banner__image,.banner__inner,.banner__link{min-height:31rem;height:35rem}}@media screen and (max-width:991px){.form__input{font-size:12.96px}.banner,.banner__image,.banner__inner,.banner__link{min-height:24rem;height:27rem}}@media screen and (max-width:767px){.form__input{font-size:11.664px}.banner,.banner__image,.banner__inner,.banner__link{min-height:19rem;height:23rem}}@media screen and (max-width:575px){.form__input{font-size:10.4976px}.banner,.banner__image,.banner__inner,.banner__link{min-height:13rem;height:17rem}}.banner__link{display:block;height:100%}.banner__label{font-family:Roboto,sans-serif;font-size:16px;line-height:1.3em;color:var(--bgColor);margin-top:1em}@media screen and (max-width:1199px){.banner__label{font-size:14.4px}}@media screen and (max-width:991px){.banner__label{font-size:12.96px}}@media screen and (max-width:767px){.banner__label{font-size:11.664px}}@media screen and (max-width:575px){.banner__label{font-size:10.4976px}}.banner__inner{width:40%;padding:3rem;background:var(--mainColor);display:flex;flex-direction:column;justify-content:flex-start;align-items:flex-start}.banner__image{-o-object-fit:cover;object-fit:cover}.banner__slider{width:100%;position:relative}
    </style>
</head>
<body>

@include('modules.header')

@yield('content')

@include('modules.footer')

</body>
</html>