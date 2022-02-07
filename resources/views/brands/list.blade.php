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

<h2>Brands Table</h2>
<h2>Create Brand <a href="{{ route('brands.create')}}">here</a></h2>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Description</th>
    <th><a href="">Category</a></th>
    <th>is Used</th>
    <th colspan="2">Actions</th>
  </tr>
  @foreach ($brands as $brand)
  <tr>
    <td>{{ $brand->id }}</td>
    <td>{{ $brand-> name }}</td>
    <td>{{ $brand-> des }}</td>
    <td><a href="{{ route('categories.show', ['id'=>$brand -> id ]) }}"> {{ $brand->category->name }} </a> </td>
    <td><?php if($brand-> is_used) echo 'true'; else echo 'false'; ?></td>
    <td><a href="/delete/{{ $brand -> id }}">Delete </a></td>
    <td><a href="/brands/show/{{ $brand -> id }}">Show </a></td>
  </tr>
  @endforeach

</table>
<a href="{{route ('categories.index')}}">categories </a>
</body>
</html>