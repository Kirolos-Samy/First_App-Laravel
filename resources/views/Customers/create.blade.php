<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Add Customer</title>
</head>
<body>
    <h2 style="text-align: center">Add New Customer</h2>
    <form action="{{route('customer.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="input-group">
            <input type="text" id="name" name="name" class="input-group__input" required>
            <label for="name" class="input-group__label">Customer Name</label>
        </div>
        <br>

        <div class="input-group">
            <input type="text" id="email" name="email" class="input-group__input" required>
            <label for="email" class="input-group__label">Customer Email</label>
        </div>
        <br>

        <div class="input-group">
            <input type="text" id="address" name="address" class="input-group__input" required>
            <label for="address" class="input-group__label">Customer Address</label>
        </div>
        <br>

        <label for="image" class="upload-btn">
            Add Image
            <input type="file" id="image" name="image" style="display: none;">
        </label>
        <br> <br>

        <button>Submit</button>

    </form>

    <br>

    <form action="{{route('customer.index')}}">
        <button>Back</button>
    </form>


</body>
</html>
