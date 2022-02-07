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

<h2>Category Table</h2>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th><a href="{{route('brands.index')}}"> Brands</a></th>
    <th>Actions</th>
  </tr>
  <tr>
    <td>{{ $category->id }}</td>
    <td>{{ $category-> name }}</td>
    <td>
        @foreach($brands as $brand)
           <?php if ($brand->cat_id == $category->id ) echo '<a href="/brands/show/'.$brand->id.'">'.$brand->name.'</a><br>';  ?>
        @endforeach
    </td>
    <td><a href="/delete/{{ $category -> id }}">Delete </a></td>
  </tr>

</table>

</body>
</html>