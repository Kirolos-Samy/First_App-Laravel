<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Customers</title>
</head>
<body>
    <h2 style="text-align: center">Customers</h2>

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
        {{-- <br>
    @error('name')
        <div class="error">{{ $message }}</div>
    @enderror --}}
    <br>
    <table>
        <thead>

            <tr>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th colspan="3">Actions</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>

                    {{-- <td><a href="{{route('customer.getcustomer' , $customer->id)}}">Show</a></td> --}}
                    <td>
                        <form action="{{route('customer.show' , $customer->id)}}" method="get">
                            <button>Details</button>
                        </form>
                    </td>

                    <td>
                        <form action="{{route('customer.update' , $customer->id)}}">
                            <button type="submit">Update</button>
                        </form>
                    </td>

                    <td>
                        <form action="{{route('customer.destroy' , $customer->id)}}" method="post">
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
        <form action="{{route('customer.create')}}">
                <button type="submit" class="largeBtnC">Add New Customer</button>
        </form>

        <form action="{{route('product.index')}}">
                <button type="submit" class="largeBtnC">View Products</button>
                <br>
        </form>

        <form action="{{route('category.index')}}">
            <button type="submit" class="largeBtnC">View Categories</button>
            <br>
        </form>

        <form action="{{route('order.index')}}">
            <button type="submit" class="largeBtnC">View Orders</button>
            <br>
        </form>

    </div>

</body>
</html>

