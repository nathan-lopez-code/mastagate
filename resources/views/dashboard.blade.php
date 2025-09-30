<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }} / <a href="{{ route('home') }}">Retour au site</a>
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-lg-8">
            <div class="card w-100">
                <div class="card-body">
                    <h4 class="card-title">Trafic du site</h4>
                    <div style="height: 350px;">
                        <canvas id="trafficChart" style="width: 100%; height: 100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card overflow-hidden">
                <div class="card-body pb-0">
                    <div class="d-flex align-items-start">
                        <div>
                            <h4 class="card-title">Kpis indicator</h4>
                            <p class="card-subtitle">stat important</p>
                        </div>
                        <div class="ms-auto">
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="text-muted" id="year1-dropdown" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="ti ti-dots fs-7"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="year1-dropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{route('dashboard.packs.create')}}">Creer un pack</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('dashboard.articles.create')}}">Creer un article</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('home')}}">Visiter le site</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pb-3 d-flex align-items-center">
                        <span class="btn btn-primary rounded-circle round-48 hstack justify-content-center">
                          <i class="ti ti-shopping-cart fs-6"></i>
                        </span>
                        <div class="ms-3">
                            <h5 class="mb-0 fw-bolder fs-4">Notre de packs</h5>
                            <span class="text-muted fs-3">Packs services actives</span>
                        </div>
                        <div class="ms-auto">
                            <span class="badge bg-secondary-subtle text-muted">{{count($packs)}}</span>
                        </div>
                    </div>
                    <div class="py-3 d-flex align-items-center">
                        <span class="btn btn-warning rounded-circle round-48 hstack justify-content-center">
                          <i class="ti ti-user fs-6"></i>
                        </span>
                        <div class="ms-3">
                            <h5 class="mb-0 fw-bolder fs-4">Ce Mois</h5>
                            <span class="text-muted fs-3">nombre visiteur</span>
                        </div>
                        <div class="ms-auto">
                            <span class="badge bg-secondary-subtle text-muted">{{$totalVisitsCurrentMonth}}</span>
                        </div>
                    </div>
                    <div class="py-3 d-flex align-items-center">
                        <span class="btn btn-success rounded-circle round-48 hstack justify-content-center">
                          <i class="ti ti-user-check fs-6"></i>
                        </span>
                        <div class="ms-3">
                            <h5 class="mb-0 fw-bolder fs-4">Mois dernier</h5>
                            <span class="text-muted fs-3">Nombre visiteurs</span>
                        </div>
                        <div class="ms-auto">
                            <span class="badge bg-secondary-subtle text-muted">{{$totalVisitsLastMonth}}</span>
                        </div>
                    </div>
                    <div class="pt-3 mb-7 d-flex align-items-center">
                        <span class="btn btn-secondary rounded-circle round-48 hstack justify-content-center">
                          <i class="ti ti-message-dots fs-6"></i>
                        </span>
                        <div class="ms-3">
                            <h5 class="mb-0 fw-bolder fs-4">Articles</h5>
                            <span class="text-muted fs-3">articles publié</span>
                        </div>
                        <div class="ms-auto">
                            <span class="badge bg-secondary-subtle text-muted">{{count($articles)}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Packs de Services</h4>
                            <p class="card-subtitle">
                                Liste des packs disponibles
                            </p>
                        </div>
                        <div class="ms-auto mt-3 mt-md-0">
                            <select class="form-select theme-select border-0" aria-label="Filtrer par">
                                <option value="1">Tous les packs</option>
                                <option value="2">Actifs uniquement</option>
                                <option value="3">En tendance</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive mt-4">
                        <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                            <thead>
                            <tr>
                                <th scope="col" class="px-0 text-muted">Nom du Pack</th>
                                <th scope="col" class="px-0 text-muted">Prix</th>
                                <th scope="col" class="px-0 text-muted">Statut</th>
                                <th scope="col" class="px-0 text-muted text-end">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($packs as $pack)
                                <tr>

                                    <td class="px-0">{{ $pack->name }}</td>
                                    <td class="px-0">
                                        @if($pack->is_quotation)
                                            Sur Devis
                                        @else
                                            {{ $pack->price }} €
                                        @endif
                                    </td>
                                    <td class="px-0">
                                        @if($pack->active)
                                            <span class="badge bg-success">Actif</span>
                                        @else
                                            <span class="badge bg-secondary">Inactif</span>
                                        @endif
                                        @if($pack->is_trending)
                                            <span class="badge bg-warning ms-1">Tendance</span>
                                        @endif
                                    </td>
                                    <td class="px-0 text-end">
                                        <a href="{{ route('dashboard.packs.edit', $pack->id) }}" class="btn btn-sm btn-outline-secondary me-2">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <form action="{{ route('dashboard.packs.destroy', $pack->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Supprimer ce pack ?')" class="btn btn-sm btn-outline-danger">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Articles récents</h4>
                </div>
                <div class="comment-widgets scrollable mb-2 common-widget" style="height: 465px" data-simplebar="">
                    @foreach($articles->sortByDesc('created_at')->take(5) as $article)
                        <div class="d-flex flex-row comment-row border-bottom p-3 gap-3">
                            <!-- Image -->
                            <div>
                    <span>
                        <img src="{{ $article->image ? asset('images/articles/'.$article->image) : asset('assets/images/no-image.png') }}"
                             class="rounded" alt="{{ $article->title }}" width="60" height="60" style="object-fit:cover;"/>
                    </span>
                            </div>
                            <!-- Contenu -->
                            <div class="comment-text w-100">
                                <h6 class="fw-medium mb-1">{{ Str::limit($article->title, 40) }}</h6>
                                <p class="mb-1 fs-6 text-muted">
                                    {{ Str::limit($article->description, 60) }}
                                </p>
                                <!-- Footer -->
                                <div class="comment-footer mt-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="badge bg-primary-subtle text-primary">Publié</span>
                                            <span class="action-icons">
                                            <a href="{{ route('blogs.show', $article->id) }}" class="ps-2" title="Voir"><i class="ti ti-eye fs-5"></i></a>
                                            <a href="{{ route('dashboard.articles.edit', $article->id) }}" class="ps-2" title="Modifier"><i class="ti ti-edit fs-5"></i></a>
                                            <form action="{{ route('dashboard.articles.destroy', $article->id) }}" method="POST" class="d-inline">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-link p-0 ps-2 text-danger" title="Supprimer" onclick="return confirm('Supprimer cet article ?')">
                                                    <i class="ti ti-trash fs-5"></i>
                                                </button>
                                            </form>
                                        </span>
                                </div>
                                    <span class="text-muted small d-block mt-1 text-end">
                                        {{ $article->created_at->format('d M Y') }}
                                    </span>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    </div>
                </div>

        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title mb-0">Profil Utilisateur</h4>
                        <span class="badge bg-success ms-auto">Connecté</span>
                    </div>

                    <div class="d-flex align-items-center flex-row mt-4">
                        <div class="p-2">
                            <img src="{{ Auth::user()->profile_photo_url ?? asset('assets/images/profile/user-1.jpg') }}"
                                 alt="User" class="rounded-circle" width="80" height="80">
                        </div>
                        <div class="p-2">
                            <h3 class="mb-0">{{ Auth::user()->name }}</h3>
                            <small class="text-muted">{{ Auth::user()->email }}</small>
                        </div>
                    </div>

                    <table class="table table-borderless mt-3">
                        <tbody>
                        <tr>
                            <td>Nom complet</td>
                            <td class="fw-medium">{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td class="fw-medium">{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <td>Date d’inscription</td>
                            <td class="fw-medium">{{ Auth::user()->created_at->format('d M Y') }}</td>
                        </tr>
                        <tr>
                            <td>Dernière connexion</td>
                            <td class="fw-medium">{{ Auth::user()->last_login_at ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td>Rôle</td>
                            <td class="fw-medium">
                        <span class="badge bg-info">
                            {{ Auth::user()->role ?? 'Utilisateur' }}
                        </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <hr>
                    <ul class="list-unstyled row text-center city-weather-days mb-0">
                        <li class="col">
                            <i class="ti ti-calendar fs-4 text-primary"></i>
                            <span>Membre depuis</span>
                            <h3 class="mb-0 fs-6 lh-base">
                                {{ Auth::user()->created_at->diffForHumans() }}
                            </h3>
                        </li>
                        <li class="col">
                            <i class="ti ti-clock fs-4 text-success"></i>
                            <span>Dernière activité</span>
                            <h3 class="mb-0 fs-6 lh-base">
                                {{ Auth::user()->updated_at->diffForHumans() }}
                            </h3>
                        </li>
                        <li class="col">
                            <i class="ti ti-shield-check fs-4 text-warning"></i>
                            <span>Statut</span>
                            <h3 class="mb-0 fs-6 lh-base">Actif</h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('trafficChart').getContext('2d');

        const trafficChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($days),
                datasets: [{
                    label: 'Visites',
                    data: @json($trafficLast7Days),
                    borderColor: 'rgba(0, 123, 255, 1)',
                    backgroundColor: 'rgba(0, 123, 255, 0.2)',
                    tension: 0.4,
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: true },
                    tooltip: { mode: 'index', intersect: false }
                },
                scales: {
                    x: { title: { display: true, text: 'Jour' } },
                    y: { title: { display: true, text: 'Visites' }, beginAtZero: true }
                }
            }
        });
    </script>

</x-app-layout>
