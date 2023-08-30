<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Category Details</title>
</head>
<body>
    <fieldset>
        <legend class="mylegend">
            Category
        </legend>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$category->name}}</td>
                </tr>

            </tbody>
        </table>
    </fieldset>
    <br> <br>
    <fieldset>
        <legend class="mylegend">
            Category Products
        </legend>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Price</th>
                </tr>
            </thead>
            <tbody>
                {{-- @dd($category->products) --}}
                @foreach ( $category->products as $product )
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </fieldset>
    <br> <br>
    <form action="{{route('category.index')}}">
        <button>Back</button>
    </form>
</body>
</html>
