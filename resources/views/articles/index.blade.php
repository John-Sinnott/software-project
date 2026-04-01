<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Articles
        </h2>
    </x-slot>

    <div class="p-6">

        @foreach($articles as $article)

            <div class="mb-6 p-5 bg-white shadow-lg rounded-lg">

                <span class="text-sm text-green-600 font-semibold">
                    {{ $article->category }}
                </span>

                <span class="text-sm text-green-600 font-semibold">
                    {{ $article->date }}
                </span>

                <h3 class="text-xl font-bold mt-1">
                    {{ $article->title }}
                </h3>

                <p class="mt-2 text-gray-600">
                    {{ $article->description }}
                </p>

                <a href="{{ route('articles.show', $article->id) }}"
                class="inline-block mt-3 text-blue-500 font-semibold">
                    Read Full Article →
                </a>

                @if($article->stat_number)
                <div class="mt-3 p-3 bg-green-100 rounded">
                    <p class="text-2xl font-bold">
                        {{ number_format($article->stat_number) }}
                    </p>
                    <p class="text-sm text-gray-600">
                        {{ $article->stat_label }}
                    </p>
                </div>
                @endif

            </div>

        @endforeach

    </div>

</x-app-layout>