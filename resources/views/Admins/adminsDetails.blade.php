<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admins</title>
</head>
<body>
    <table>
        <thead>

            <tr>
                <th>Admin ID</th>
                <th>Admin Name</th>
                <th>Admin Email</th>
                <th>Admin Password</th>
                <th>Image Src</th>
                <th>Image</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($adminsDetails as $admin)
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->password }}</td>
                    <td>{{ $admin->image }}</td>
                    <td><img src="/{{ $admin->image }}" alt="image" width="90px" height="50px"></td>
                </tr>
            @endforeach
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
