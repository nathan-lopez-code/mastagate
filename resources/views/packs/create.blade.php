<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Créer un nouveau Pack de Services') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('dashboard.packs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-6 text-center">
                            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Image du Pack</label>
                            <div class="flex justify-center items-center h-48 w-full bg-gray-100 dark:bg-gray-700 rounded-lg overflow-hidden border-2 border-dashed border-gray-300 dark:border-gray-600 mb-3"
                                 id="image-preview-container">
                                <img style="max-width: 500px" id="image-preview" src="#" alt="Prévisualisation de l'image" class="hidden h-full w-full object-cover">
                                <span id="placeholder-text" class="text-gray-400 dark:text-gray-500">Aucune image sélectionnée</span>
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

                        <div class="mb-6">
                            <label for="name" class="form-label">Nom du Pack</label>
                            <input type="text" class="form-control"
                                   id="name" name="name" placeholder="Ex: Pack Premium Web" required value="{{ old('name') }}">
                            @error('name')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="price" class="form-label">Prix (€ ou autre devise)</label>
                            <input type="number" step="0.01" min="0" class="form-control"
                                   id="price" name="price" placeholder="Ex: 99.99" required value="{{ old('price') }}">
                            @error('price')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="description" class="form-label">Description du Pack</label>
                            <textarea name="description" id="description" class="form-control min-h-[150px]" placeholder="Décrivez en quelques lignes ce que comprend ce pack.">{{ old('description') }}</textarea>
                            @error('description')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="advantages" class="form-label">Avantages / Caractéristiques (Liste)</label>
                            <textarea name="advantages" id="advantages" class="form-control min-h-[150px]" placeholder="Entrez un avantage par ligne ou séparez-les par des virgules. Ex:&#10;- Support 24/7&#10;- Mise à jour gratuite pendant 1 an">{{ old('advantages') }}</textarea>
                            @error('advantages')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex justify-end mt-8">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Enregistrer le Pack') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Les styles existants du modèle (form-group, form-label, etc.) sont conservés ici... */
        .form-group {
            margin-bottom: 1.5rem;
            font-size: 14px!important;
        }
        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #4a5568;
            margin-bottom: 0.5rem;
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

        #image{
            font-size: 14px;
        }

        #name {
            font-size: 20px!important;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Script de prévisualisation de l'image (identique à votre modèle)
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
            // Suppression de l'initialisation Summernote car on utilise des champs simples
        });
    </script>
</x-app-layout>
