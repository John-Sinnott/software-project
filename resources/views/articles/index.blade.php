<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Articles
        </h2>
    </x-slot>

    <div class="p-6">

        @foreach($articles as $article)

            <div class="mb-6 p-4 bg-white shadow rounded">

                <h3 class="text-lg font-bold">
                    Article {{ $article->id }}
                </h3>

                <p class="mt-2">
                    {{ $article->description }}
                </p>

                <a href="{{ route('articles.show', $article->id) }}"
                   class="text-blue-500 underline">
                   Read Full Article
                </a>

            </div>

        @endforeach

    </div>

</x-app-layout>