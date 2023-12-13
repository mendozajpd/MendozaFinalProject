<h1>Dogs</h1>

<a href="{{ route('dogs.create') }}">Add Dog</a>

<table>
   <tr>
       <th>Name</th>
       <th>Breed</th>
       <!-- add other fields as needed -->
       <th>Actions</th>
   </tr>
   @foreach ($dogs as $dog)
       <tr>
           <td>{{ $dog->name }}</td>
           <td>{{ $dog->breed }}</td>
           <!-- add other fields as needed -->
           <td>
               <a href="{{ route('dogs.show', $dog->id) }}">View</a>
               <a href="{{ route('dogs.edit', $dog->id) }}">Edit</a>
               <form action="{{ route('dogs.destroy', $dog->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit">Delete</button>
               </form>
           </td>
       </tr>
   @endforeach
</table>