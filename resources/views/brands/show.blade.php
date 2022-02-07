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
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Description</th>
    <th><a href="{{route('categories.index')}}">Category</a></th>
    <th>is Used</th>
    <th>Actions</th>
  </tr>
  <tr>
    <td>{{ $brand->id }}</td>
    <td>{{ $brand-> name }}</td>
    <td>{{ $brand-> des }}</td>
    <td><a href="{{ route('categories.show', ['id'=>$brand -> cat_id ]) }}"> {{ $brand->category->name }} </a> </td>
    <td><?php if($brand-> is_used) echo 'true'; else echo 'false'; ?></td>
    <td><a href="/delete/{{ $brand -> id }}">Delete </a></td>
  </tr>
  

</table>

</body>
</html>