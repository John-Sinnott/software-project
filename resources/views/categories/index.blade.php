
<x-app-layout>

<div class="p-6 max-w-4xl mx-auto">

@foreach($categories as $category)

    <div class="mb-6 p-4 bg-white shadow rounded">

        <h2 class="text-xl font-bold">
            {{ $category->name }}
        </h2>

        <p class="mt-2">
            {{ $category->description }}
        </p>

        <a href="{{ route('categories.show', $category) }}"
           class="text-blue-500 underline">
           View Category
        </a>

    </div>

@endforeach

</div>

</x-app-layout>