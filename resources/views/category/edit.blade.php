<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
</head>
<body>
    <p>Edit Category page</p>
    <form method="POST" action="{{route('categories.update',$category->id) }}">
    @csrf
        Name: <input type="text" name="name" value="{{$category->name}}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button>Update</button>
    </form>
</body>
</html>