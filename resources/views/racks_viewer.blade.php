<!DOCTPE html>
<html>
    <head>
        <title>View Student Records</title>
    </head>
<body>
    <table border = "1">
    <tr>
        <td>Id</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>City Name</td>
        <td>Email</td>
    </tr>
    @foreach ($Racks as $Racks)
    <tr>
        <td>{{ $Racks->id }}</td>
        <td>{{ $Racks->first_name }}</td>
        <td>{{ $Racks->last_name }}</td>
        <td>{{ $Racks->city_name }}</td>
        <td>{{ $Racks->email }}</td>
    @endforeach
    </table>
</body>
</html>