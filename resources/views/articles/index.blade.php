<x-layouts.main title="Notre blog : MastaGate">

    <section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image:url('images/blgo-banner-img-01.jpg');">
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

            <div class="row justify-content-center mb-4 text-center">
                <div class="col-12 filter-buttons">
                    <button class="btn btn-dark-gray btn-small filter-btn active" data-category="all">Toutes</button>
                    <button class="btn btn-dark-gray btn-small filter-btn" data-category="actualites-tech">Actualités Tech</button>
                    <button class="btn btn-dark-gray btn-small filter-btn" data-category="avis-tests">Avis & Tests</button>
                    <button class="btn btn-dark-gray btn-small filter-btn" data-category="tutoriels-guides">Tutoriels & Guides</button>
                    <button class="btn btn-dark-gray btn-small filter-btn" data-category="logiciels-applications">Logiciels & Applications</button>
                    <button class="btn btn-dark-gray btn-small filter-btn" data-category="securite-cybersecurite">Sécurité & Cybersécurité</button>
                    <button class="btn btn-dark-gray btn-small filter-btn" data-category="autres">Autres</button>
                </div>
            </div>

            <div class="article-grid">
                @forelse ($articles as $article)
                    <div class="article-card" data-category="{{ Str::slug($article->categorie) }}">
                        <div class="card h-100 feature-box text-left box-shadow-large box-shadow-double-large-hover bg-white padding-3-rem-all lg-padding-2-rem-all md-padding-3-rem-all">
                            @if ($article->image)
                                <img src="{{ asset('images/articles/' . $article->image) }}" class="card-img-top mb-3 border-radius-6px" alt="{{ $article->title }}" style="height: 150px; object-fit: cover;">
                            @endif
                            <div class="card-body feature-box-content">
                                <span class="d-block alt-font text-blue-night text-uppercase font-weight-500 letter-spacing-1px" style="font-size: 0.8rem;">{{ $article->created_at->format('d M Y') }} - {{ $article->category }}</span>
                                <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray" style="font-size: 1rem; margin-top: 0.5rem; margin-bottom: 0.5rem;">{{$article->title }}</h6>

                                <a href="{{ route('blogs.show', ['slug'=>$article->slug]) }}" class="btn btn-small btn-dark-gray margin-10px-top btn-round-edge section-link blue-night">Lire l'article<i class="feather icon-feather-arrow-right icon-very-small right-icon"></i></a>
                            </div>
                            <div class="feature-box-overlay bg-white"></div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="alt-font text-extra-dark-gray">Aucun article n'a encore été publié dans cette catégorie.</p>
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

    <style>
        .article-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 24px;
        }

        .article-card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .article-card .card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .article-card .card-body {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .article-card p {
            flex-grow: 1; /* Permet au paragraphe de prendre tout l'espace disponible */
        }

        .article-card a.btn {
            margin-top: auto; /* Pousse le bouton vers le bas */
        }

        /* Styles pour les boutons de filtre */
        .filter-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
            margin-bottom: 24px;
        }
        .filter-btn {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .filter-btn:hover {
            background-color: #555;
        }
        .filter-btn.active {
            background-color: #007bff; /* Ou une autre couleur de votre choix */
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const articles = document.querySelectorAll('.article-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    const category = this.dataset.category;
                    articles.forEach(article => {
                        const articleCategory = article.dataset.category;
                        if (category === 'all' || articleCategory === category) {
                            article.style.display = 'block';
                        } else {
                            article.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</x-layouts.main>
