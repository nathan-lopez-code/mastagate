<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Créer un article') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
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

                        <div class="form-group mb-6">
                            <label for="categorie" class="form-label">Catégorie</label>
                            <select name="categorie" id="categorie" class="form-select">
                                <option value="" disabled selected>Sélectionner une catégorie</option>
                                <option value="Actualités Tech">Actualités Tech</option>
                                <option value="Avis & Tests">Avis & Tests</option>
                                <option value="Tutoriels & Guides">Tutoriels & Guides</option>
                                <option value="Logiciels & Applications">Logiciels & Applications</option>
                                <option value="Sécurité & Cybersécurité">Sécurité & Cybersécurité</option>
                                <option value="Autres">Autres</option>
                            </select>
                            @error('categorie')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="content" class="form-label">Contenu de l'article</label>
                            <textarea name="content" id="summernote" class="form-control min-h-[300px]">{{ old('content') }}</textarea>
                            @error('content')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex justify-end mt-8">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Publier l\'article') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
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

        #title {
            font-size: 20px!important;
        }

        .note-editable{
            font-size: 14px;
            color: black!important;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Script de prévisualisation de l'image de couverture (inchangé)
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

            // Initialisation de Summernote
            $('#summernote').summernote({
                placeholder: 'Commencez à écrire votre article ici...',
                tabsize: 2,
                height: 300,
                callbacks: {
                    onImageUpload: function(files) {
                        var formData = new FormData();
                        formData.append('file', files[0]);

                        $.ajax({
                            // Utilisez la route nommée que nous avons définie
                            url: '{{ route('dashboard.articles.ckeditor_upload') }}',
                            method: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                $('#summernote').summernote('insertImage', response.url);
                            },
                            error: function(error) {
                                console.log(error);
                                alert('Erreur lors du téléversement de l\'image.');
                            }
                        });
                    }
                }
            });
        });
    </script>
</x-app-layout>
