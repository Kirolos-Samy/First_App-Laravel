<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Update Customer</title>
</head>
<body>
    <h2 style="text-align: center">Update Customer</h2>
    <form action="{{route('customer.edit' , $customer->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="input-group">
            <input type="text" id="name" name="name" class="input-group__input" value="{{$customer->name}}" required>
            <label for="name" class="input-group__label">Customer Name</label>
        </div>
        <br>

        <div class="input-group">
            <input type="text" id="email" name="email" class="input-group__input" value="{{$customer->email}}" required>
            <label for="email" class="input-group__label">Customer Email</label>
        </div>
        <br>

        <div class="input-group">
            <input type="text" id="address" name="address" class="input-group__input" value="{{$customer->address}}" required>
            <label for="address" class="input-group__label">Customer Address</label>
        </div>
        <br>

        {{-- <label for="image">Image: </label> --}}
        <img src="/images/{{ $customer->image }}" alt="image" width="130px" height="80px">
        <br>
        {{-- <label for="image">Update Image: </label> --}}
        {{-- <input type="file" id="image" name="image" class="upload-btn"> --}}

        <label for="image" class="upload-btn">
            Change Image
            <input type="file" id="image" name="image" style="display: none;">
        </label>
        <br> <br>

        <button>Submit</button>
    </form>

    <br>
    <form action="{{route('customer.index')}}" method="">
        <button>Back</button>
    </form>


</body>
</html>
