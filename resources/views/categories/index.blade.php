<x-app-layout>

<div class="max-w-6xl mx-auto space-y-10">

    <!-- TITLE -->
    <div>
        <h1 class="text-3xl font-bold text-white mb-2">
            Explore Environmental Issues
        </h1>
        <p class="text-slate-400">
            Learn about key global challenges related to Sustainable Development Goal 15.
        </p>
    </div>

    <!-- GRID -->
    <div class="grid md:grid-cols-3 gap-8">

        <!-- Deforestation -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition">

            <img src="{{ asset('images/deforestation.jpg') }}"
                 class="h-48 w-full object-cover">

            <div class="p-6">
                <h2 class="text-xl font-semibold text-white mb-2">
                    Deforestation
                </h2>

                <p class="text-slate-400 mb-4">
                    The large-scale removal of forests, often for agriculture and development, leading to climate and biodiversity impacts.
                </p>

                <a href="{{ route('categories.show', 1) }}"
                   class="text-blue-400 hover:text-blue-300 font-medium">
                    Explore
                </a>
            </div>
        </div>

        <!-- Desertification -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition">

            <img src="{{ asset('images/desertification.jpg') }}"
                 class="h-48 w-full object-cover">

            <div class="p-6">
                <h2 class="text-xl font-semibold text-white mb-2">
                    Desertification
                </h2>

                <p class="text-slate-400 mb-4">
                    Land degradation in dry regions caused by climate change and human activity, reducing food and water security.
                </p>

                <a href="{{ route('categories.show', 2) }}"
                   class="text-blue-400 hover:text-blue-300 font-medium">
                    Explore
                </a>
            </div>
        </div>

        <!-- Biodiversity-->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition">

            <img src="{{ asset('images/biodiversity.png') }}"
                 class="h-48 w-full object-cover">

            <div class="p-6">
                <h2 class="text-xl font-semibold text-white mb-2">
                    Biodiversity Loss
                </h2>

                <p class="text-slate-400 mb-4">
                    The decline of species and ecosystems, threatening global stability and environmental health.
                </p>

                <a href="{{ route('categories.show', 3) }}"
                   class="text-blue-400 hover:text-blue-300 font-medium">
                    Explore
                </a>
            </div>
        </div>

    </div>

</div>

</x-app-layout>