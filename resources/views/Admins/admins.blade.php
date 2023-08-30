<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <title>Admins</title>
</head>
<body>
    {{-- <h1>Admins</h1> --}}
    <table>
        <thead>

            <tr>
                <th>Admin ID</th>
                <th>Admin Name</th>
                <th>Details</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->name }}</td>
                    {{-- <td><button onclick="showDetails({{ $admin->id }})">Show</button></td> --}}
                    <td><a href="{{route('admin.getAdmin' , $admin->id)}}">Show</a></td>
                    <td>
                        <form action="{{route('admin.destroy' , $admin->id)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td><button onclick="showAll()">Show All</button></td>
                </tr>
        </tbody>

    </table>

</body>
</html>

<script>
    function showDetails($id){
        window.location.href = "/admins/show/" + $id;
        // window.location.href = "/admins/show/";
    }

    function showAll(){
        window.location.href = "/admins/showall";
    }
</script>
