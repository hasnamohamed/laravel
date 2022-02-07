<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Brand</title>
</head>

<body>
    <p>Create brands page</p>
    <form method="POST" action="{{  route('brands.store') }}">
        @csrf
        Name: <input type="text" name="name">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        Description: <input type="text" name="des">
        @error('des')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        used : <input type="checkbox" name="is_used">
        category: <select name="cat_id">
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
            @error('cat_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </select>

        <button>Submit</button>
    </form>
</body>

</html>