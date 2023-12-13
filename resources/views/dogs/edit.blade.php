<h1>Edit Dog</h1>

<form action="{{ route('dogs.update', $dog->id) }}" method="POST">
   @csrf
   @method('PUT')
   <label for="name">Name:</label>
   <input type="text" id="name" name="name" value="{{ $dog->name }}" required>
   <label for="breed">Breed:</label>
   <input type="text" id="breed" name="breed" value="{{ $dog->breed }}" required>
   <button type="submit">Update Dog</button>
</form>