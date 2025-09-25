<x-layouts.main title="Bienvenue sur {{ config('app.name') }}" description="MastaGate est un groupe d’entreprises évoluant dans plusieurs domaines (Commerce général) en apportant une touche de l’innovation, une valeur ajoutée qui donne un punch à la condition de vie des particuliers et de toutes sortes d’organisations.">

    <div class="xs-banner-slider owl-carousel">

        <div class="parallax bg-extra-dark-gray animate__fadeIn" data-parallax-background-ratio="0.5" style="background-image:url({{ asset('images/sliders/2.jpg') }});padding: 130px 0;overflow: hidden;background-attachment: inherit !important;">
            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
            <div class="container" >
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 col-xl-8 col-lg-9 col-md-11 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom" style="font-size: 3rem; line-height: 1.1">
                            Nous faisons de votre communication une base solide pour l’explosion de votre chiffre d’affaires
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax bg-extra-dark-gray animate__fadeIn" data-parallax-background-ratio="0.5" style="background-image:url({{ asset('images/sliders/1.jpg') }});padding: 130px 0;overflow: hidden;background-attachment: inherit !important;">
            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
            <div class="container" >
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 col-xl-8 col-lg-9 col-md-11 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom" style="font-size: 3rem; line-height: 1.1">
                            Avez-vous un projet qui demande une touche professionnelle ? N’hésitez pas de travailler avec nous
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax bg-extra-dark-gray animate__fadeIn" data-parallax-background-ratio="0.5" style="background-image:url({{ asset('images/sliders/3.jpg') }});padding: 130px 0;overflow: hidden;background-attachment: inherit !important;">
            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
            <div class="container" >
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 col-xl-8 col-lg-9 col-md-11 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom" style="font-size: 3rem; line-height: 1.1">
                            La pluridisciplinarité est notre force
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--<section class="parallax bg-extra-dark-gray animate__fadeIn" data-parallax-background-ratio="0.5" style="background-image:url({{ asset('images/sliders/1.jpg') }});">
        <div class="opacity-extra-medium bg-extra-dark-gray"></div>
        <div class="xs-banner-slider owl-carousel">
            <div class="container" >
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 col-xl-8 col-lg-9 col-md-11 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom" style="font-size: 3rem; line-height: 1.1">
                            Nous faisons de votre communication une base solide pour l’explosion de votre chiffre d’affaires
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 col-xl-8 col-lg-9 col-md-11 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom" style="font-size: 3rem; line-height: 1.1">
                            Avez-vous un projet qui demande une touche professionnelle ? N’hésitez pas de travailler avec nous
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 col-xl-8 col-lg-9 col-md-11 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom" style="font-size: 3rem; line-height: 1.1">
                            La pluridisciplinarité est notre force
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
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
    <section class="bg-light-gray animate__fadeIn">
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
    <section class="animate__fadeIn">
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


    <!-- start hero section -->
   {{-- <section class="xs-banner-slider owl-carousel py-0 cover-background overflow-visible wow animate__fadeIn" style="background-image: url({{ asset('images/application-banner-img-01.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-5 col-lg-6 col-md-7 col-sm-8 text-center text-md-left d-flex flex-column
        justify-content-center full-screen md-h-650px padding-10-rem-bottom padding-6-rem-top lg-padding-10-rem-top
        lg-padding-8-rem-bottom md-padding-6-rem-top md-padding-10-rem-bottom sm-h-auto sm-padding-5-rem-bottom">
            <span class="align-self-center align-self-md-start alt-font font-weight-600 text-medium letter-spacing-1px line-height-24px
            border-bottom border-width-1px d-inline-block margin-45px-bottom sm-margin-35px-bottom" style="color: white">MastaGate, The Great Door !</span>
                    <h1 class="alt-font text-white font-weight-700 letter-spacing-minus-3px text-uppercase margin-2-half-rem-bottom">COMMUNICATION DIGITALE</h1>
                    <p class="text-large text-white opacity-6 line-height-30px font-weight-300 w-85 sm-w-100">Nous faisons de votre communication une base solide pour l’explosion de votre chiffre d’affaires.</p>
                    <a href="{{ route('services') }}" class="section-link align-self-center align-self-md-start btn btn-fancy blue-night btn-round-edge-small btn-large btn-gradient-light-purple-light-red margin-1-half-rem-top">Découvrir <i class="fas fa-arrow-right right-icon"></i></a>
                </div>
                <div class="col-12 col-lg-6 offset-xl-1 col-md-5 z-index-0 align-self-center align-self-lg-end text-right banner-bottom-right-images">
                    <img src="{{ asset('images/banner-1.jpg') }}" class="tilt-box" alt="" data-tilt-options='{ "maxTilt": 20, "perspective": 1000, "easing": "cubic-bezier(.03,.98,.52,.99)", "scale": 1, "speed": 500, "transition": true, "reset": true, "glare": false, "maxGlare": 1 }'>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-5 col-lg-6 col-md-7 col-sm-8 text-center text-md-left d-flex flex-column
        justify-content-center full-screen md-h-650px padding-10-rem-bottom padding-6-rem-top lg-padding-10-rem-top
        lg-padding-8-rem-bottom md-padding-6-rem-top md-padding-10-rem-bottom sm-h-auto sm-padding-5-rem-bottom">
            <span class="align-self-center align-self-md-start alt-font font-weight-600 text-medium letter-spacing-1px line-height-24px
             border-bottom border-width-1px d-inline-block margin-45px-bottom sm-margin-35px-bottom" style="color: white">MastaGate, The Great Door !</span>
                    <h1 class="alt-font text-white font-weight-700 letter-spacing-minus-3px text-uppercase margin-2-half-rem-bottom">COMMERCE GENERAL </h1>
                    <p class="text-large text-white opacity-6 line-height-30px font-weight-300 w-85 sm-w-100">
                        Nous sommes un groupe d’entreprises évoluant dans plusieurs domaines de la société.</p>
                    <a href="{{ route('services') }}" class="section-link align-self-center align-self-md-start btn btn-fancy blue-night btn-round-edge-small btn-large btn-gradient-light-purple-light-red margin-1-half-rem-top">Découvrir <i class="fas fa-arrow-right right-icon"></i></a>
                </div>
                <div class="col-12 col-lg-6 offset-xl-1 col-md-5 z-index-0 align-self-center align-self-lg-end text-right banner-bottom-right-images">
                   <img src="{{ asset('images/banner-2.jpg') }}" class="tilt-box" alt="" data-tilt-options='{ "maxTilt": 20, "perspective": 1000, "easing": "cubic-bezier(.03,.98,.52,.99)", "scale": 1, "speed": 500, "transition": true, "reset": true, "glare": false, "maxGlare": 1 }'>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-5 col-lg-6 col-md-7 col-sm-8 text-center text-md-left d-flex flex-column
        justify-content-center full-screen md-h-650px padding-10-rem-bottom padding-6-rem-top lg-padding-10-rem-top
        lg-padding-8-rem-bottom md-padding-6-rem-top md-padding-10-rem-bottom sm-h-auto sm-padding-5-rem-bottom">
            <span class="align-self-center align-self-md-start alt-font font-weight-600 text-medium letter-spacing-1px line-height-24px border-bottom border-width-1px  d-inline-block  margin-45px-bottom sm-margin-35px-bottom" style="color: white">MastaGate, The Great Door !</span>
                    <h1 class="alt-font text-white font-weight-700 letter-spacing-minus-3px text-uppercase margin-2-half-rem-bottom">PARLONS PROJETS</h1>
                    <p class="text-large text-white opacity-6 line-height-30px font-weight-300 w-85 sm-w-100">
                        Avez-vous un projet qui demande une touche professionnelle ? n’hésitez pas de travailler avec nous !
                    </p>
                    <a href="{{ route('services') }}" class="section-link align-self-center align-self-md-start btn btn-fancy btn-round-edge-small btn-large
                    btn-gradient-light-purple-light-red blue-night margin-1-half-rem-top">Découvrir <i class="fas fa-arrow-right right-icon"></i></a>
                </div>
                <div class="col-12 col-lg-6 offset-xl-1 col-md-5 z-index-0 align-self-center align-self-lg-end text-right banner-bottom-right-images">
                    <img src="{{ asset('images/banner-3.jpg') }}" class="tilt-box" alt="" data-tilt-options='{ "maxTilt": 20, "perspective": 1000, "easing": "cubic-bezier(.03,.98,.52,.99)", "scale": 1, "speed": 500, "transition": true, "reset": true, "glare": false, "maxGlare": 1 }'>
                </div>
            </div>
        </div>
    </section>--}}

    <!-- end hero section -->
    <!-- start section -->
   {{-- <section class="border-bottom border-color-medium-gray md-no-padding-top wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-sm-8 text-center margin-5-rem-bottom md-margin-4-rem-bottom sm-margin-2-rem-bottom margin-3-half-rem-top">
                <span class="alt-font font-weight-500 text-medium letter-spacing-1-half text-uppercase d-inline-block
                 margin-20px-bottom sm-margin-10px-bottom text-blue-night">VOTRE COMMUNICATION DIGITALE</span>
                    <h4 class="alt-font font-weight-300 text-extra-dark-gray letter-spacing-minus-1px">Notre cheval de bataille de tous les jours</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn">
                    <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr md-margin-15px-bottom">
                        <div class="feature-box-icon">
                            <i class="line-icon-Navigation-LeftWindow icon-medium text-gradient-light-purple-light-red margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Site Web</span>
                            <p>Votre omniprésence assurée sur la toile mondiale</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr md-margin-15px-bottom">
                        <div class="feature-box-icon">
                            <img src="{{ asset('images/icons/posters.png') }}" style="margin-bottom: 35px;" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Affiches</span>
                            <p>Faire découvrir vos produits par des Designs attirants </p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr sm-margin-15px-bottom">
                        <div class="feature-box-icon">
                            <img src="{{ asset('images/icons/charter.png') }}" style="margin-bottom: 35px;" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Charte graphique</span>
                            <p>Imposer de manière adéquate votre marque dans la société</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                    <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr">
                        <div class="feature-box-icon">
                            <img src="{{ asset('images/icons/advert.png') }}" style="margin-bottom: 35px;" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Spot publicitaire</span>
                            <p>Edifier au mieux vos clients par des vidéos intrigantes</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
            </div>
        </div>
    </section>--}}
    <!-- end section -->
    <!-- start section -->
    <section class="cover-background wow animate__fadeIn" style="background-image: url({{ asset('images/application-banner-img-02.jpg') }});">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-10 col-xl-4 col-lg-5 text-center text-lg-left md-margin-70px-bottom sm-margin-50px-bottom">
                    <h5 class="alt-font font-weight-300 text-slate-blue letter-spacing-minus-1px margin-4-rem-bottom xs-margin-3-half-rem-bottom wow animate__fadeIn"
                        data-wow-delay="0.1s">A propos de MastaGate</h5>
                    <div class="row">
                        <div class="col-12 last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.2s">
                            <span class="alt-font font-weight-500 text-slate-blue d-block margin-10px-bottom">Qui sommes-nous ?</span>
                            <p class="w-90 xs-w-100 d-inline-block">
                                MastaGate est un groupe d’entreprises évoluant dans plusieurs domaines (Commerce
                                général) en apportant une touche de l’innovation, une valeur ajoutée qui donne un
                                punch à la condition de vie des particuliers et de toutes sortes d’organisations.
                            </p>
                            <p>
                                <a class="btn btn-fancy btn-small btn-dark-gray blue-night" href="{{ route('about') }}">Lire plus</a>
                            </p>
                        </div>
                        <div class="col-12 wow animate__fadeIn" data-wow-delay="0.2s"><div class="h-1px w-100 bg-medium-gray margin-40px-tb xs-margin-30px-tb"></div></div>
                        <div class="col-12 last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.3s">
                            <span class="alt-font font-weight-500 text-slate-blue d-block margin-10px-bottom">Une vidéo de nous ?</span>
                            <p class="w-90 xs-w-100 d-inline-block">Cliquez sur le bouton clignotant ci-dessous afin de suivre une brève description de
                                MastaGate en vidéo !</p>
                        </div>
                        <div class="col-12 last-paragraph-no-margin margin-4-half-rem-top wow animate__fadeIn" data-wow-delay="0.4s">
                            <a href="https://www.youtube.com/watch?v=1dl1MV0kRVg" class="popup-youtube video-icon-box video-icon-medium position-relative">
                                    <span>
                                        <span class="video-icon bg-gradient-light-purple-light-red margin-15px-right">
                                            <i class="icon-simple-line-control-play text-white"></i>
                                            <span class="video-icon-sonar">
                                                <span class="video-icon-sonar-bfr bg-gradient-light-purple-light-orange opacity-7"></span>
                                            </span>
                                        </span>
                                        <span class="video-icon-text alt-font text-extra-dark-gray text-uppercase text-decoration-line-bottom d-inline-block font-weight-600 align-middle">
                                            MastaGate spot</span>
                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-5 offset-xl-3 col-lg-6 offset-lg-1 wow animate__fadeInRight">
                    <div class="outside-box-right">
                        <img src="{{ asset('images/application-img-04.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- section article -->
    <section class="wow animate__fadeIn blog-preview-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-4 col-lg-5 col-sm-6 text-center margin-4-rem-bottom">
                    <span class="alt-font font-weight-500 text-medium text-blue-night letter-spacing-1-half text-uppercase d-inline-block margin-20px-bottom sm-margin-10px-bottom">
                        Nos dernières publications
                    </span>
                    <h5 class="alt-font font-weight-300 text-extra-dark-gray letter-spacing-minus-1px mx-auto mx-sm-0 xs-w-80">
                        Restez informé avec les articles les plus récents
                    </h5>
                </div>
            </div>

            <div class="row blog-grid">
                @forelse($articles as $article)
                    <div class="col-12 col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 feature-box text-left box-shadow-large box-shadow-double-large-hover bg-white padding-3-rem-all lg-padding-2-rem-all md-padding-3-rem-all">
                            @if($article->image)
                                <img src="{{ asset('images/articles/' . $article->image) }}" class="card-img-top mb-3 border-radius-6px" alt="{{ $article->title }}" style="height: 150px; object-fit: cover;">
                            @endif
                            <div class="card-body feature-box-content">
                                <span class="d-block alt-font text-blue-night text-uppercase font-weight-500 letter-spacing-1px" style="font-size: 0.8rem;">
                                    {{ $article->created_at->format('d M Y') }}
                                    @if($article->category) - {{ $article->category }} @endif
                                </span>
                                <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray" style="font-size: 1rem; margin-top: 0.5rem; margin-bottom: 0.5rem;">
                                    {{ Str::limit($article->title, 100, '...') }}
                                </h6>
                                <a href="{{ route('blogs.show', ['slug'=>$article->slug]) }}" class="btn btn-small btn-dark-gray margin-10px-top btn-round-edge section-link blue-night">Lire l'article<i class="feather icon-feather-arrow-right icon-very-small right-icon"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="alt-font text-extra-dark-gray">Aucun article n'a encore été publié.</p>
                    </div>
                @endforelse
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-12 text-center">
                    <a href="{{ route('blogs.index') }}" class="btn btn-dark-gray btn-small btn-round-edge">
                        Voir tous les articles
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- start section -->
   {{-- <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-4 col-lg-5 col-sm-6 text-center margin-4-rem-bottom">
                    <span class="alt-font font-weight-500 text-medium text-blue-night letter-spacing-1-half text-uppercase d-inline-block
                    margin-20px-bottom sm-margin-10px-bottom">Pack NOVA</span>
                    <h5 class="alt-font font-weight-300 text-extra-dark-gray letter-spacing-minus-1px mx-auto mx-sm-0 xs-w-80">
                        Offre pour les nouvelles sociétés</h5>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-3 col-md-4 text-center text-md-right sm-margin-30px-bottom">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-1 justify-content-center">
                        <!-- start feature box item -->
                        <div class="col margin-5-rem-bottom last-paragraph-no-margin wow animate__fadeInLeft" data-wow-delay="0.4s">
                            <i class="line-icon-Favorite-Window text-gradient-light-purple-light-red icon-medium margin-20px-bottom"></i>
                            <span class="alt-font font-weight-500 text-slate-blue d-block margin-5px-bottom">Site Web</span>
                            <p class="d-inline-block xs-w-75">Lorem ipsum consectetur dolor eiusmod tempor incididunt</p>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col margin-5-rem-bottom last-paragraph-no-margin wow animate__fadeInLeft" data-wow-delay="0.6s">
                            <i class="line-icon-Talk-Man text-gradient-light-purple-light-red icon-medium margin-20px-bottom"></i>
                            <span class="alt-font font-weight-500 text-slate-blue d-block margin-5px-bottom">Création d'un logiciel de gestion</span>
                            <p class="d-inline-block xs-w-75">Lorem ipsum consectetur dolor eiusmod tempor incididunt</p>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col last-paragraph-no-margin wow animate__fadeInLeft" data-wow-delay="0.8s">
                            <img src="http://127.0.0.1:8000/images/icons/charter.png" class="margin-20px-bottom" alt="" data-no-retina="">
                            <span class="alt-font font-weight-500 text-slate-blue d-block margin-5px-bottom">Charte graphique</span>
                            <p class="d-inline-block xs-w-75">Lorem ipsum consectetur dolor eiusmod tempor incididunt</p>
                        </div>
                        <!-- end feature box item -->
                    </div>
                </div>
                <div class="col-12 col-md-4 offset-lg-1 px-lg-0 sm-margin-20px-bottom wow animate__zoomIn">
                    <img src="{{ asset('images/application-img-05.jpg') }}" alt="">
                </div>
                <div class="col-12 col-lg-3 offset-lg-1 col-md-4 text-center text-md-left">
                    <div class="row row-cols-1 row-cols-md-1 row-cols-sm-2 justify-content-center">
                        <!-- start feature box item -->
                        <div class="col margin-5-rem-bottom last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.4s">
                            <img src="http://127.0.0.1:8000/images/icons/advert.png" class="margin-20px-bottom" alt="" data-no-retina="">
                            <span class="alt-font font-weight-500 text-slate-blue d-block margin-5px-bottom"> Spot publicitaire</span>
                            <p class="d-inline-block xs-w-75">Lorem ipsum consectetur dolor eiusmod tempor incididunt</p>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col margin-5-rem-bottom last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.6s">
                            <img src="http://127.0.0.1:8000/images/icons/posters.png" class="margin-20px-bottom" alt="" data-no-retina="">
                            <span class="alt-font font-weight-500 text-slate-blue d-block margin-5px-bottom">Affiche</span>
                            <p class="d-inline-block xs-w-75">Lorem ipsum consectetur dolor eiusmod tempor incididunt</p>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.8s">
                            <i class="line-icon-Archery-2 text-gradient-light-purple-light-red icon-medium margin-20px-bottom"></i>
                            <span class="alt-font font-weight-500 text-slate-blue d-block margin-5px-bottom">Gestion des comptes/réseaux sociaux</span>
                            <p class="d-inline-block xs-w-75">Lorem ipsum consectetur dolor eiusmod tempor incididunt</p>
                        </div>
                        <!-- end feature box item -->
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- end section -->

    <!-- start section -->
    <section class="bg-gradient-light-gray-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-5 col-sm-6 text-center margin-5-half-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                <span class="alt-font font-weight-500 text-medium text-blue-night letter-spacing-1-half
                 text-uppercase d-inline-block margin-20px-bottom sm-margin-10px-bottom">Communication digitale, structure des coûts</span>
                    <h5 class="alt-font font-weight-300 text-extra-dark-gray letter-spacing-minus-1px d-inline-block w-90 md-w-100 xs-w-80">Notre fixation des prix est adaptée à vos capacités </h5>
                </div>
            </div>

            {{-- Conteneur principal pour la grille de packs --}}
            <div class="row row-cols-1 row-cols-lg-3 justify-content-center">

                {{-- BOUCLE LARAVEL BLADE : Parcourt chaque pack dans la variable $packs --}}
                @foreach($packs as $pack)

                    {{-- Logique pour séparer les packs en deux lignes de 3 (basé sur l'index) --}}
                    @if($loop->index > 0 && $loop->index % 3 == 0)
            </div>
            <div class="row row-cols-1 row-cols-lg-3 justify-content-center mt-5">
                @endif

                @php
                    $isTrending = $pack->is_trending;
                    $cardClass = $isTrending == 1 ? 'bg-purple' : 'bg-white';
                    $headerTextColor = $isTrending ? 'text-white' : 'text-extra-dark-gray';
                    $priceTextColor = $isTrending ? 'text-white' : 'text-purple';
                    $listTextColor = $isTrending ? 'text-white' : '';
                    $listBorderColor = $isTrending ? 'border-color-dark-white-transparent' : 'border-color-medium-gray';
                    $buttonClass = $isTrending ? 'btn-white' : 'btn-dark-gray blue-night';
                    $priceElement = $isTrending ? 'h2' : 'h3';

                    if ($pack->is_quotation==1) {
                        $priceTag = 'Devis';
                        $pricePeriod = 'Sur mesure';
                        $buttonText = 'Demander un devis';
                    } elseif (is_numeric($pack->price)) {
                        $priceTag = number_format($pack->price, 0, ',', ' ') . '$';
                        $pricePeriod = 'Par mois';
                        $buttonText = 'Choisir';
                    } else {
                        $priceTag = 'Contactez-nous';
                        $pricePeriod = 'Pour un prix';
                        $buttonText = 'Contacter';
                    }
                @endphp

                <div class="col col-md-8 d-flex text-center @if(!$loop->last) md-margin-30px-bottom @endif wow animate__fadeIn"
                     data-wow-delay="{{ 0.2 + ($loop->index * 0.2) }}s">

                    <!-- start pricing table -->
                    <div class="pricing-table d-flex flex-column justify-content-center w-100 border-radius-5px padding-60px-lr padding-70px-tb
                        lg-padding-50px-lr xs-padding-50px-tb xs-padding-40px-lr {{ $cardClass }}">

                        <!-- start pricing header -->
                        <div class="pricing-header">
                            {{-- Affichage de l'étiquette "Le plus sollicité" --}}
                            @if($isTrending)
                                <div class="text-white text-medium margin-10px-bottom d-block alt-font opacity-7">Le plus sollicité</div>
                            @endif

                            <div class="alt-font {{ $headerTextColor }} text-large font-weight-500 margin-3-rem-bottom text-uppercase">{{ $pack->name }}</div>

                            <{{ $priceElement }} class="alt-font font-weight-500 {{ $priceTextColor }} letter-spacing-minus-2px no-margin-bottom">{{ $priceTag }}</{{ $priceElement }}>

                        <span class="text-uppercase {{ $headerTextColor }} letter-spacing-1px font-weight-500 text-small">
                                {{ $pricePeriod }}
                            </span>
                    </div>
                    <!-- end pricing header -->

                    <!-- start pricing body -->
                    <div class="pricing-body padding-3-rem-tb">
                        <ul class="list-style-03 {{ $listTextColor }}">
                            @if($pack->advantages)
                                {{-- Division de la chaîne d'avantages en une liste --}}
                                @foreach(explode("\n", $pack->advantages) as $advantage)
                                    @php
                                        $advantage = trim($advantage);
                                        if (empty($advantage)) continue;
                                        $iconColorClass = $isTrending ? '' : 'text-purple';
                                    @endphp
                                    <li class="{{ $listBorderColor }}">
                                        <i class="fas fa-check-circle mr-2 {{ $iconColorClass }}"></i>
                                        {{ $advantage }}
                                    </li>
                                @endforeach
                            @else
                                <li class="{{ $listBorderColor }}">Aucun avantage spécifié.</li>
                            @endif
                        </ul>
                    </div>
                    <!-- end pricing body -->

                    <!-- start pricing footer -->
                    <div class="pricing-footer">
                        <a class="btn btn-fancy btn-{{ $isTrending ? 'medium' : 'small' }} {{ $buttonClass }}" href="#">
                            {{ $buttonText }}
                        </a>
                    </div>
                    <!-- end pricing footer -->

                </div>
                <!-- end pricing table -->
            </div>
            @endforeach
        </div>

        </div>
    </section>
    <!-- end section -->
    {{--
    <section class="bg-light-gray">
        <div class="container">
            <div class="row justify-content-center wow animate__fadeIn">
                <div class="col-12 col-xl-4 col-lg-5 col-sm-6 text-center margin-3-half-rem-bottom md-margin-2-rem-bottom">
                    <span class="alt-font font-weight-500 text-green text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom" style="color: #0038e3">Le Blog</span>
                    <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half">Derniers Articles</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12 blog-content sm-no-padding-lr">
                    <ul class="blog-grid blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        @php
                            $i = 1
                        @endphp

                        @foreach($posts as $post)
                            <li class="grid-item wow animate__fadeIn" {{ $i !== 1 ? "data-wow-delay=0.". (($i*2) -2) ."s": '' }}>
                                <div class="blog-post border-radius-5px bg-white box-shadow-medium tr-post">
                                    <div class="blog-post-image bg-medium-slate-blue">
                                        <a href="{{ $post->slug_link }}" title=""><img src="{{ asset('storage/' . $post->image)  }}" style="height: 300px" alt="{{ $post->title  }}"></a>
                                        <a href={{ $post->slug_link }}" class="blog-category alt-font">{{ $post->category->name  }}</a>
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                        <a href="{{ $post->slug_link }}" class="alt-font text-small d-inline-block margin-10px-bottom">{{ ucfirst((new \Carbon\Carbon($post->created_at))->translatedFormat('l, d F Y')) }}</a>
                                        <a href="{{ $post->slug_link }}" style="color: #0038e3" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray margin-15px-bottom d-block">
                                            {{ $post->title  }}</a>
                                        <p>{{ str_limit($post->excerpt, 35) }}</p>
                                        <div class="d-flex align-items-center entry-footer">
                                            <img class="avtar-image" src="{{ asset('storage/' . $post->authorId->avatar)  }}" alt="{{ $post->authorId->name }}">
                                            <span class="alt-font text-small mr-auto">Par <a href="#">{{ $post->authorId->name  }}</a></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @php
                                $i++;
                                if ($i === 5) {
                                    $i = 1;
                                }
                            @endphp
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </section>
    --}}
    <!-- end section -->
    <!-- start section -->
    <section class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-6 col-lg-7 col-md-8 text-center px-md-0 wow animate__fadeIn">
                    <h4 class="alt-font font-weight-700 text-purple text-uppercase d-inline-block letter-spacing-minus-1px margin-4-rem-bottom">Contact direct par MAIL</h4>
                    <!-- start newsletter form -->
                    <div class="newsletter-style-01 position-relative {{--margin-4-rem-bottom xs-margin-2-rem-bottom--}}">
                        <form action="#" method="post">
                            <input class="border-radius-100px extra-large-input box-shadow-medium border-none padding-50px-left m-0 required mb-3"
                                   name="email" placeholder="Nom" type="text">
                            <input class="border-radius-100px extra-large-input box-shadow-medium border-none padding-50px-left m-0 required mb-3"
                                   name="email" placeholder="E-mail" type="email">
                            <textarea name="" id="" cols="30" rows="10" class="extra-large-input box-shadow-medium border-none padding-50px-left m-0 required mb-3" placeholder="Votre message"></textarea>
                        </form>
                    </div>
                    <p>
                        <a class="btn btn-fancy btn-small btn-dark-gray blue-night">Envoyer</a>
                    </p>
                    <!-- end newsletter form -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
</x-layouts.main>
