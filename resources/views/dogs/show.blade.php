<h1>{{ $dog->name }}</h1>

<p>Breed: {{ $dog->breed }}</p>

<a href="{{ route('dogs.edit', $dog->id) }}">Edit Dog</a>