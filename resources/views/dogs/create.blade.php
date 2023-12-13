<h1>Add Dog</h1>

<form action="{{ route('dogs.store') }}" method="POST">
   @csrf
   <label for="name">Name:</label>
   <input type="text" id="name" name="name" required>
   <label for="breed">Breed:</label>
   <input type="text" id="breed" name="breed" required>
   <!-- add other fields as needed -->
   <button type="submit">Add Dog</button>
</form>