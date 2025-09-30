<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold fs-4 text-dark">
            {{ __('Créer un nouveau Pack de Services') }}
        </h2>
    </x-slot>

    <div>
        <div class="container">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <form action="{{ route('dashboard.packs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Section: Informations principales -->
                        <h5 class="mb-3 border-bottom pb-2">Informations principales</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nom du Pack <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name"
                                       class="form-control @error('name') is-invalid @enderror"
                                       value="{{ old('name') }}" placeholder="Ex: Pack Premium Web" required>
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Prix (€ ou autre devise)</label>
                                <input type="number" step="0.01" min="0" name="price" id="price"
                                       class="form-control @error('price') is-invalid @enderror"
                                       value="{{ old('price') }}" placeholder="Laissez vide si 'Sur devis'">
                                @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" rows="3"
                                      class="form-control @error('description') is-invalid @enderror"
                                      placeholder="Décrivez le pack...">{{ old('description') }}</textarea>
                            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <!-- Section: Avantages -->
                        <h5 class="mb-3 border-bottom pb-2">Avantages inclus</h5>
                        <div class="mb-4">
                            <textarea name="advantages" id="advantages" rows="4"
                                      class="form-control @error('advantages') is-invalid @enderror"
                                      placeholder="Chaque avantage sur une nouvelle ligne.&#10;Ex: Support 24/7&#10;Mises à jour gratuites">{{ old('advantages') }}</textarea>
                            <div class="form-text">Les avantages seront affichés sous forme de liste.</div>
                            @error('advantages') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <!-- Section: Média & Options -->
                        <h5 class="mb-3 border-bottom pb-2">Média & Options</h5>
                        <div class="row g-4 mb-4">
                            <!-- Image -->
                            <div class="col-md-6">
                                <label for="image" class="form-label">Image du Pack</label>
                                <input type="file" name="image" id="image" accept="image/*"
                                       class="form-control @error('image') is-invalid @enderror">
                                @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <!-- Options -->
                            <div class="col-md-6">
                                <div class="form-check mb-2">
                                    <input type="hidden" name="is_quotation" value="0">
                                    <input class="form-check-input" type="checkbox" name="is_quotation" value="1"
                                           id="isQuotation" {{ old('is_quotation') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="isQuotation">Prix sur devis</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input type="hidden" name="is_trending" value="0">
                                    <input class="form-check-input" type="checkbox" name="is_trending" value="1"
                                           id="isTrending" {{ old('is_trending') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="isTrending">Mettre en avant</label>
                                </div>
                                <div class="form-check">
                                    <input type="hidden" name="active" value="0">
                                    <input class="form-check-input" type="checkbox" name="active" value="1"
                                           id="isActive" {{ old('active', true) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="isActive">Activer (visible publiquement)</label>
                                </div>
                            </div>
                        </div>

                        <!-- Bouton -->
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="bi bi-plus-circle me-1"></i> Créer le Pack
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
