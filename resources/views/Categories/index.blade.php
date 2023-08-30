<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Categories</title>
</head>
<body>
    <h2 style="text-align: center">Categories</h2>

    {{-- <form action="">
        <button type="submit">Add New category</button>
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
                <th>Category ID</th>
                <th>Category Name</th>
                <th colspan="3">Actions</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <form action="{{route('category.show' , $category->id)}}" method="get">
                        <button>Details</button>
                    </form>
                </td>

                <td>
                    <form action="{{route('category.update' , $category->id)}}">
                        <button>Update</button>
                    </form>
                </td>

                <td>
                    <form action="{{route('category.destroy' , $category->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>

    <div class="mydiv">
        <form action="{{route('category.create')}}">
            <button type="submit" class="largeBtn">Add New Category</button>
            <br>
        </form>
        <form action="{{route('product.index')}}">
                <button type="submit" class="largeBtn">View Products</button>
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

