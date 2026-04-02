<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home Page') }}
        </h2>
    </x-slot>

    {{-- Map container --}}
    <div class="mb-8">
     <div id="map" class="h-[500px] rounded-2xl overflow-hidden border border-slate-800"></div>
     </div>

     <div class="mt-8 flex justify-between items-center">

    <div>
        <h2 class="text-2xl font-bold text-white">
            Environmental Reports
        </h2>
        <p class="text-slate-400 text-sm">
            Contribute by submitting new reports
        </p>
    </div>

    <a href="{{ route('articles.create') }}"
       class="bg-gradient-to-r from-blue-500 to-indigo-600 
              hover:from-blue-600 hover:to-indigo-700
              text-white px-6 py-3 rounded-xl font-semibold 
              shadow-lg hover:shadow-xl transition-all duration-200">
         Submit Report
    </a>

</div>
     <script>
        const articles = @json($articles);
    </script>

     <script>
        document.addEventListener("DOMContentLoaded", function () {

            var map = L.map('map').setView([20, 0], 2);
            
            L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                maxZoom: 20,
                attribution: '&copy; OpenStreetMap contributors &copy; CARTO',
                subdomains: 'abcd'
            }).addTo(map);

            articles.forEach(article => {

        if(article.latitude && article.longitude){

            let marker = L.marker([article.latitude, article.longitude])
                .addTo(map)
                .bindPopup(`
                    <strong>Article ${article.id}</strong><br>
                    ${article.description}<br>
                    <a href="/articles/${article.id}">Read Article</a>`);
        }

    });

        });
     </script>

     @if(session('success'))
        <div class="mb-6 bg-green-900/30 border border-green-700 text-green-300 px-4 py-3 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    </div>
</x-app-layout>
