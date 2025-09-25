<x-layouts.main title="{{ $article->title }} - MastaGate">

    <!-- Section d'en-tête (Hero) avec image de couverture -->
    <section class="relative h-[400px] md:h-[500px] lg:h-[600px] flex items-center justify-center text-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 ease-in-out transform scale-100"
             style="background-image:url('{{ asset('images/articles/'. $article->image) }}');">
        </div>
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="relative z-10 p-4">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-white text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight tracking-tight mb-4">
                    {{ $article->title }}
                </h1>
                <p class="text-white text-lg sm:text-xl font-light opacity-80">
                    Par <span class="font-bold">{{ $article->user->name }}</span> le {{ $article->created_at->format('d M Y') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Contenu de l'article et barre latérale -->
    <section class="bg-white py-12 md:py-20">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <!-- Contenu principal de l'article -->
                <div class="lg:col-span-2">
                    <div class="prose max-w-none">
                        <p class="text-lg text-gray-700 leading-relaxed mb-8">
                            {!! $article->content !!}
                        </p>
                    </div>

                    <!-- Bouton de retour -->
                    <div class="mt-12 text-center">
                        <a href="{{ route('blogs.index') }}" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 transition duration-150 ease-in-out">
                            <i class="fas fa-arrow-left mr-2"></i> Retour au blog
                        </a>
                    </div>
                </div>

                <!-- Barre latérale -->
                <div class="lg:col-span-1">
                    <aside class="space-y-12">
                        <!-- Section des autres articles -->
                        <div>
                            <h3 class="text-2xl font-bold mb-6 text-gray-900">Autres articles</h3>
                            <div class="space-y-6">
                                @forelse ($otherArticles as $otherArticle)
                                    <a href="{{ route('blogs.show', ['slug' => $otherArticle->slug]) }}" class="group block bg-gray-50 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
                                        @if ($otherArticle->image)
                                            <div class="h-40 overflow-hidden">
                                                <img src="{{ asset('images/articles/'. $otherArticle->image) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="{{ $otherArticle->title }}">
                                            </div>
                                        @endif
                                        <div class="p-4">
                                            <h4 class="text-lg font-semibold text-gray-900 leading-snug group-hover:text-indigo-600 transition-colors duration-300">{{ $otherArticle->title }}</h4>
                                            <p class="text-sm text-gray-500 mt-1">{{ $otherArticle->created_at->format('d M Y') }}</p>
                                        </div>
                                    </a>
                                @empty
                                    <p class="text-base text-gray-500">Aucun autre article disponible.</p>
                                @endforelse
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <!-- Tailwind CSS et scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- CSS personnalisé pour le contenu de l'article (Prose) -->
    <style>
        .prose h1, .prose h2, .prose h3, .prose h4, .prose h5, .prose h6 {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            color: #1a202c;
            line-height: 1.25;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .prose h1 { font-size: 2.5rem; }
        .prose h2 { font-size: 2rem; }
        .prose h3 { font-size: 1.75rem; }

        .prose p {
            font-size: 1rem;
            line-height: 1.75;
            color: #4a5568;
            margin-bottom: 1.25rem;
        }

        .prose img {
            max-width: 100%;
            height: auto;
            border-radius: 0.5rem;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .prose blockquote {
            border-left: 4px solid #4f46e5;
            padding-left: 1.5rem;
            font-style: italic;
            color: #6b7280;
            margin: 2rem 0;
        }
    </style>

</x-layouts.main>
