<x-app-layout>

<div class="p-6 max-w-4xl mx-auto bg-white shadow rounded">

    <h1 class="text-2xl font-bold mb-4">
        Article {{ $article->id }}
    </h1>

    <p class="mb-4">
        {{ $article->description }}
    </p>

    <p>
        {{ $article->article_full }}
    </p>

</div>

</x-app-layout>