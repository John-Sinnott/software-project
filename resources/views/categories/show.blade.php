<x-app-layout>

<div class="max-w-6xl mx-auto px-6 py-10">

<div class="grid md:grid-cols-2 gap-6 items-center mb-8">
    <!-- Text-->
    <div>
        <h1 class="text-4xl font-bold text-white mb-3">
            {{ $category->name }}
        </h1>

        <p class="text-slate-400 leading-relaxed">
            {{ $category->description }}
        </p>
    </div>

    <!-- Infographic -->
    <div class="bg-slate-900 border border-slate-800 rounded-xl p-3 flex justify-center">

        @if($category->id == 1)
            <img src="{{ asset('images/deforestationinfog.png') }}" class="object-contain rounded">
        @elseif($category->id == 2)
            <img src="{{ asset('images/desertificationinfog.png') }}" class="object-contain rounded">
        @elseif($category->id == 3)
            <img src="{{ asset('images/biodiversitylossinfog.png') }}" class="object-contain rounded">
        @endif

    </div>

</div>

</div>



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



</x-app-layout>