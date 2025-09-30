<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }} / <a href="{{ route('home') }}">Retour au site</a>
        </h2>
    </x-slot>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Liste des articles</h4>
            <div class="row g-4">
                @foreach($articles as $article)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <!-- Image en grand avec taille uniforme -->
                            @if($article->image)
                                <img src="{{ asset('images/articles/'. $article->image) }}"
                                     class="card-img-top rounded-top article-img"
                                     alt="image article">
                            @else
                                <img src="{{ asset('images/our-story-img11.jpg') }}"
                                     class="card-img-top rounded-top article-img"
                                     alt="placeholder">
                            @endif

                            <div class="card-body d-flex flex-column">
                                <!-- Titre -->
                                <h5 class="fw-bold mb-2 text-truncate">{{ $article->title }}</h5>

                                <!-- Catégorie -->
                                <span class="badge bg-success mb-3 align-self-start">
                                    {{ $article->categorie ?? 'Non classé' }}
                                </span>

                                <!-- Actions -->
                                <div class="d-flex justify-content-between mt-auto">
                                    <div>
                                        <a href="{{ route('blogs.show', $article->id) }}" class="btn btn-sm btn-outline-info me-2">
                                            <i class="ti ti-eye"></i> Voir
                                        </a>
                                        <a href="{{ route('dashboard.articles.edit', $article->id) }}" class="btn btn-sm btn-outline-secondary me-2">
                                            <i class="ti ti-pencil"></i> Éditer
                                        </a>
                                    </div>
                                    <form action="{{ route('dashboard.articles.destroy', $article->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Supprimer cet article ?')" class="btn btn-sm btn-outline-danger">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- Footer avec infos -->
                            <div class="card-footer bg-light text-muted small text-end">
                                Publié par {{ $article->user->name ?? 'Inconnu' }} • {{ $article->created_at->format('d M Y') }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Styles personnalisés -->
    <style>
        .article-img {
            height: 200px; /* hauteur fixe pour toutes les images */
            object-fit: cover; /* évite la déformation, crop propre */
            width: 100%;
        }
        .card {
            min-height: 100%; /* uniformiser la hauteur */
        }
    </style>
</x-app-layout>
