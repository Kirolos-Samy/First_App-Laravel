<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Details</title>
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

            <tr>
                <td>{{ $showAdmin->id }}</td>
                <td>{{ $showAdmin->name }}</td>
                <td>{{ $showAdmin->email }}</td>
                <td>{{ $showAdmin->password }}</td>
                <td>{{ $showAdmin->image }}</td>
                <td><img src="/{{ $showAdmin->image }}" alt="image" width="90px" height="50px"></td>
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
</script>
