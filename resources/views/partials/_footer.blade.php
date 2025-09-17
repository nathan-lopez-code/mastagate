<!-- start footer -->
<footer class="footer-application footer-dark bg-medium-purple">
    <div class="footer-top padding-five-tb lg-padding-eight-tb sm-padding-50px-tb">
        <div class="container">
            <div class="row justify-content-center">
                <!-- start footer column -->
                <div class="col-12 col-lg-3 col-md-4 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                    <a href="{{ route('home') }}" class="footer-logo margin-25px-bottom d-inline-block">
                        <img src="{{ asset('images/logo-white.png') }}" data-at2x="{{ asset('images/logo-white.png') }}" alt=""></a>
                    <p class="w-95 lg-w-100">Nous sommes un groupe d’entreprises évoluant dans le numérique et le commerce général.</p>
                    <div class="social-icon-style-12">
                        <ul class="extra-small-icon light">
                            <li><a class="facebook" href="https://web.facebook.com/MastaGate-101928592157693" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="instagram" href="https://www.instagram.com/mastagate" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="youtube" href="https://youtu.be/1dl1MV0kRVg" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a class="linkedin" href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg-2 offset-lg-1 col-md-4 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Liens rapides </span>
                    <ul>
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li><a href="{{ route('about') }}">A propos</a></li>
                        <li><a href="{{ route('services') }}">Services </a></li>
                        <li><a href="{{ route('blogs.index') }}">Actualié </a></li>
                        <li><a href="{{ route('contacts') }}">Contacts</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg-3 col-md-4 col-sm-6 xs-margin-45px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Contact</span>
                    <ul>
                        <li><a href="#"><i class="fa fa-phone"></i> +243 842 399 860</a></li>
                        <li><a href="#"><i class="fa fa-map-marked"></i>
                            <strong>Avenue Nzadi, n°14C</strong><br>
                            Quartier Ngaba — Rond-point Ngaba<br>
                            Kinshasa, RDCongo<br>
                            Référence : Derrière la BCDC
                        </li>
                        <li><a href="#"><i class="fa fa-envelope"></i> contact@mastagate.com</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                {{--<div class="col-12 col-lg-3 col-md-8 col-sm-6 last-paragraph-no-margin text-center text-lg-left">
                    <span class="alt-font font-weight-500 d-none d-lg-block text-white margin-30px-bottom xs-margin-10px-bottom">Offres spéciales</span>
                    <div class="w-85 md-w-100 d-md-flex flex-md-row d-lg-inline-block">
                        <a href="#" class="margin-20px-bottom d-inline-block md-margin-10px-right sm-no-margin-right">
                            <img class="w-100" src="{{ asset('images/offers/church.png') }}" alt="">
                        </a>
                        <a href="#" class="margin-20px-bottom d-inline-block md-margin-10px-left sm-no-margin-left">
                            <img class="w-100" src="{{ asset('images/offers/nova.png') }}" alt="">
                        </a>
                    </div>
                </div>--}}
                <!-- end footer column -->
            </div>
        </div>
    </div>
    <div class="footer-bottom padding-35px-tb border-top border-width-1px border-color-white-transparent">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 text-center last-paragraph-no-margin">
                    <p>&copy; Copyright {{ date('Y') }} MastaGate
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
<!-- end scroll to top -->
