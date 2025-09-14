<x-layouts.main title="Notre blog : MastaGate">

    <section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image:url('images/sliders/bg-actualite.webp');">
        <div class="opacity-extra-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-stretch justify-content-center small-screen">
                <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                    <h1 class="alt-font text-white opacity-6 margin-20px-bottom">Notre blog</h1>
                    <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Découvrez nos derniers articles</h2>
                </div>
                <div class="down-section text-center"><a href="#articles-section" class="section-link">
                        <i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
            </div>
        </div>
    </section>

    <section id="articles-section" class="bg-light-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center margin-5-rem-bottom sm-margin-3-rem-bottom">
                    <span class="alt-font margin-10px-bottom d-inline-block text-uppercase font-weight-500 text-gradient-sky-blue-pink letter-spacing-1px">Nos articles récents</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px">Un contenu de qualité pour vous</h5>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @forelse ($articles as $article)
                    <div class="col wow animate__fadeIn">
                        <div class="card h-100 feature-box text-left box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                            @if ($article->image)
                                <img src="{{ asset('images/articles/' . $article->image) }}" class="card-img-top mb-3 border-radius-6px" alt="{{ $article->title }}">
                            @endif
                            <div class="card-body feature-box-content">
                                <span class="d-block alt-font text-blue-night text-uppercase font-weight-500 letter-spacing-1px">{{ $article->created_at->format('d M Y') }}</span>
                                <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">{{ $article->title }}</h6>
                                {{-- Utilisation de Str::limit pour tronquer le contenu HTML --}}
                                <p class="w-100 lg-w-95">{!! Str::words(strip_tags($article->content), 30, '...') !!}</p>
                                <a href="{{ route('blogs.show', $article->id) }}" class="btn btn-medium btn-dark-gray margin-15px-top btn-round-edge section-link blue-night">Lire l'article<i class="feather icon-feather-arrow-right icon-very-small right-icon"></i></a>
                            </div>
                            <div class="feature-box-overlay bg-white"></div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 ">
                        <p class="alt-font text-center text-extra-dark-gray">Aucun article n'a encore été publié.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <div class="container my-5">
        <div class="row justify-content-center">
            {{-- {{ $articles->links() }} --}}
        </div>
    </div>

</x-layouts.main>
