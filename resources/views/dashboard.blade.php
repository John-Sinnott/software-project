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
        document.addEventListener("DOMContentLoaded", function () {
            var map = L.map('map').setView([51.505, -0.09], 13);
            var georgia = L.marker([42, 43]).addTo(map);
            L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                maxZoom: 20,
                attribution: '&copy; OpenStreetMap contributors &copy; CARTO',
                subdomains: 'abcd'
            }).addTo(map);
            
        });
     </script>
</x-app-layout>
