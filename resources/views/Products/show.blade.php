<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Product Details</title>
</head>
<body>
    <h2 style="text-align: center">{{$product->name}}</h2>

    <table>
        <thead>
            <tr>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Product price</th>
                <th>Product availablity</th>
                <th>Category Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->availability}}</td>
                <td>{{$product->category->name}}</td>
                <td>
                    <form action="{{route('product.index')}}">
                        <button>Back</button>
                    </form>
                </td>
                {{-- <td><a href="{{route('product.index')}}">Back</a></td> --}}
            </tr>
        </tbody>
    </table>

</body>
</html>
