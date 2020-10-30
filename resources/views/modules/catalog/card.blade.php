<div class="card card--zoom" data-card-tab="{{ $car->tabName }}">
    <a class="card__link" href="{{ url("cars/$car->id-" . \Illuminate\Support\Str::slug($car->name)) }}">
        <div class="card__tags">
            <span class="card__tag tag tag--blue">new</span>
        </div>
        <img class="card__image lazy" src="{{ asset('storage/' . $car->images[0]) }}" alt="..." />
    </a>
    </a>
    <ul class="card-slider card__slider" style="">
        @foreach(json_decode($car->images) as $image)
            @if ($loop->iteration > 3)
                @break
            @endif
            <li class="card-slider__item"><img class="card-slider__image" src="{{ asset('storage/' . $image) }}" alt="">
            </li>
        @endforeach
    </ul>
    <div class="card__inner">
        <div class="card__body">
            <h4 class="card__title">{{ $car->name }}</h4>
            <p class="card__price">$ {{ $car->price }}</p>
            <ul class="card-list">
                <li class="card-list__item">
                    <svg id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512"
                        xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="m374 127h36c10.752 0 19.5-8.748 19.5-19.5v-88c0-10.752-8.748-19.5-19.5-19.5h-36c-10.752 0-19.5 8.748-19.5 19.5v21.5h-10.402c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h10.402v15h-58.708c.458-2.432.708-4.937.708-7.5s-.25-5.068-.708-7.5h16.63c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-22.767c-7.273-10.846-19.643-18-33.655-18s-26.382 7.154-33.656 18h-64.844v-21.5c0-10.752-8.748-19.5-19.5-19.5h-36c-10.752 0-19.5 8.748-19.5 19.5v12.185c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-12.185c0-2.481 2.019-4.5 4.5-4.5h36c2.481 0 4.5 2.019 4.5 4.5v88c0 2.481-2.019 4.5-4.5 4.5h-36c-2.481 0-4.5-2.019-4.5-4.5v-44c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v44c0 10.752 8.748 19.5 19.5 19.5h36c10.752 0 19.5-8.748 19.5-19.5v-21.5h64.844c2.955 4.406 6.75 8.201 11.156 11.156v317.688c-4.406 2.955-8.201 6.75-11.156 11.156h-64.844v-21.5c0-10.752-8.748-19.5-19.5-19.5h-36c-10.752 0-19.5 8.748-19.5 19.5v88c0 10.752 8.748 19.5 19.5 19.5h36c10.752 0 19.5-8.748 19.5-19.5v-21.5h64.844c7.274 10.846 19.644 18 33.656 18s26.382-7.154 33.656-18h64.844v21.5c0 10.752 8.748 19.5 19.5 19.5h36c10.752 0 19.5-8.748 19.5-19.5v-88c0-10.752-8.748-19.5-19.5-19.5h-36c-10.752 0-19.5 8.748-19.5 19.5v21.5h-64.844c-2.955-4.406-6.75-8.201-11.156-11.156v-30.23c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v24.094c-2.432-.458-4.937-.708-7.5-.708s-5.068.25-7.5.708v-305.416c2.432.458 4.937.708 7.5.708s5.068-.25 7.5-.708v247.833c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-253.969c4.406-2.955 8.201-6.75 11.156-11.156h64.844v21.5c0 10.752 8.748 19.5 19.5 19.5zm-231.5 365.5c0 2.481-2.019 4.5-4.5 4.5h-36c-2.481 0-4.5-2.019-4.5-4.5v-88c0-2.481 2.019-4.5 4.5-4.5h36c2.481 0 4.5 2.019 4.5 4.5zm15-36.5v-15h58.708c-.458 2.432-.708 4.937-.708 7.5s.25 5.068.708 7.5zm212-51.5c0-2.481 2.019-4.5 4.5-4.5h36c2.481 0 4.5 2.019 4.5 4.5v88c0 2.481-2.019 4.5-4.5 4.5h-36c-2.481 0-4.5-2.019-4.5-4.5zm-15 36.5v15h-58.708c.458-2.432.708-4.937.708-7.5s-.25-5.068-.708-7.5zm-73 7.5c0 14.061-11.439 25.5-25.5 25.5s-25.5-11.439-25.5-25.5 11.439-25.5 25.5-25.5 25.5 11.439 25.5 25.5zm-124-377.5v-15h58.708c-.458 2.432-.708 4.937-.708 7.5s.25 5.068.708 7.5zm73-7.5c0-14.061 11.439-25.5 25.5-25.5s25.5 11.439 25.5 25.5-11.439 25.5-25.5 25.5-25.5-11.439-25.5-25.5zm139-44c0-2.481 2.019-4.5 4.5-4.5h36c2.481 0 4.5 2.019 4.5 4.5v88c0 2.481-2.019 4.5-4.5 4.5h-36c-2.481 0-4.5-2.019-4.5-4.5z" />
                        </g>
                    </svg>
                    <div class="card-list__text">{{ $car->gear }}</div>
                </li>
                <li class="card-list__item">
                    <?xml version = "1.0" encoding = "iso-8859-1"?>
                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 383.9 383.9"
                        style="enable-background:new 0 0 383.9 383.9;" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M344.1,50H320V30.9c0-5.5-4.5-10-10-10s-10,4.5-10,10V50h-98V30.9c0-5.5-4.5-10-10-10s-10,4.5-10,10V50H83V30.9
                                                            c0-5.5-4.5-10-10-10s-10,4.5-10,10V50H39.9C17.9,50,0,68.5,0,90.5V323c0,22.1,17.8,40,39.9,40H344c22.1,0,39.9-17.9,39.9-39.9
                                                            V90.5C384,68.5,366.1,50,344.1,50z M364,323c0,11-8.8,19.9-19.8,20h-0.1H39.9c-11,0-19.9-8.9-19.9-19.9V323V90.5
                                                            C20,79.4,28.9,70,39.9,70H63v14.5c0,5.5,4.5,10,10,10s10-4.5,10-10V70h99v14.5c0,5.5,4.5,10,10,10s10-4.5,10-10V70h98v14.5
                                                            c0,5.5,4.5,10,10,10s10-4.5,10-10V70h24.1c11.1,0,19.9,9.5,19.9,20.5V323z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M165.7,135h-17.5c-5.5,0-10,4.5-10,10s4.5,10,10,10h17.5c5.5,0,10-4.5,10-10S171.2,135,165.7,135z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M235.3,135h-17.5c-5.5,0-10,4.5-10,10s4.5,10,10,10h17.5c5.5,0,10-4.5,10-10S240.9,135,235.3,135z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M305.5,135H288c-5.5,0-10,4.5-10,10s4.5,10,10,10h17.5c5.5,0,10-4.5,10-10S311,135,305.5,135z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M165.7,204h-17.5c-5.5,0-10,4.5-10,10s4.5,10,10,10h17.5c5.5,0,10-4.5,10-10S171.2,204,165.7,204z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M95.6,204H78c-5.5,0-10,4.5-10,10s4.5,10,10,10h17.5c5.5,0,10-4.5,10-10S101.1,204,95.6,204z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M235.3,204h-17.5c-5.5,0-10,4.5-10,10s4.5,10,10,10h17.5c5.5,0,10-4.5,10-10S240.9,204,235.3,204z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M305.5,204H288c-5.5,0-10,4.5-10,10s4.5,10,10,10h17.5c5.5,0,10-4.5,10-10S311,204,305.5,204z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M165.7,272h-17.5c-5.5,0-10,4.5-10,10s4.5,10,10,10h17.5c5.5,0,10-4.5,10-10S171.2,272,165.7,272z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M95.6,272H78c-5.5,0-10,4.5-10,10s4.5,10,10,10h17.5c5.5,0,10-4.5,10-10S101.1,272,95.6,272z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M235.3,272h-17.5c-5.5,0-10,4.5-10,10s4.5,10,10,10h17.5c5.5,0,10-4.5,10-10S240.9,272,235.3,272z" />
                            </g>
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
                        <g>
                        </g>
                    </svg>
                    <div class="card-list__text">{{ $car->year }}</div>
                </li>
                <li class="card-list__item">
                    <?xml version = "1.0" encoding = "iso-8859-1"?>
                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path d="M366.292,215.99L241.417,325.781c-0.167,0.146-0.333,0.292-0.479,0.448c-4.042,4.021-6.271,9.385-6.271,15.104
                                                                c0,11.76,9.563,21.333,21.333,21.333c5.667,0,11.021-2.208,15.563-6.75l109.792-124.875c3.708-4.219,3.5-10.604-0.479-14.583
                                                                C376.896,212.49,370.542,212.281,366.292,215.99z" />
                                    <path
                                        d="M256,85.333c-141.167,0-256,114.844-256,256c0,26.479,4.104,52.688,12.167,77.917c1.417,4.417,5.521,7.417,10.167,7.417
                                                                h467.333c4.646,0,8.75-3,10.167-7.417C507.896,394.021,512,367.813,512,341.333C512,200.177,397.167,85.333,256,85.333z
                                                                M458.667,352h31.26c-0.824,18.04-3.237,35.947-8.177,53.333H30.25c-4.94-17.387-7.353-35.293-8.177-53.333h31.26
                                                                C59.229,352,64,347.229,64,341.333c0-5.896-4.771-10.667-10.667-10.667h-31.46c1.581-34.919,10.68-67.865,25.948-97.208
                                                                l27.324,15.781c1.688,0.969,3.521,1.427,5.333,1.427c3.667,0,7.271-1.906,9.229-5.333c2.958-5.104,1.208-11.625-3.896-14.573
                                                                l-27.263-15.746c18.323-28.539,42.602-52.816,71.142-71.138l15.746,27.28c1.958,3.417,5.563,5.333,9.229,5.333
                                                                c1.813,0,3.646-0.458,5.333-1.427c5.104-2.948,6.854-9.469,3.896-14.573l-15.777-27.332c29.345-15.27,62.293-24.37,97.215-25.951
                                                                v31.46c0,5.896,4.771,10.667,10.667,10.667s10.667-4.771,10.667-10.667v-31.46c34.922,1.581,67.87,10.681,97.215,25.951
                                                                l-15.777,27.332c-2.958,5.104-1.208,11.625,3.896,14.573c1.688,0.969,3.521,1.427,5.333,1.427c3.667,0,7.271-1.917,9.229-5.333
                                                                l15.746-27.28c28.54,18.322,52.819,42.599,71.142,71.138l-27.263,15.746c-5.104,2.948-6.854,9.469-3.896,14.573
                                                                c1.958,3.427,5.563,5.333,9.229,5.333c1.812,0,3.646-0.458,5.333-1.427l27.324-15.781c15.268,29.344,24.367,62.289,25.948,97.208
                                                                h-31.46c-5.896,0-10.667,4.771-10.667,10.667C448,347.229,452.771,352,458.667,352z" />
                                </g>
                            </g>
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
                        <g>
                        </g>
                    </svg>

                    <div class="card-list__text">{{ $car->mileage }} км.</div>
                </li>
                <li class="card-list__item">
                    <?xml version = "1.0" encoding = "iso-8859-1"?>
                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480 480"
                        style="enable-background:new 0 0 480 480;" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M300,48H140c-4.418,0-8,3.582-8,8v64c0,4.418,3.582,8,8,8h160c4.418,0,8-3.582,8-8V56C308,51.582,304.418,48,300,48z
                                                            M172,112h-24V64h24V112z M212,112h-24V64h24V112z M252,112h-24V64h24V112z M292,112h-24V64h24V112z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M457.656,106.344l-48-48l-11.312,11.312L444,115.312v15.744l-43.576,21.784c-2.712,1.355-4.425,4.128-4.424,7.16v48
                                                    c0,4.418,3.582,8,8,8h24v136c0,8.837-7.163,16-16,16s-16-7.163-16-16v-9.536c-0.018-21.236-17.228-38.446-38.464-38.464H356
                                                    V56.256C355.969,25.199,330.801,0.031,299.744,0H140.256C109.199,0.031,84.031,25.199,84,56.256V304H60c-22.091,0-40,17.909-40,40
                                                    c0,22.091,17.909,40,40,40h24v16H60c-4.418,0-8,3.582-8,8v64c0,4.418,3.582,8,8,8h320c4.418,0,8-3.582,8-8v-64
                                                    c0-4.418-3.582-8-8-8h-24v-80h1.536c12.399,0.018,22.446,10.065,22.464,22.464V352c0,17.673,14.327,32,32,32
                                                    c17.673,0,32-14.327,32-32V216h8c4.418,0,8-3.582,8-8v-96C460,109.878,459.156,107.844,457.656,106.344z M100,56.256
                                                    c0.031-22.22,18.036-40.225,40.256-40.256h159.488c22.22,0.031,40.225,18.036,40.256,40.256V400H100V56.256z M60,368
                                                    c-13.255,0-24-10.745-24-24s10.745-24,24-24h24v48H60z M372,416v48H68v-48H372z M444,200h-32v-35.056l32-16V200z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="260" y="144" width="16" height="16" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="292" y="144" width="16" height="16" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="132" y="144" width="32" height="16" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M220,216c-39.764,0-72,32.235-72,72c0,39.764,32.236,72,72,72c39.765,0,72-32.236,72-72
                                                C291.956,248.254,259.746,216.044,220,216z M220,344c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56
                                                c30.928,0,56,25.072,56,56C275.96,318.911,250.911,343.96,220,344z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M242.631,273.383c-0.002-0.002-0.005-0.005-0.007-0.007l-16.968-16.968c-3.124-3.123-8.188-3.123-11.312,0l-16.968,16.968
                                                c-12.499,12.495-12.502,32.756-0.007,45.255s32.756,12.502,45.255,0.007C255.123,306.143,255.126,285.881,242.631,273.383z
                                                M231.312,307.312L231.312,307.312c-6.329,6.046-16.295,6.046-22.624,0c-6.246-6.248-6.246-16.376,0-22.624L220,273.376
                                                l11.312,11.312C237.558,290.936,237.558,301.064,231.312,307.312z" />
                            </g>
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
                        <g>
                        </g>
                    </svg>

                    <div class="card-list__text">{{ $car->fuel }}</div>
                </li>
                <li class="card-list__item">
                    <svg id="Layer_1" enable-background="new 0 0 511.982 511.982" height="512"
                        viewBox="0 0 511.982 511.982" width="512" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <g>
                                <path
                                    d="m493.606 82.526-53.556-28.539c-6.543-3.485-11.585-5.919-19.482-8.793-7.906-2.877-13.331-4.253-20.577-5.786l-59.369-12.564c-16.638-3.521-31.895 4.011-37.102 18.316l-10.26 28.192c-1.889 5.189.787 10.928 5.977 12.816l5.593 2.036-4.929 19.352c-12.997-7.295-27.974-11.463-43.909-11.463s-30.913 4.168-43.91 11.464l-4.929-19.352 5.592-2.035c2.492-.906 4.522-2.767 5.643-5.17 1.121-2.404 1.241-5.154.334-7.646l-10.261-28.194c-5.207-14.306-20.464-21.839-37.102-18.316l-59.368 12.564c-7.247 1.533-12.672 2.91-20.577 5.786-7.897 2.875-12.939 5.309-19.482 8.794l-53.555 28.538c-15.01 7.997-21.855 23.574-16.648 37.878l10.261 28.191c1.478 4.062 5.313 6.583 9.398 6.583 1.135 0 2.291-.195 3.419-.605l5.592-2.035 8.744 18.16c-4.55 2.211-6.784 7.55-5.015 12.408 1.478 4.062 5.313 6.583 9.398 6.583 1.135 0 2.291-.195 3.419-.605l.893-.325 8.744 18.159c-4.55 2.211-6.783 7.55-5.015 12.408 1.478 4.062 5.313 6.583 9.398 6.583 1.135 0 2.291-.195 3.419-.606l.893-.325 8.743 18.159c-4.55 2.212-6.783 7.55-5.014 12.408 1.478 4.062 5.313 6.583 9.398 6.583 1.135 0 2.29-.195 3.419-.605l.893-.325 8.743 18.159c-4.55 2.212-6.783 7.551-5.014 12.409 1.478 4.062 5.313 6.583 9.398 6.583 1.135 0 2.291-.195 3.419-.605l.893-.325 14.469 30.049c-1.836 3.272-2.859 6.996-2.863 10.853v18.756l-24.198 15.85c-6.332 4.142-10.117 11.127-10.124 18.695v30.889c0 12.325 10.028 22.353 22.354 22.353h43.789l17.26 29.896c3.982 6.927 11.387 11.234 19.334 11.241h109.502c30.756 0 57.72-16.515 72.512-41.138h49.996c12.326 0 22.354-10.027 22.354-22.353v-30.9c-.007-7.559-3.792-14.544-10.118-18.682l-24.204-15.854v-18.767c-.004-3.852-1.028-7.575-2.862-10.844l14.468-30.047.893.325c1.129.41 2.284.605 3.419.605 4.084 0 7.92-2.522 9.398-6.583 1.768-4.858-.464-10.196-5.014-12.408l8.743-18.159.893.325c1.129.41 2.284.605 3.419.605 4.084 0 7.92-2.522 9.398-6.583 1.768-4.858-.464-10.196-5.014-12.408l8.743-18.159.893.325c1.129.411 2.284.606 3.419.606 4.084 0 7.92-2.522 9.398-6.583 1.769-4.858-.465-10.197-5.015-12.408l8.744-18.16.893.325c1.129.41 2.284.605 3.419.605 4.084 0 7.92-2.522 9.398-6.583 1.769-4.858-.465-10.197-5.015-12.408l8.744-18.16 5.592 2.035c1.107.402 2.265.603 3.42.603 1.446 0 2.89-.313 4.226-.937 2.404-1.121 4.264-3.151 5.171-5.644l10.261-28.191c5.211-14.302-1.636-29.878-16.644-37.875zm-167.615 103.566c0 38.598-31.402 70-70 70s-70-31.402-70-70 31.402-70 70-70 70 31.402 70 70zm-243.538-63.142c-1.889-5.19-7.629-7.864-12.817-5.978l-42.273 15.386-6.84-18.794c-2.005-5.509 2.201-10.693 7.259-13.389l53.554-28.535c5.994-3.193 10.054-5.152 16.918-7.65 6.872-2.501 11.24-3.609 17.878-5.015l59.368-12.564c5.605-1.185 12.161.082 14.167 5.59l6.841 18.795-42.279 15.388c-5.189 1.89-7.866 7.628-5.977 12.817 1.889 5.19 7.625 7.867 12.817 5.977l27.196-9.899 4.961 19.478-135.22 49.216-8.72-18.11 27.19-9.896c5.19-1.889 7.865-7.627 5.977-12.817zm95.426 18.476c-4.385 7.639-7.678 15.978-9.674 24.805l-92.759 33.762-8.72-18.11zm-11.859 46.883c.17 6.977 1.136 13.759 2.813 20.259l-75.949 27.643-8.719-18.109zm9.952 38.946c3.174 6.146 7.038 11.879 11.485 17.102l-77.133 28.074-8.719-18.109zm28.127 32.33c3.7 2.62 7.608 4.965 11.69 7.012-2.774.594-5.411 1.707-7.795 3.318l-77.372 44.671-11.577-24.043zm85.581 206.413c-35.585 0-64.536-28.951-64.536-64.536s28.951-64.536 64.536-64.536 64.536 28.951 64.536 64.536-28.951 64.536-64.536 64.536zm-84.536-64.536c0 .582.032 1.157.044 1.736-2.1.477-4.252.728-6.395.728-15.908 0-28.85-12.942-28.85-28.85s12.942-28.851 28.85-28.851c7.805 0 15.116 3.116 20.472 8.528-8.913 13.393-14.121 29.452-14.121 46.709zm208.327-11.8c.993.649 1.071 1.67 1.071 1.957v30.889c0 1.297-1.056 2.353-2.354 2.353h-41.292c2.146-7.436 3.32-15.281 3.32-23.398 0-46.613-37.923-84.536-84.536-84.536-22.151 0-42.328 8.575-57.417 22.566-8.947-8.441-20.827-13.266-33.47-13.266-26.936 0-48.85 21.914-48.85 48.851 0 26.936 21.914 48.85 48.85 48.85 3.061 0 6.131-.313 9.151-.891 4.492 17.005 14.166 31.919 27.219 42.963h-54.977c-.808-.001-1.576-.464-2.013-1.225l-20.156-34.913c-1.787-3.094-5.088-5-8.661-5h-49.562c-1.298 0-2.354-1.056-2.354-2.353v-30.879c0-.297.079-1.317 1.077-1.971l28.724-18.814c2.821-1.848 4.521-4.993 4.521-8.365v-24.149c0-.635.318-1.494 1.225-2.016l85.357-49.281c.273-.157.539-.328.795-.511.4-.284.856-.429 1.357-.429h70.988c.5 0 .957.145 1.357.429.257.183.522.354.795.511l85.375 49.292c.889.511 1.207 1.37 1.208 1.994v24.16c0 3.372 1.7 6.518 4.521 8.365zm-32.11-75.076-77.372-44.672c-2.383-1.611-5.021-2.724-7.794-3.318 4.082-2.047 7.989-4.391 11.689-7.011l85.054 30.957zm20.298-42.155-77.133-28.074c4.447-5.223 8.311-10.956 11.485-17.102l74.367 27.067zm17.439-36.22-75.948-27.643c1.677-6.5 2.644-13.283 2.813-20.259l81.855 29.793zm17.439-36.218-92.759-33.762c-1.996-8.827-5.289-17.167-9.674-24.805l111.153 40.457zm17.44-36.219-135.221-49.218 4.961-19.478 138.98 50.585zm37.483-50.209-6.84 18.794-169.145-61.564 6.84-18.795c2.005-5.508 8.561-6.774 14.167-5.59l59.369 12.564c6.637 1.404 11.005 2.513 17.878 5.015 6.864 2.498 10.924 4.457 16.917 7.649l53.555 28.537c5.058 2.696 9.264 7.881 7.259 13.39z" />
                                <path
                                    d="m255.992 226.092c22.056 0 40-17.944 40-40s-17.944-40-40-40-40 17.944-40 40 17.944 40 40 40zm0-60c11.028 0 20 8.972 20 20s-8.972 20-20 20-20-8.972-20-20 8.971-20 20-20z" />
                                <path
                                    d="m303.779 391.462h-28.2c-5.523 0-10 4.478-10 10s4.477 10 10 10h28.2c5.523 0 10-4.478 10-10s-4.477-10-10-10z" />
                                <path
                                    d="m115.356 120.974c5.523 0 10-4.478 10-10s-4.477-10-10-10h-.007c-5.523 0-9.996 4.478-9.996 10s4.48 10 10.003 10z" />
                            </g>
                        </g>
                    </svg>
                    <div class="card-list__text">{{ $car->capacity }} л.</div>
                </li>
                <li class="card-list__item">
                    <?xml version = "1.0" encoding = "iso-8859-1"?>
                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 505.4 505.4"
                        style="enable-background:new 0 0 505.4 505.4;" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M437.1,233.45c14.8-10.4,24.6-27.7,24.6-47.2c0-31.9-25.8-57.7-57.7-57.7c-31.9,0-57.7,25.8-57.7,57.7
                                                            c0,19.5,9.7,36.8,24.6,47.2c-12.7,4.4-24.3,11.2-34.1,20c-13.5-11.5-29.4-20.3-46.8-25.5c21.1-12.8,35.3-36.1,35.3-62.6
                                                            c0-40.4-32.7-73.1-73.1-73.1c-40.4,0-73.1,32.8-73.1,73.1c0,26.5,14.1,49.8,35.3,62.6c-17.2,5.2-32.9,13.9-46.3,25.2
                                                            c-9.8-8.6-21.2-15.3-33.7-19.6c14.8-10.4,24.6-27.7,24.6-47.2c0-31.9-25.8-57.7-57.7-57.7s-57.7,25.8-57.7,57.7
                                                            c0,19.5,9.7,36.8,24.6,47.2C28.5,247.25,0,284.95,0,329.25v6.6c0,0.2,0.2,0.4,0.4,0.4h122.3c-0.7,5.5-1.1,11.2-1.1,16.9v6.8
                                                            c0,29.4,23.8,53.2,53.2,53.2h155c29.4,0,53.2-23.8,53.2-53.2v-6.8c0-5.7-0.4-11.4-1.1-16.9H505c0.2,0,0.4-0.2,0.4-0.4v-6.6
                                                            C505.2,284.85,476.8,247.15,437.1,233.45z M362.3,186.15c0-23,18.7-41.7,41.7-41.7s41.7,18.7,41.7,41.7
                                                            c0,22.7-18.3,41.2-40.9,41.7c-0.3,0-0.5,0-0.8,0s-0.5,0-0.8,0C380.5,227.45,362.3,208.95,362.3,186.15z M194.9,165.35
                                                            c0-31.5,25.6-57.1,57.1-57.1s57.1,25.6,57.1,57.1c0,30.4-23.9,55.3-53.8,57c-1.1,0-2.2,0-3.3,0c-1.1,0-2.2,0-3.3,0
                                                            C218.8,220.65,194.9,195.75,194.9,165.35z M59.3,186.15c0-23,18.7-41.7,41.7-41.7s41.7,18.7,41.7,41.7c0,22.7-18.3,41.2-40.9,41.7
                                                            c-0.3,0-0.5,0-0.8,0s-0.5,0-0.8,0C77.6,227.45,59.3,208.95,59.3,186.15z M125.5,320.15H16.2c4.5-42.6,40.5-76,84.2-76.3
                                                            c0.2,0,0.4,0,0.6,0s0.4,0,0.6,0c20.8,0.1,39.8,7.8,54.5,20.3C141.7,279.75,131,298.95,125.5,320.15z M366.8,359.95
                                                            c0,20.5-16.7,37.2-37.2,37.2h-155c-20.5,0-37.2-16.7-37.2-37.2v-6.8c0-62.1,49.6-112.9,111.3-114.7c1.1,0.1,2.3,0.1,3.4,0.1
                                                            s2.3,0,3.4-0.1c61.7,1.8,111.3,52.6,111.3,114.7V359.95z M378.7,320.15c-5.5-21.1-16-40-30.3-55.6c14.8-12.8,34-20.5,55-20.7
                                                            c0.2,0,0.4,0,0.6,0s0.4,0,0.6,0c43.7,0.3,79.7,33.7,84.2,76.3H378.7z" />
                            </g>
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
                        <g>
                        </g>
                    </svg>
                    <div class="card-list__text">1</div>
                </li>
            </ul>
            <p class="card__text">
                Машина находится на аукционе в США. Указана предполагаемая цена покупки без учета доставки, растаможки и аукционного сбора.
            </p>
            </p>
            <button class="card__button">Заказать</button>
        </div>
    </div>
</div>