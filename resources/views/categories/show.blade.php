<x-app-layout>

<div class="p-6 max-w-4xl mx-auto bg-white shadow rounded">

    <h1 class="text-2xl font-bold mb-4">
        {{ $category->name }}
    </h1>

    <p>
        {{ $category->description }}
    </p>

</div>

</x-app-layout>
