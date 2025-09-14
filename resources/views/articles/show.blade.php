<x-layouts.main title="{{ $article->title }} - MastaGate">

    <section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset('images/articles/' . $article->image) }}');">
        <div class="opacity-extra-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-stretch justify-content-center pt-20 pb-20 pt-lg-20 pb-lg-20 pt-md-20 pb-md-20 pt-sm-20 pb-sm-20">
                <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                    <h1 class="alt-font text-white opacity-6 margin-10px-bottom">
                        {{ $article->user->name }} le {{ $article->created_at->format('d M Y') }}
                    </h1>
                    <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
                        {{ $article->title }}
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section id="article-content" class="bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    @if ($article->image)
                        <img src="{{ asset('images/articles/' . $article->image) }}" class="img-fluid rounded-lg mb-4" alt="{{ $article->title }}">
                    @endif

                    <div class="content-trix text-extra-dark-gray alt-font text-justify">
                        {!! $article->content !!}
                    </div>

                    <div class="text-center margin-4-rem-top">
                        <a href="{{ route('blogs.index') }}" class="btn btn-medium btn-dark-gray btn-round-edge blue-night">
                            <i class="feather icon-feather-arrow-left icon-very-small left-icon"></i> Retour au blog
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        /* Styles pour que Trix Editor s'affiche correctement */
        .content-trix figure {
            margin: 1em 0;
            text-align: center;
        }
        .content-trix figure img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .content-trix p {
            font-size: 1rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }
        .content-trix h1, .content-trix h2, .content-trix h3, .content-trix h4, .content-trix h5, .content-trix h6 {
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        .content-trix blockquote {
            border-left: 4px solid #0056b3;
            padding-left: 1rem;
            margin-left: 0;
            font-style: italic;
            color: #555;
        }
    </style>

</x-layouts.main>
