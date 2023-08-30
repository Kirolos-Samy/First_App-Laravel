<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Customer Details</title>
</head>
<body>
    <h2 style="text-align: center">Customer Details</h2>
    <table>
        <thead>

            <tr>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Customer Address</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>

        </thead>
        <tbody>
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->address }}</td>
                    <td><img src="/images/{{ $customer->image }}" alt="image" width="90px" height="50px"></td>
                    <td>
                        <form action="{{route('customer.index')}}" method="">
                            <button>Back</button>
                        </form>
                    </td>
                </tr>
        </tbody>

    </table>

</body>
</html>

{{-- <script>
    function showDetails($id){
        window.location.href = "/admins/show/" + $id;
        // window.location.href = "/admins/show/";
    }

    function showAll(){
        window.location.href = "/admins/showall";
    }
</script> --}}
