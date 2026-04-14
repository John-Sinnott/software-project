<x-app-layout>

<div class="max-w-4xl mx-auto">

 
    <a href="{{ route('articles.index') }}"
       class="text-blue-400 hover:text-blue-300 text-sm mb-6 inline-block">
        ← Back to Articles
    </a>

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8">

        <!-- category and the date-->
        <div class="flex justify-between items-center mb-4 text-sm text-slate-400">
            <span class="bg-slate-800 px-3 py-1 rounded-full">
                {{ $article->category->name ?? 'General' }}
            </span>
            <span>{{ $article->date }}</span>
        </div>

        <!-- Name -->
        <h1 class="text-3xl font-bold text-white mb-4">
            {{ $article->name }}
        </h1>

        <!-- Description -->
        <p class="text-slate-400 mb-6 text-lg">
            {{ $article->description }}
        </p>

        <!-- Map Div -->
        <div id="map" class="h-[300px] rounded-xl mb-6"></div>

        <!-- Statistic's name and number -->
        @if($article->stat_number)
        <div class="bg-green-900/30 border border-green-700 rounded-xl p-6 mb-6 text-center">
            <p class="text-4xl font-bold text-green-400">
                {{ number_format($article->stat_number) }}
            </p>
            <p class="text-green-300 text-sm mt-1">
                {{ $article->stat_label }}
            </p>
        </div>
        @endif

        <!-- Full article with dropdown toggle -->
        <div>
            <button id="toggleBtn"
                class="text-blue-400 hover:text-blue-300 mb-3">
                Read Full Article ↓
            </button>

            <div id="fullText" class="hidden text-slate-300 leading-relaxed">
                {{ $article->article_full }}
            </div>
        </div>

    </div>

</div>

<!-- Map Javascript from leaflet.js -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    var map = L.map('map').setView([{{ $article->latitude }}, {{ $article->longitude }}], 5);

    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        maxZoom: 20,
        attribution: '&copy; OpenStreetMap & CARTO'
    }).addTo(map);

    L.marker([{{ $article->latitude }}, {{ $article->longitude }}])
        .addTo(map)
        .bindPopup("<strong>{{ $article->name }}</strong>")
        .openPopup();

});
</script>

<!-- Ful article Toggle -->
<script>
document.getElementById('toggleBtn').addEventListener('click', function() {
    const text = document.getElementById('fullText');

    if (text.classList.contains('hidden')) {
        text.classList.remove('hidden');
        this.innerText = "Hide Article ↑";
    } else {
        text.classList.add('hidden');
        this.innerText = "Read Full Article ↓";
    }
});
</script>

</x-app-layout>