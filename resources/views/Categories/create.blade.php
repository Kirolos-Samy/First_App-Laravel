<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Add Category</title>
</head>
<body>
    <h2 style="text-align: center">Add New Category</h2>

    <form action="{{route('category.store')}}" method="post">
        @csrf
        <div class="input-group">
            <input type="text" id="name" name="name" class="input-group__input" required>
            <label for="name" class="input-group__label">Category Name</label>
        </div>
        <br>
        <button>Submit</button>
    </form>
    <br>
    <form action="{{route('category.index')}}">
        <button>Back</button>
    </form>
</body>
</html>
