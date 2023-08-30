<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Products</title>
</head>
<body>
    <h2 style="text-align: center">Products</h2>

    {{-- <form action="">
        <button type="submit">Add New product</button>
    </form> --}}
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger shake">
            {{ session('error') }}
        </div>
    @endif

    <br>
    <table>
        <thead>

            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th colspan="3">Actions</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>
                    <form action="{{route('product.show' , $product->id)}}" method="get">
                        <button>Details</button>
                    </form>
                </td>

                <td>
                    <form action="{{route('product.update' , $product->id)}}">
                        <button type="submit">Update</button>
                    </form>
                </td>

                <td>
                    <form action="{{route('product.destroy' , $product->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <div class="mydiv">
        <form action="{{route('product.create')}}">
                <button type="submit" class="largeBtn">Add New Product</button>
        </form>

        <form action="{{route('category.index')}}">
                <button type="submit" class="largeBtn">View Categories</button>
                <br>
        </form>

        <form action="{{route('order.index')}}">
            <button type="submit" class="largeBtn">View Orders</button>
            <br>
        </form>

        <form action="{{route('customer.index')}}">
            <button type="submit" class="largeBtn">View Customers</button>
            <br>
        </form>

    </div>


</body>
</html>

