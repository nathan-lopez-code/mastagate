<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }} / <a href="{{ route('home') }}">Retour au site</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                        {{ __("Gérer mes articles") }}
                    </h3>

                    <div class="flex justify-end mb-4">
                        <a href="{{ route('dashboard.articles.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            {{ __('Créer un article') }}
                        </a>
                    </div>

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">Titre</th>
                                <th scope="col" class="py-3 px-6">Date de création</th>
                                <th scope="col" class="py-3 px-6 text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($articles as $article)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $article->title }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $article->created_at->format('d M Y') }}
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <a href="{{route('dashboard.articles.edit', $article)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-2">Modifier</a>
                                        <form action="{{ route('dashboard.articles.destroy', $article) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger font-medium text-red-600 dark:text-red-500 hover:underline mx-2">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td colspan="3" class="py-4 px-6 text-center">
                                        {{ __("Vous n'avez pas encore d'articles.") }}
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
