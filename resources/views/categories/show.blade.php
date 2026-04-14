<x-app-layout>

<div class="w-full">

    <!-- Images -->
    <div class="relative w-full h-[400px] mb-10">

        @if($category->id == 1)
            <img src="{{ asset('images/deforestationinfog.png') }}" class="w-full h-full object-cover">
        @elseif($category->id == 2)
            <img src="{{ asset('images/desertificationinfog.png') }}" class="w-full h-full object-cover">
        @elseif($category->id == 3)
            <img src="{{ asset('images/biodiversitylossinfog.png') }}" class="w-full h-full object-cover">
        @endif

        <!-- dark gradient at bottom -->
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>

        <!-- Text -->
        <div class="absolute bottom-6 left-6 text-white max-w-2xl">
            <h1 class="text-4xl font-bold mb-2">
                {{ $category->name }}
            </h1>
            <p class="text-slate-300">
                {{ $category->description }}
            </p>
        </div>

    </div>

</div>

<div class="max-w-6xl mx-auto px-6">

    <!-- Articles -->
    <h2 class="text-2xl font-semibold text-white mb-6">
        Explore Articles
    </h2>

    <div class="grid md:grid-cols-2 gap-6">

        @forelse($category->articles as $article)
            <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 hover:border-slate-700 transition hover:scale-[1.02]">

                <h3 class="text-lg font-semibold text-white mb-2">
                    {{ $article->name }}
                </h3>

                <p class="text-slate-400 mb-4">
                    {{ $article->description }}
                </p>

                @if($article->stat_number)
                    <div class="bg-green-900/30 border border-green-700 rounded-lg p-3 mb-3 text-center">
                        <p class="text-xl font-bold text-green-400">
                            {{ number_format($article->stat_number) }}
                        </p>
                        <p class="text-xs text-green-300">
                            {{ $article->stat_label }}
                        </p>
                    </div>
                @endif

                <a href="{{ route('articles.show', $article) }}"
                   class="text-blue-400 hover:text-blue-300 text-sm">
                    Read Article
                </a>

            </div>
        @empty
            <p class="text-slate-400">
                No articles available.
            </p>
        @endforelse

    </div>

</div>

</x-app-layout>