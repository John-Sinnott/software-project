<x-app-layout>

<div class="max-w-3xl mx-auto">

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8">

        <h1 class="text-3xl font-bold text-white mb-4">
            {{ $category->name }}
        </h1>

        <p class="text-slate-400 mb-6">
            {{ $category->description }}
        </p>

        <a href="{{ route('categories.index') }}"
           class="text-blue-400 hover:text-blue-300 font-medium">
            Back to Categories
        </a>

    </div>

</div>

</x-app-layout>
