<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Add Product</title>
</head>
<body>
    <h2 style="text-align: center">Add New Product</h2>

    <form action="{{route('product.store')}}" method="post">
        @csrf
        <div class="input-group">
            <input type="text" id="name" name="name" class="input-group__input" required>
            <label for="name" class="input-group__label">Product Name</label>
        </div>
        <br>
        <div class="input-group">
            <input type="text" id="price" name="price" class="input-group__input" required>
            <label for="price" class="input-group__label">Product Price</label>
        </div>
        <br>
        <div class="input-group">
            <input type="text" name="availability" id="ava" class="input-group__input" required>
            <label for="ava" class="input-group__label">Product Availability</label>
        </div>
        <br>
        <div class="input-group">
            <input type="text" id="cat" name="category_id" class="input-group__input" required>
            <label for="cat" class="input-group__label">Category ID</label>
        </div>
        <br>
        {{-- <input type="text" name="admin_id" value="{{$product->admin_id}}"> --}}
        <button>Submit</button>
    </form>
    <br>
    <form action="{{route('product.index')}}">
        <button>Back</button>
    </form>
</body>
</html>
