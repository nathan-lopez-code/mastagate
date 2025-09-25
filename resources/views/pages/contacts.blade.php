<x-layouts.main title="Nous contacter : MastaGate">
    <!-- start page title -->
    <section class="parallax" data-parallax-background-ratio="0.5" style="background-image:url('images/contact-us-classic-bg-1.jpg');">
        {{--<div class="opacity-medium bg-gradient-fast-blue-purple"></div>--}}
        <div class="container">
            <div class="row align-items-stretch justify-content-center extra-small-screen">
                <div class="col-12 page-title-large text-center d-flex align-items-center justify-content-center flex-column">
                    <h1 class="alt-font text-white font-weight-500 no-margin-bottom">Contactez-nous !</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="bg-light-gray">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
                <!-- start fancy text box item -->
                <div class="col col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                    <div class="feature-box bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                        <div  class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                            <div class="feature-box-icon">
                                <i class="line-icon-Map-Marker d-block icon-medium text-fast-blue margin-25px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-extra-dark-gray text-extra-medium d-block alt-font font-weight-500">Adresse</span>
                                <a href="#" class="alt-font text-decoration-none">
                                    <p class="contact-compact">
                                        <strong> Kinshasa - RDC  </strong><br>Avenue Nzadi 14C — Quartier Ngaba, Rond-point Ngaba,<br>
                                        <span class="ref">Réf : Derrière la BCDC</span>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="feature-box-overlay"></div>
                    </div>
                </div>
                <div class="col col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                    <div class="feature-box bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                        <div  class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                            <div class="feature-box-icon">
                                <i class="line-icon-Mail-Read d-block icon-medium text-fast-blue margin-25px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-extra-dark-gray text-extra-medium d-block alt-font font-weight-500">Email</span>
                                <a href="mailto:contact@mastagate.com" class="alt-font text-decoration-none">contact@mastagate.com</a>
                            </div>
                        </div>
                        <div class="feature-box-overlay"></div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                    <div class="feature-box bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                        <div class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                            <div class="feature-box-icon">
                                <i class="line-icon-Phone-2 d-block icon-medium text-fast-blue margin-25px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-extra-dark-gray text-extra-medium d-block alt-font font-weight-500">Téléphone</span>
                                <a href="#" class="alt-font text-decoration-none">+243 842 399 860</a>
                            </div>
                        </div>
                        <div class="feature-box-overlay"></div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <!-- end fancy text box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                            <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">Remplissez le formulaire et nous vous contacterons bientôt !</span>
                            <h4 class="alt-font font-weight-600 text-extra-dark-gray">Comment pouvons-nous vous aider ?</h4>
                        </div>
                        <div class="col-12">
                            <!-- start contact form -->
                            <form method="post">
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                        <input class="medium-input bg-white margin-25px-bottom required" type="text" name="name" placeholder="Votre nom">
                                        <input class="medium-input bg-white margin-25px-bottom required" type="email" name="email" placeholder="Votre Adresse Email">
                                        <input class="medium-input bg-white mb-0" type="tel" name="phone" placeholder="Votre numéro de téléphone">
                                    </div>
                                    <div class="col margin-4-rem-bottom sm-margin-10px-bottom">
                                        <textarea class="medium-textarea h-200px bg-white" name="comment" placeholder="Votre message"></textarea>
                                    </div>
                                    <div class="col">
                                        <input type="hidden" name="redirect" value="">
                                        <button class="btn btn-medium blue-night mb-0 submit" type="submit">Soumettre</button>
                                    </div>
                                </div>
                                <div class="form-results d-none"></div>
                            </form>
                            <!-- end contact form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
</x-layouts.main>
