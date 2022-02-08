<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Brand</title>
</head>

<body>
    <p>Edit brand page</p>
    <form method="POST" action="{{ route('brands.update',$brand->id) }}">
        @csrf
        Name: <input type="text" name="name" value="{{$brand->name}}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        Description: <input type="text" name="des" value="{{$brand->des}}">
        @error('des')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        used : <input type="checkbox" name="is_used" <?php if($brand->is_used==true) echo 'checked';?>>
        category: <select name="cat_id">
            @foreach ($categories as $category)
            <option value="{{$category->id}}" {{ $brand->cat_id== $category->id ? 'selected':''}}>{{$category->name}}</option>
            @endforeach
            @error('cat_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </select>
        <button>Update</button>
    </form>
</body>

</html>