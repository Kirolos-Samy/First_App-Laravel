<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Edit Product</title>
</head>
<body>
    <h2 style="text-align: center">Edit Product : {{$product->name}}</h2>

    <form action="{{route('product.edit',$product->id)}}" method="post">
        @method('PUT')
        @csrf

        <div class="input-group">
            <input type="text" id="name" name="name" class="input-group__input" value="{{$product->name}}" required>
            <label for="name" class="input-group__label">Product Name</label>
        </div>
        <br>

        <div class="input-group">
            <input type="text" id="price" name="price" class="input-group__input" value="{{$product->price}}" required>
            <label for="price" class="input-group__label">Product Price</label>
        </div>
        <br>

        <div class="input-group">
            <input type="text" id="availability" name="availability" class="input-group__input" value="{{$product->availability}}" required>
            <label for="availability" class="input-group__label">Product Availability</label>
        </div>
        <br>

        <div class="input-group">
            <input type="text" id="category_id" name="category_id" class="input-group__input" value="{{$product->category_id}}" required>
            <label for="category_id" class="input-group__label">Category ID</label>
        </div>
        <br>

        <button>Submit</button>
    </form>
    <br>
    <form action="{{route('product.index')}}">
        <button>Back</button>
    </form>
</body>
</html>
