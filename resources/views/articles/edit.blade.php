<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Modification - {{ $article->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('dashboard.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-6">
                            <label for="image" class="form-label">Image de l'article</label>
                            <div class="image-preview-container mb-3" id="image-preview-container">
                                @if($article->image)
                                    <img id="image-preview" src="{{ asset('images/articles/'. $article->image) }}" alt="Prévisualisation de l'image" class="image-preview">
                                @else
                                    <img id="image-preview" src="#" alt="Prévisualisation de l'image" class="image-preview hidden">
                                    <span id="placeholder-text" class="placeholder-text">Aucune image sélectionnée</span>
                                @endif
                            </div>
                            <input type="file" class="file-input" id="image" name="image" accept="image/*">
                            @error('image')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-6">
                            <label for="title" class="sr-only">Titre de l'article</label>
                            <input value="{{$article->title}}" type="text" class="form-control-lg" id="title" name="title" placeholder="Votre titre d'article ici..." required>
                            @error('title')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                            <hr class="form-separator">
                        </div>

                        <div class="form-group mb-6">
                            <label for="category" class="form-label">Catégorie</label>
                            <select name="category" id="category" class="form-select">
                                <option value="" disabled selected>Sélectionner une catégorie</option>
                                @foreach(['Actualités Tech', 'Avis & Tests', 'Tutoriels & Guides', 'Logiciels & Applications', 'Sécurité & Cybersécurité', 'Autres'] as $category)
                                    <option value="{{ $category }}" @if($article->category == $category) selected @endif>{{ $category }}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-6">
                            <label for="content" class="form-label">Contenu de l'article</label>
                            <textarea name="content" id="editor" class="form-control min-h-[300px]">{{ $article->content }}</textarea>
                            @error('content')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex justify-end mt-8">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Mettre à jour l\'article') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .form-group { margin-bottom: 1.5rem; }
        .form-label { display: block; font-size: 0.875rem; font-weight: 500; color: #4a5568; margin-bottom: 0.5rem; }
        .form-control, .form-select {
            display: block; width: 100%; padding: 0.5rem 0.75rem; font-size: 1rem; line-height: 1.5;
            color: #4a5568; background-color: #fff; border: 1px solid #e2e8f0; border-radius: 0.375rem;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05); transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .form-control:focus, .form-select:focus { border-color: #6366f1; box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.5); outline: none; }
        .form-control-lg { font-size: 2.25rem; font-weight: 800; color: #1a202c; background: transparent; border: none; padding: 0; margin-bottom: 0.5rem; }
        .form-control-lg:focus { box-shadow: none; }
        .form-separator { border-top: 1px solid #e2e8f0; margin-top: 0.5rem; }
        .btn { display: inline-flex; align-items: center; padding: 0.75rem 1.5rem; border-radius: 0.375rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; transition: all 0.15s ease-in-out; cursor: pointer; border: 1px solid transparent; }
        .btn-primary { background-color: #4f46e5; color: #fff; }
        .btn-primary:hover { background-color: #4338ca; }

        /* Styles de prévisualisation d'image */
        .image-preview-container {
            display: flex; justify-content: center; align-items: center; height: 12rem; width: 100%;
            background-color: #f7fafc; border: 2px dashed #cbd5e0; border-radius: 0.5rem;
            overflow: hidden; margin-bottom: 0.75rem;
            min-height: 300px;
        }
        .image-preview { max-width: 500px; height: 100%; width: 100%; object-fit: cover; }
        .placeholder-text { color: #a0aec0; }
        .hidden { display: none; }
        .file-input {
            display: block; width: 100%; font-size: 0.875rem;
            color: #1a202c;
            /* Styles des pseudo-éléments pour la customisation */
            -webkit-appearance: none; appearance: none;
            background-color: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 0.375rem;
        }
        /* Style CKEditor */
        .ck-editor__editable_inline { min-height: 500px !important; color: #0b0b0b !important; }
    </style>

    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>

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
                    if (placeholder) { placeholder.classList.add('hidden'); }
                }
                reader.readAsDataURL(file);
            } else {
                const preview = document.getElementById('image-preview');
                const placeholder = document.getElementById('placeholder-text');
                preview.classList.add('hidden');
                preview.src = '#';
                if (placeholder) { placeholder.classList.remove('hidden'); }
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            const imagePreview = document.getElementById('image-preview');
            const placeholder = document.getElementById('placeholder-text');
            if (imagePreview && imagePreview.getAttribute('src') && imagePreview.getAttribute('src') !== '#') {
                imagePreview.classList.remove('hidden');
                if (placeholder) { placeholder.classList.add('hidden'); }
            }
        });
    </script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                ckfinder: {
                    uploadUrl: '{{ route('dashboard.articles.ckeditor_upload') }}?_token={{ csrf_token() }}'
                }
            })
            .catch( error => {
                console.error( error );
            });
    </script>

</x-app-layout>
