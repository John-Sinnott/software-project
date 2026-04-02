<x-app-layout>

<div class="space-y-6">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-white">
            Categories
        </h1>
    </div>

    @foreach($categories as $category)

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 transition">

            <h2 class="text-xl font-semibold text-white mb-2">
                {{ $category->name }}
            </h2>

            <p class="text-slate-400 mb-4">
                {{ $category->description }}
            </p>

            <a href="{{ route('categories.show', $category) }}"
               class="text-blue-400 hover:text-blue-300 font-medium">
               View Category
            </a>

        </div>

    @endforeach

</div>

</x-app-layout>