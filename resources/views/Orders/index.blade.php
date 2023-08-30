<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Orders</title>
</head>
<body>
    <h2 style="text-align: center">Orders</h2>

    {{-- <form action="">
        <button type="submit">Add New order</button>
    </form> --}}

    <table>
        <thead>

            <tr>
                <th>Order ID</th>
                <th>Order Price</th>
                <th>Actions</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->price }}</td>
                <td>
                    <form action="{{route('order.show' , $order->id)}}" method="get">
                        <button>Details</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>

    <div class="mydiv">
        <form action="{{route('product.index')}}">
                <button type="submit" class="largeBtnR">View Products</button>
        </form>

        <form action="{{route('category.index')}}">
                <button type="submit" class="largeBtnR">View Categories</button>
                <br>
        </form>

        <form action="{{route('customer.index')}}">
            <button type="submit" class="largeBtnR">View Customers</button>
            <br>
        </form>

        </div>


</body>
</html>

