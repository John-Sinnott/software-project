<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Articles
        </h2>
    </x-slot>

    <div class="space-y-6">

        @foreach($articles as $article)

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 transition">

            <!-- Top -->
            <div class="flex justify-between items-center mb-3 text-sm text-slate-400">
                <span>{{ $article->date }}</span>
                <span class="bg-slate-800 px-2 py-1 rounded text-xs">
                    {{ $article->category->name ?? 'General' }}
                </span>
            </div>

            <!-- Name -->
            <h3 class="text-xl font-semibold text-white mb-2">
                {{ $article->name }}
            </h3>

            <!-- Description -->
            <p class="text-slate-400 mb-4">
                {{ $article->description }}
            </p>

            <!-- Full Article -->
            <a href="{{ route('articles.show', $article->id) }}"
            class="text-blue-400 hover:text-blue-300 font-medium">
                Read Full Article →
            </a>

            <!-- Stat's -->
            @if($article->stat_number)
                <div class="mt-4 bg-green-900/30 border border-green-800 rounded-lg p-4">
                    <p class="text-2xl font-bold text-green-400">
                        {{ number_format($article->stat_number) }}
                    </p>
                    <p class="text-sm text-green-300">
                        {{ $article->stat_label }}
                    </p>
                </div>
            @endif

            </div>

        @endforeach

    </div>

</x-app-layout>