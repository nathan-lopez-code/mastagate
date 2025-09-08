<x-layouts.main title="Nos services : MastaGate">

    <section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image:url('images/what-we-offers-bg-1.jpg');">
        <div class="opacity-extra-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-stretch justify-content-center small-screen">
                <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                    <h1 class="alt-font text-white opacity-6 margin-20px-bottom">Ce que nous offrons</h1>
                    <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Découvrez ci-dessous nos services</h2>
                </div>
                <div class="down-section text-center"><a href="#down-section" class="section-link">
                        <i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
            </div>
        </div>
    </section>
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-5 col-md-9 md-margin-7-rem-bottom">
                    <span class="alt-font margin-20px-bottom text-blue-night d-inline-block text-uppercase font-weight-500 letter-spacing-1px">DEVELOPPEMENT</span>
                    <h4 class="alt-font font-weight-600 text-extra-dark-gray w-95">
                        Site Web, Logiciel de Gestion et Application Mobile
                    </h4>
                    <p class="w-80 lg-w-95">
                        Nous mettons à votre disposition des Développeurs Fullstack pour développer vos
                        projets au mieux que ça soit dans le cadre de la présentation de vos produits tout
                        comme dans la gestion du système de vente de vos produits.
                    </p>
                    <a href="{{ route("contacts") }}" class="btn btn-medium btn-dark-gray margin-15px-top btn-round-edge section-link blue-night">Commander<i class="feather icon-feather-arrow-right icon-very-small right-icon"></i></a>
                </div>
                <div class="col-12 col-lg-7 col-md-9 padding-55px-lr md-padding-5px-left sm-padding-50px-right">
                    <figure class="image-back-offset-shadow position-right w-100">
                        <img class="border-radius-6px" src="{{ asset('images/services/service-2.jpg') }}" alt="">
                        <span class="bg-gradient-light-purple-light-orange border-radius-6px overlay"></span>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-gray">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-5 col-md-9 md-margin-7-rem-bottom">
                    <span class="alt-font margin-20px-bottom text-blue-night d-inline-block text-uppercase font-weight-500 letter-spacing-1px">PROJET</span>
                    <h4 class="alt-font font-weight-600 text-extra-dark-gray w-95">
                        Rédaction et Management des Projets
                    </h4>
                    <p class="w-80 lg-w-95">
                        Avez-vous un bon projet mais vous ne savez comment le coucher sur papier pour
                        convaincre vos investisseurs ? MastaGate vous assiste dans la rédaction de projet, la
                        conception de projet, l’étude de projet voire même la création des sociétés ou
                        organisations de toutes sortes.
                    </p>
                    <a href="{{ route('contacts') }}" class="btn btn-medium btn-dark-gray margin-15px-top btn-round-edge section-link blue-night">Commander<i class="feather icon-feather-arrow-right icon-very-small right-icon"></i></a>
                </div>
                <div class="col-12 col-lg-7 col-md-9 padding-55px-lr md-padding-5px-left sm-padding-50px-right">
                    <figure class="image-back-offset-shadow position-right w-100">
                        <img class="border-radius-6px" src="{{ asset('images/services/service-1.jpg') }}" alt="">
                        <span class="bg-gradient-light-purple-light-orange border-radius-6px overlay"></span>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-5 col-md-9 md-margin-7-rem-bottom">
                    <span class="alt-font margin-20px-bottom text-blue-night d-inline-block text-uppercase font-weight-500 letter-spacing-1px">COMMERCE GENERAL</span>

                    <h4 class="alt-font font-weight-600 text-extra-dark-gray w-95">
                        Agriculture, Formation et Transport
                    </h4>
                    <p class="w-80 lg-w-95">
                        S’intéressant à tout ce qui contribue au développement de la société, MastaGate est
                        une société qui se donne à plusieurs domaines notamment le Transport, l’Agriculture, la
                        santé …
                    </p>
                    <a href="{{ route('contacts') }}" class="btn btn-medium btn-dark-gray margin-15px-top btn-round-edge section-link blue-night">Commander<i class="feather icon-feather-arrow-right icon-very-small right-icon"></i></a>
                </div>
                <div class="col-12 col-lg-7 col-md-9 padding-55px-lr md-padding-5px-left sm-padding-50px-right">
                    <figure class="image-back-offset-shadow position-right w-100">
                        <img class="border-radius-6px" src="{{ asset('images/services/service-3.jpg') }}" alt="">
                        <span class="bg-gradient-light-purple-light-orange border-radius-6px overlay"></span>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    {{--<section class="bg-light-gray wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center margin-5-rem-bottom sm-margin-3-rem-bottom">
                    <span class="alt-font margin-10px-bottom d-inline-block text-uppercase font-weight-500 text-gradient-sky-blue-pink letter-spacing-1px">Unlimited Possibilities</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px">Research Strategy</h5>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-1 justify-content-center">
                <!-- start services item -->
                <div class="col col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                    <div class="feature-box text-left box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                        <div class="feature-box-content">
                            <span class="margin-15px-bottom d-block text-extra-medium">01</span>
                            <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Developing strategy</h6>
                            <p>Lorem ipsum is simply dummy text of the printing typesetting lorem ipsum been dummy text.</p>
                            <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                            <a class="text-small font-weight-500 text-uppercase alt-font d-block text-extra-dark-gray" href="about-me.html">More info<i class="feather icon-feather-arrow-right icon-extra-small float-right"></i></a>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                <!-- end services item -->
                <!-- start services item -->
                <div class="col col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="feature-box text-left box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                        <div class="feature-box-content">
                            <span class="margin-15px-bottom d-block text-extra-medium">02</span>
                            <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Blazing performance</h6>
                            <p>Lorem ipsum is simply dummy text of the printing typesetting lorem ipsum been dummy text.</p>
                            <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                            <a class="text-small font-weight-500 text-uppercase alt-font d-block text-extra-dark-gray" href="about-me.html">More info<i class="feather icon-feather-arrow-right icon-extra-small float-right"></i></a>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                <!-- end services item -->
                <!-- start services item -->
                <div class="col col-md-9 wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="feature-box text-left box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                        <div class="feature-box-content">
                            <span class="margin-15px-bottom d-block text-extra-medium">03</span>
                            <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Customer satisfaction</h6>
                            <p>Lorem ipsum is simply dummy text of the printing typesetting lorem ipsum been dummy text.</p>
                            <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                            <a class="text-small font-weight-500 text-uppercase alt-font d-block text-extra-dark-gray" href="about-me.html">More info<i class="feather icon-feather-arrow-right icon-extra-small float-right"></i></a>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                <!-- end services item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="parallax overflow-visible wow animate__fadeIn" id="services" data-parallax-background-ratio="0.1" style="background-image: url('images/our-services-17.png');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-7 col-lg-8 col-md-12 md-margin-40px-bottom">
                    <div class="row">
                        <div class="col-12 margin-5-half-rem-bottom sm-margin-7-half-rem-bottom">
                            <span class="alt-font margin-20px-bottom text-gradient-sky-blue-pink d-inline-block text-uppercase font-weight-500 letter-spacing-1px">What we offer services</span>
                            <h5 class="alt-font font-weight-600 text-extra-dark-gray">Litho theme lets you easily create websites in a matter of minutes.</h5>
                            <p class="w-80 margin-4-half-rem-bottom md-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry ipsum has been the industry's standard dummy text when an unknown a galley of type and scrambled it to make a type book.</p>
                            <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-03 rounded-circle"><i class="feather icon-feather-arrow-right"></i></div>
                            <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-03 rounded-circle"><i class="feather icon-feather-arrow-left"></i></div>
                        </div>
                        <div class="col-12">
                            <!-- start slider -->
                            <div class="swiper-container black-move" data-slider-options='{ "slidesPerView": 1, "loop": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                                <div class="swiper-wrapper">
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <div class="border-all border-width-1px border-color-medium-gray border-radius-4px overflow-hidden margin-5px-right xs-no-margin-right">
                                            <div class="row no-gutters row-cols-1 row-cols-sm-2">
                                                <div class="col cover-background xs-h-250px" style="background-image: url('images/our-story-img11.jpg')"></div>
                                                <div class="col">
                                                    <div class="padding-4-rem-all lg-padding-3-rem-all">
                                                        <span class="alt-font text-extra-dark-gray font-weight-500 d-inline-block margin-15px-bottom text-extra-medium">Brand identity</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                                        <a href="about-us.html" class="btn btn-very-small btn-round-edge btn-dark-gray">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <div class="border-all border-width-1px border-color-medium-gray border-radius-4px overflow-hidden margin-5px-right xs-no-margin-right">
                                            <div class="row no-gutters row-cols-1 row-cols-sm-2">
                                                <div class="col cover-background xs-h-250px" style="background-image: url('images/our-story-img13.jpg')"></div>
                                                <div class="col">
                                                    <div class="padding-4-rem-all lg-padding-3-rem-all">
                                                        <span class="alt-font text-extra-dark-gray font-weight-500 d-inline-block margin-15px-bottom text-extra-medium">Exposure strategy</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                                        <a href="about-us.html" class="btn btn-very-small btn-round-edge btn-dark-gray">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <div class="border-all border-width-1px border-color-medium-gray border-radius-4px overflow-hidden margin-5px-right xs-no-margin-right">
                                            <div class="row no-gutters row-cols-1 row-cols-sm-2">
                                                <div class="col cover-background xs-h-250px" style="background-image: url('images/our-story-img12.jpg')"></div>
                                                <div class="col">
                                                    <div class="padding-4-rem-all lg-padding-3-rem-all">
                                                        <span class="alt-font text-extra-dark-gray font-weight-500 d-inline-block margin-15px-bottom text-extra-medium">Multilingual portals</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                                        <a href="about-us.html" class="btn btn-very-small btn-round-edge btn-dark-gray">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slider item -->
                                </div>
                            </div>
                            <!-- end slider -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-12 offset-xl-1">
                    <div class="sticky-top lg-position-relative">
                        <div class="bg-gradient-fast-blue-purple w-100 overflow-hidden border-radius-4px padding-4-rem-all lg-padding-3-rem-all md-padding-4-rem-all position-relative">
                            <i class="line-icon-Cursor-Click2 title-extra-large-heavy text-extra-dark-gray opacity-2 position-absolute top-minus-20px left-minus-30px"></i>
                            <h6 class="alt-font font-weight-500 text-white margin-35px-bottom sm-margin-15px-bottom position-relative z-index-1">Custom and bespoke services</h6>
                            <ul class="list-style-03 alt-font text-white">
                                <li class="border-color-dark-white-transparent mb-0">Brand identity</li>
                                <li class="border-color-dark-white-transparent mb-0">Exposure strategy</li>
                                <li class="border-color-dark-white-transparent mb-0">E-commerce website</li>
                                <li class="border-color-dark-white-transparent mb-0">Multilingual portals</li>
                                <li class="border-color-dark-white-transparent mb-0 pb-0">Packaging design</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-light-gray wow animate__fadeIn">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2">
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn">
                    <div class="feature-box padding-4-half-rem-all lg-padding-3-rem-all">
                        <div class="feature-box-icon feature-box-svg margin-20px-bottom">
                            <i class="line-icon-Navigation-LeftWindow icon-medium text-gradient-sky-blue-pink"></i>
                            <span class="feature-box-svg-shap drop-shadow">
                                    <svg width="100" viewbox="-100 -100 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M86.2,51.4C58.6,97.5,-53.4,96.5,-81.8,49.9C-110.3,3.3,-55.1,-88.8,0.9,-88.3C56.9,-87.8,113.7,5.3,86.2,51.4Z"></path></svg>
                                </span>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Amazing layouts</span>
                            <p>Lorem ipsum is simply dummy text of the printing typesetting lorem ipsum been text.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="feature-box padding-4-half-rem-all lg-padding-3-rem-all">
                        <div class="feature-box-icon feature-box-svg margin-20px-bottom">
                            <i class="line-icon-Cursor-Click2 icon-medium text-gradient-sky-blue-pink"></i>
                            <span class="feature-box-svg-shap drop-shadow">
                                    <svg width="100" viewbox="-110 -110 220 220" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M88.6,52.5C56,107.7,-69.9,110.3,-100.2,56.5C-130.5,2.7,-65.2,-107.7,-2.3,-109C60.6,-110.3,121.2,-2.7,88.6,52.5Z"></path></svg>
                                </span>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">No coding required</span>
                            <p>Lorem ipsum is simply dummy text of the printing typesetting lorem ipsum been text.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="feature-box padding-4-half-rem-all lg-padding-3-rem-all">
                        <div class="feature-box-icon feature-box-svg margin-20px-bottom">
                            <i class="line-icon-Like-2 icon-medium text-gradient-sky-blue-pink"></i>
                            <span class="feature-box-svg-shap drop-shadow">
                                    <svg width="100" viewbox="-100 -100 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M86.2,51.4C58.6,97.5,-53.4,96.5,-81.8,49.9C-110.3,3.3,-55.1,-88.8,0.9,-88.3C56.9,-87.8,113.7,5.3,86.2,51.4Z"></path></svg>
                                </span>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Easy to customize</span>
                            <p>Lorem ipsum is simply dummy text of the printing typesetting lorem ipsum been text.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn">
                    <div class="feature-box padding-4-half-rem-all lg-padding-3-rem-all">
                        <div class="feature-box-icon feature-box-svg margin-20px-bottom">
                            <i class="line-icon-Talk-Man icon-medium text-gradient-sky-blue-pink"></i>
                            <span class="feature-box-svg-shap drop-shadow">
                                    <svg width="100" viewbox="-110 -110 220 220" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M88.6,52.5C56,107.7,-69.9,110.3,-100.2,56.5C-130.5,2.7,-65.2,-107.7,-2.3,-109C60.6,-110.3,121.2,-2.7,88.6,52.5Z"></path></svg>
                                </span>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Customer satisfaction</span>
                            <p>Lorem ipsum is simply dummy text of the printing typesetting lorem ipsum been text.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="feature-box padding-4-half-rem-all lg-padding-3-rem-all">
                        <div class="feature-box-icon feature-box-svg margin-20px-bottom">
                            <i class="line-icon-Paper-Plane icon-medium text-gradient-sky-blue-pink"></i>
                            <span class="feature-box-svg-shap drop-shadow">
                                    <svg width="100" viewbox="-100 -100 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M86.2,51.4C58.6,97.5,-53.4,96.5,-81.8,49.9C-110.3,3.3,-55.1,-88.8,0.9,-88.3C56.9,-87.8,113.7,5.3,86.2,51.4Z"></path></svg>
                                </span>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Blazing performance</span>
                            <p>Lorem ipsum is simply dummy text of the printing typesetting lorem ipsum been text.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="feature-box padding-4-half-rem-all lg-padding-3-rem-all">
                        <div class="feature-box-icon feature-box-svg margin-20px-bottom">
                            <i class="line-icon-Heart icon-medium text-gradient-sky-blue-pink"></i>
                            <span class="feature-box-svg-shap drop-shadow">
                                    <svg width="100" viewbox="-110 -110 220 220" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M88.6,52.5C56,107.7,-69.9,110.3,-100.2,56.5C-130.5,2.7,-65.2,-107.7,-2.3,-109C60.6,-110.3,121.2,-2.7,88.6,52.5Z"></path></svg>
                                </span>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Huge icon collection</span>
                            <p>Lorem ipsum is simply dummy text of the printing typesetting lorem ipsum been text.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center margin-5-rem-bottom sm-margin-3-rem-bottom">
                    <span class="alt-font margin-10px-bottom d-inline-block text-uppercase font-weight-500 text-gradient-sky-blue-pink letter-spacing-1px">Simple Pricing</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px">Amazing Package</h5>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 align-items-center justify-content-center">
                <!-- start pricing item -->
                <div class="col col-md-7 text-center md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="pricing-table bg-white border-radius-6px padding-60px-lr padding-70px-tb lg-padding-45px-lr lg-padding-60px-tb">
                        <div class="pricing-header">
                            <div class="text-medium margin-10px-bottom d-block alt-font">Core features</div>
                            <div class="alt-font text-extra-dark-gray text-large font-weight-500 margin-3-rem-bottom text-uppercase">Basic Plan</div>
                            <h3 class="alt-font font-weight-500 text-fast-blue letter-spacing-minus-2px no-margin-bottom">$29</h3>
                            <span class="text-uppercase text-extra-dark-gray letter-spacing-1px font-weight-500 text-small">Per year</span>
                        </div>
                        <div class="pricing-body padding-3-rem-tb">
                            <ul class="list-style-03">
                                <li class="border-color-medium-gray">Pixel perfect design</li>
                                <li class="border-color-medium-gray">Personal training applications</li>
                                <li class="border-color-medium-gray">Step-by-step support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a class="btn btn-small btn-dark-gray letter-spacing-1px" href="pricing-packages.html">Choose Package</a>
                        </div>
                    </div>
                </div>
                <!-- end pricing item -->
                <!-- start pricing item -->
                <div class="col col-md-7 text-center md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="pricing-table bg-gradient-fast-blue-purple border-radius-5px padding-60px-lr padding-70px-tb lg-padding-45px-lr lg-padding-60px-tb">
                        <div class="pricing-header">
                            <div class="text-white text-medium margin-10px-bottom d-block alt-font opacity-7">Most popular</div>
                            <div class="alt-font text-white text-large font-weight-500 margin-3-rem-bottom text-uppercase">Standard Plan</div>
                            <h2 class="alt-font font-weight-500 text-white letter-spacing-minus-2px no-margin-bottom">$39</h2>
                            <span class="text-uppercase text-white letter-spacing-1px font-weight-500 text-small">Per year</span>
                        </div>
                        <div class="pricing-body padding-3-rem-tb">
                            <ul class="list-style-03 text-white">
                                <li class="border-color-dark-white-transparent">Pixel perfect design</li>
                                <li class="border-color-dark-white-transparent">Personal training applications</li>
                                <li class="border-color-dark-white-transparent">Responsive app layout</li>
                                <li class="border-color-dark-white-transparent">Step-by-step support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a class="btn btn-medium btn-white letter-spacing-1px" href="pricing-packages.html">Choose Package</a>
                        </div>
                    </div>
                </div>
                <!-- end pricing item -->
                <!-- start pricing item -->
                <div class="col col-md-7 text-center wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="pricing-table bg-white border-radius-6px padding-60px-lr padding-70px-tb lg-padding-45px-lr lg-padding-60px-tb">
                        <div class="pricing-header">
                            <div class="text-medium margin-10px-bottom d-block alt-font">Huge features</div>
                            <div class="alt-font text-extra-dark-gray text-large font-weight-500 margin-3-rem-bottom text-uppercase">Premium Plan</div>
                            <h3 class="alt-font font-weight-500 text-fast-blue letter-spacing-minus-2px no-margin-bottom">$49</h3>
                            <span class="text-uppercase text-extra-dark-gray letter-spacing-1px font-weight-500 text-small">Per year</span>
                        </div>
                        <div class="pricing-body padding-3-rem-tb">
                            <ul class="list-style-03">
                                <li class="border-color-medium-gray">Pixel perfect design</li>
                                <li class="border-color-medium-gray">Personal training applications</li>
                                <li class="border-color-medium-gray">Step-by-step support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a class="btn btn-small btn-dark-gray letter-spacing-1px" href="pricing-packages.html">Choose Package</a>
                        </div>
                    </div>
                </div>
                <!-- end pricing item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-light-gray wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center margin-5-rem-bottom sm-margin-3-rem-bottom">
                    <span class="alt-font margin-10px-bottom d-inline-block text-uppercase font-weight-500 text-gradient-sky-blue-pink letter-spacing-1px">What people say</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px">Client Testimonials</h5>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center margin-9-rem-bottom lg-margin-7-rem-bottom">
                <!-- start testimonial item -->
                <div class="col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="testimonials-style-02 border-radius-5px overflow-hidden">
                        <img alt="" class="d-inline-block" src="images/testimonial-img-09.jpg">
                        <div class="testimonials-content padding-3-half-rem-all text-center bg-white lg-padding-2-half-rem-lr">
                            <div class="testimonials-rounded-icon bg-white rounded-circle">
                                <i class="fa fa-quote-left icon-small text-gradient-light-purple-light-orange"></i>
                            </div>
                            <p>Lorem ipsum dolor amet consectetur do eiusmod tempor incididunt labore ut enim ad minim veniam</p>
                            <span class="alt-font font-weight-500 text-extra-dark-gray text-uppercase d-block">Jeremy Smith</span>
                            <span class="alt-font font-weight-500 text-small text-uppercase d-block">Co Founder</span>
                        </div>
                    </div>
                </div>
                <!-- end testimonial item -->
                <!-- start testimonial item -->
                <div class="col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="testimonials-style-02 border-radius-5px overflow-hidden">
                        <img alt="" class="d-inline-block" src="images/testimonial-img-10.jpg">
                        <div class="testimonials-content padding-3-half-rem-all text-center bg-white lg-padding-2-half-rem-lr">
                            <div class="testimonials-rounded-icon bg-white rounded-circle">
                                <i class="fa fa-quote-left icon-small text-gradient-light-purple-light-orange"></i>
                            </div>
                            <p>Lorem ipsum dolor amet consectetur do eiusmod tempor incididunt labore ut enim ad minim veniam</p>
                            <span class="alt-font font-weight-500 text-extra-dark-gray text-uppercase d-block">Shoko mugikura</span>
                            <span class="alt-font font-weight-500 text-small text-uppercase d-block">Creative head</span>
                        </div>
                    </div>
                </div>
                <!-- end testimonial item -->
                <!-- start testimonial item -->
                <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                    <div class="testimonials-style-02 border-radius-5px overflow-hidden">
                        <img alt="" class="d-inline-block" src="images/testimonial-img-11.jpg">
                        <div class="testimonials-content padding-3-half-rem-all text-center bg-white lg-padding-2-half-rem-lr">
                            <div class="testimonials-rounded-icon bg-white rounded-circle">
                                <i class="fa fa-quote-left icon-small text-gradient-light-purple-light-orange"></i>
                            </div>
                            <p>Lorem ipsum dolor amet consectetur do eiusmod tempor incididunt labore ut enim ad minim veniam</p>
                            <span class="alt-font font-weight-500 text-extra-dark-gray text-uppercase d-block">Herman miller</span>
                            <span class="alt-font font-weight-500 text-small text-uppercase d-block">HR manager</span>
                        </div>
                    </div>
                </div>
                <!-- end testimonial item -->
            </div>
            <div class="row row-cols-1 row-cols-lg-6 row-cols-md-3 row-cols-sm-2 client-logo-style-04">
                <!-- start client item -->
                <div class="col text-center sm-no-margin wow animate__fadeIn">
                    <div class="client-box padding-25px-all text-center">
                        <a href="#"><img alt="clients logo 01" src="images/clients-logo-01.png"></a>
                        <span class="client-overlay bg-white box-shadow-small border-radius-4px"></span>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col text-center sm-no-margin wow animate__fadeIn">
                    <div class="client-box padding-25px-all text-center">
                        <a href="#"><img alt="clients logo 01" src="images/clients-logo-02.png"></a>
                        <span class="client-overlay bg-white box-shadow-small border-radius-4px"></span>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col text-center sm-no-margin wow animate__fadeIn">
                    <div class="client-box padding-25px-all text-center">
                        <a href="#"><img alt="clients logo 01" src="images/clients-logo-03.png"></a>
                        <span class="client-overlay bg-white box-shadow-small border-radius-4px"></span>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col text-center sm-no-margin wow animate__fadeIn">
                    <div class="client-box padding-25px-all text-center">
                        <a href="#"><img alt="clients logo 01" src="images/clients-logo-04.png"></a>
                        <span class="client-overlay bg-white box-shadow-small border-radius-4px"></span>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col text-center sm-no-margin wow animate__fadeIn">
                    <div class="client-box padding-25px-all text-center">
                        <a href="#"><img alt="clients logo 01" src="images/clients-logo-05.png"></a>
                        <span class="client-overlay bg-white box-shadow-small border-radius-4px"></span>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col text-center sm-no-margin wow animate__fadeIn">
                    <div class="client-box padding-25px-all text-center">
                        <a href="#"><img alt="clients logo 01" src="images/clients-logo-06.png"></a>
                        <span class="client-overlay bg-white box-shadow-small border-radius-4px"></span>
                    </div>
                </div>
                <!-- end client item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-light-gray overflow-visible position-relative pt-0 pb-md-0">
        <div class="container">
            <div class="z-index-6 bg-white border-radius-5px padding-65px-tb overlap-section-bottom md-padding-40px-all xs-padding-20px-lr">
                <div class="row no-gutters align-items-center justify-content-center">
                    <div class="col-12 col-lg-5 offset-lg-1 col-md-7 col-sm-8 text-center text-md-left sm-margin-20px-bottom">
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray w-95 mb-0 lg-w-100">Litho is meant to simplify the website building.</h5>
                    </div>
                    <div class="col-12 col-lg-4 offset-lg-2 col-md-5 col-sm-8 text-center text-md-left">
                        <a href="watch.html?v=g0f_BRYJLJE" class="popup-youtube video-icon-box video-icon-medium text-extra-dark-gray text-fast-blue-hover md-margin-30px-left sm-no-margin">
                                <span>
                                    <span class="video-icon bg-gradient-light-purple-light-orange margin-20px-right">
                                        <i class="icon-simple-line-control-play text-white"></i>
                                        <span class="video-icon-sonar">
                                            <span class="video-icon-sonar-bfr bg-gradient-light-purple-light-orange opacity-7"></span>
                                            <span class="video-icon-sonar-afr bg-gradient-light-purple-light-orange"></span>
                                        </span>
                                    </span>
                                    <span class="video-icon-text alt-font text-extra-medium font-weight-600 text-decoration-line-bottom text-uppercase">Start your project</span>
                                </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
</x-layouts.main>
