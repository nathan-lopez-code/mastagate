<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Créer un article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('dashboard.articles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-6 text-center">
                            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Image de l'article</label>
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
                            <label for="title" class="sr-only">Titre de l'article</label>
                            <input type="text" class="block w-full text-4xl font-extrabold text-gray-900 dark:text-gray-100 bg-transparent border-0 focus:ring-0 px-0 mb-2"
                                   id="title" name="title" placeholder="Votre titre d'article ici..." required value="{{ old('titre') }}">
                            @error('title')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                            <hr class="border-gray-300 dark:border-gray-600">
                        </div>

                        <div class="mb-6">
                            <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Contenu de l'article</label>
                            {{-- L'input caché est nécessaire pour Trix --}}
                            <input id="trix-editor-content" type="hidden" name="content" value="{{ old('content') }}">
                            {{-- L'éditeur Trix lui-même --}}
                            <trix-editor input="trix-editor-content"
                                         class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 min-h-[300px]">
                            </trix-editor>
                            @error('content')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex justify-end mt-8">
                            <button type="submit" class="inline-flex items-center px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-base text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Publier l\'article') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
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
                // Si aucun fichier n'est sélectionné après en avoir eu un
                document.getElementById('image-preview').classList.add('hidden');
                document.getElementById('placeholder-text').classList.remove('hidden');
                document.getElementById('image-preview').src = '#'; // Réinitialise la source
            }
        });
    </script>
</x-app-layout>
