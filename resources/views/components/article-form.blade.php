@props(['action', 'method', 'article' => null, 'categories' => []])
 
<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif
 
    <div class="mb-4">
        <label for="name" class="block text-sm text-gray-700">Name</label>
        <input type="text" name="name" id="name"
               value="{{ old('name', $article?->name) }}" required
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        @error('name') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
    </div>
 
    
 
    @if(isset($article) && $article->image)
        <div class="mb-4">
            <img src="{{ asset($article->image) }}" alt="article cover" class="w-24 h-32 object-cover">
        </div>
    @endisset
    <div class="mb-4">
        <label for="date" class="block text-sm text-gray-700">Date</label>
        <input type="date" name="date" id="date"
               value="{{ old('date', $article?->date) }}" required
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        @error('date') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
    </div>
    <div class="mb-4">
    <label for="category_id" class="block text-sm text-gray-700">Category</label>
    
    <select name="category_id" id="category_id" required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        
        <option value="">Select Category</option>

        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                {{ old('category_id', $article?->category_id) == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

        @error('category_id')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="description" class="block text-sm text-gray-700">Description</label>
        <textarea name="description" id="description" required
                  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description', $article->description ?? '') }}</textarea>
        @error('description') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
    </div>

    <div class="mb-4">
    <label for="article_full" class="block text-sm text-gray-700">Full Article</label>
    
    <textarea name="article_full" id="article_full" rows="6" required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        {{ old('article_full', $article?->article_full) }}
    </textarea>

        @error('article_full')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
 
    <div class="mb-4">
        <label class="block text-sm text-gray-700">Location</label>
        <div id="map" style="height: 400px;" class="mb-3 rounded shadow-sm"></div>
        <input type="text" name="latitude" id="latitude" value="{{ old('latitude', $article?->latitude) }}" readonly class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        <input type="text" name="longitude" id="longitude" value="{{ old('longitude', $article?->longitude) }}" readonly class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
    </div>
 
 
    <div>
        <x-primary-button>{{ isset($article) ? 'Update Article' : 'Add Article' }}</x-primary-button>
    </div>
</form>
 
<script>
document.addEventListener("DOMContentLoaded", function () {
    var map = L.map('map').setView([53.3498, -6.2603], 13); // Dublin default
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
 
    var marker;
    map.on('click', function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        document.getElementById('latitude').value = lat;
        document.getElementById('longitude').value = lng;
 
        if (marker) map.removeLayer(marker);
        marker = L.marker([lat, lng]).addTo(map);
    });
 
    // If editing, show existing marker
    @if(isset($article))
        @if($article->latitude && $article->longitude)
            marker = L.marker([{{ $article->latitude }}, {{ $article->longitude }}]).addTo(map);
            map.setView([{{ $article->latitude }}, {{ $article->longitude }}], 13);
        @endif
    @endif
});
 
</script>