<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modifier le Pack de Services') }}: {{ $pack->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('dashboard.packs.update', $pack) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Section: Informations du Pack -->
                        <h3 class="text-2xl font-bold mb-4 border-b pb-2 text-gray-800 dark:text-gray-200">
                            Détails de base du Pack
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div class="form-group">
                                <label for="name" class="form-label">Nom du Pack <span class="text-red-500">*</span></label>
                                <input type="text" class="form-control"
                                       id="name" name="name" placeholder="Ex: Pack Premium Web" required
                                       value="{{ old('name', $pack->name) }}">
                                @error('name')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="price" class="form-label">Prix (€ ou autre devise)</label>
                                <input type="number" step="0.01" min="0" class="form-control"
                                       id="price" name="price" placeholder="Laissez vide si 'Sur Devis'"
                                       value="{{ old('price', $pack->price) }}">
                                @error('price')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6 form-group">
                            <label for="description" class="form-label">Description du Pack</label>
                            <textarea name="description" id="description" class="form-control min-h-[100px]" placeholder="Décrivez en quelques lignes ce que comprend ce pack.">{{ old('description', $pack->description) }}</textarea>
                            @error('description')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="advantages" class="form-label">Avantages / Caractéristiques</label>
                            <textarea name="advantages" id="advantages" class="form-control min-h-[150px]" placeholder="Entrez chaque avantage sur une nouvelle ligne.&#10;Ex: Support 24/7&#10;Mise à jour gratuite pendant 1 an">{{ old('advantages', $pack->advantages) }}</textarea>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                Séparez chaque avantage par un retour à la ligne. Ces éléments apparaîtront sous forme de liste.
                            </p>
                            @error('advantages')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Séparateur visuel -->
                        <hr class="my-8 border-gray-300 dark:border-gray-700">

                        <!-- Section: Image et Options -->
                        <h3 class="text-2xl font-bold mb-4 border-b pb-2 text-gray-800 dark:text-gray-200">
                            Médias & Options d'Affichage
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Bloc Image -->
                            <div class="mb-6">
                                <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Image du Pack</label>
                                <div class="flex justify-center items-center h-48 w-full bg-gray-100 dark:bg-gray-700 rounded-lg overflow-hidden border-2 border-dashed border-gray-300 dark:border-gray-600 mb-3"
                                     id="image-preview-container">
                                    {{-- Affiche l'image existante si elle existe --}}
                                    @if ($pack->image)
                                        <img style="max-width: 500px" id="image-preview" src="{{ asset('storage/' . $pack->image) }}" alt="Prévisualisation de l'image" class="h-full w-full object-cover">
                                        <span id="placeholder-text" class="hidden text-gray-400 dark:text-gray-500">Aucune image sélectionnée</span>
                                    @else
                                        <img style="max-width: 500px" id="image-preview" src="#" alt="Prévisualisation de l'image" class="hidden h-full w-full object-cover">
                                        <span id="placeholder-text" class="text-gray-400 dark:text-gray-500">Aucune image sélectionnée</span>
                                    @endif
                                </div>
                                <input type="file" class="block w-full text-sm text-gray-900 dark:text-gray-100
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-md file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-indigo-50 file:text-indigo-700
                                    hover:file:bg-indigo-100"
                                       id="image" name="image" accept="image/*">
                                @error('image')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Bloc Options Booléennes -->
                            <div class="flex flex-col justify-center">
                                <div class="flex items-center form-group mb-4">
                                    <input type="hidden" name="is_quotation" value="0">
                                    <input id="is_quotation" name="is_quotation" type="checkbox" value="1" {{ old('is_quotation', $pack->is_quotation) ? 'checked' : '' }}
                                    class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-indigo-600">
                                    <label for="is_quotation" class="ml-2 form-label !mb-0 !font-normal">
                                        Prix sur Devis
                                    </label>
                                </div>

                                <div class="flex items-center form-group mb-4">
                                    <input type="hidden" name="is_trending" value="0">
                                    <input id="is_trending" name="is_trending" type="checkbox" value="1" {{ old('is_trending', $pack->is_trending) ? 'checked' : '' }}
                                    class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-indigo-600">
                                    <label for="is_trending" class="ml-2 form-label !mb-0 !font-normal">
                                        Mettre en Avant
                                    </label>
                                </div>

                                <div class="flex items-center form-group">
                                    <input type="hidden" name="active" value="0">
                                    <input id="active" name="active" type="checkbox" value="1" {{ old('active', $pack->active) ? 'checked' : '' }}
                                    class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-indigo-600">
                                    <label for="active" class="ml-2 form-label !mb-0 !font-normal">
                                        Rendre Actif (Visible publiquement)
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Séparateur visuel -->
                        <hr class="my-8 border-gray-300 dark:border-gray-700">

                        <!-- Bouton de Soumission -->
                        <div class="flex justify-end mt-8">
                            <button type="submit" class="btn btn-primary px-6 py-3 rounded-md shadow-md hover:shadow-lg transition-all duration-300">
                                {{ __('Mettre à jour le Pack') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Styles Personnalisés -->
    <style>
        .form-group {
            margin-bottom: 1.5rem;
            font-size: 14px !important;
        }
        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #4a5568;
            margin-bottom: 0.5rem;
        }
        input #advantages{
            height: 100px;
        }
        .form-select, .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 0.75rem;
            font-size: 14px;
            line-height: 1.5;
            color: #000000;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e2e8f0;
            border-radius: 0.375rem;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .form-control:focus, .form-select:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.5);
            outline: none;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: all 0.15s ease-in-out;
            cursor: pointer;
            border: 1px solid transparent;
        }
        .btn-primary {
            background-color: #4f46e5;
            color: #fff;
        }
        .btn-primary:hover {
            background-color: #4338ca;
        }
        #image {
            font-size: 14px;
        }
        #name {
            font-size: 20px !important;
        }
        .form-group input[type="checkbox"] + label {
            margin-bottom: 0;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Script de prévisualisation de l'image
            document.getElementById('image').addEventListener('change', function(event) {
                const [file] = event.target.files;
                if (file) {
                    const preview = document.getElementById('image-preview');
                    const placeholder = document.getElementById('placeholder-text');
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.classList.remove('hidden');
                        placeholder.classList.add('hidden');
                    }
                    reader.readAsDataURL(file);
                } else {
                    document.getElementById('image-preview').classList.add('hidden');
                    document.getElementById('placeholder-text').classList.remove('hidden');
                    document.getElementById('image-preview').src = '#';
                }
            });

            // Logique de désactivation du prix si "Sur Devis" est coché
            const priceInput = document.getElementById('price');
            const isQuotationCheckbox = document.getElementById('is_quotation');

            function togglePriceField() {
                if (isQuotationCheckbox.checked) {
                    priceInput.setAttribute('disabled', 'disabled');
                    priceInput.value = '';
                    priceInput.placeholder = 'Prix non applicable (Sur Devis)';
                } else {
                    priceInput.removeAttribute('disabled');
                    priceInput.placeholder = 'Laissez vide si \'Sur Devis\'';
                }
            }

            togglePriceField();
            isQuotationCheckbox.addEventListener('change', togglePriceField);
        });
    </script>
</x-app-layout>
