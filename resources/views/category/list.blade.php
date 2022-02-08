<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Categories Table</h2>
<h2>Create Category <a href="{{ route('categories.create')}}">here</a></h2>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th colspan="3">Actions</th>
  </tr>
  @foreach ($categories as $category)
  <tr>
    <td>{{ $category->id }}</td>
    <td>{{ $category-> name }}</td>
    <!-- <form action="/delete/{{ $category -> id }}" method="POST">
        @csrf
       @method('delete')
      <td><button type="submit">Delete</button> </td>  
     </form> -->
    <td><a href="/category/delete/{{ $category -> id }}">Delete </a>
    <a href="/categories/show/{{ $category -> id }}">Show </a>
    <a href="/categories/edit/{{ $category -> id }}">edit </a></td>

  </tr>
  @endforeach

</table>
<a href="{{route ('brands.index')}}">brands </a>
</body>
</html>