<x-app-layout>
   
    <div class="max-w-6xl mx-auto px-6 py-10">

    <div class="grid md:grid-cols-2 gap-6">
        @foreach($articles as $article)

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 hover:scale-[1.02] hover:shadow-lg transition duration-300">

            <!-- Top -->
            <div class="flex justify-between items-center mb-3 text-sm text-slate-400">
                <div class="mb-4">
                    @php
                        $category = strtolower($article->category->name);
                    @endphp

                    @if($category === 'deforestation')
                        <img src="{{ asset('images/deforestation.jpg') }}" class="w-full h-40 object-cover rounded-lg">
                    @elseif($category === 'desertification')
                        <img src="{{ asset('images/desertification.jpg') }}" class="w-full h-40 object-cover rounded-lg">
                    @elseif($category === 'biodiversity-loss')
                        <img src="{{ asset('images/biodiversity.png') }}" class="w-full h-40 object-cover rounded-lg">
                    @endif
                </div

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
                <div class="mt-4 bg-green-900/30 border border-green-800 rounded-lg p-4 text-center">
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
</div>
</x-app-layout>
