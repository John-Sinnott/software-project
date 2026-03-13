<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home Page') }}
        </h2>
    </x-slot>


    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    {{-- Map container --}}
    <div class="p-6">
     <div id="map" style="height: 500px;"></div>
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

     <div class="bg-red-500 text-white p-4">
    Tailwind Test
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('articles.create')" :active="request()->routeIs('articles.create')">
                        {{ __('Submit articles') }}
                    </x-nav-link>
                </div>
    </div>
</x-app-layout>
