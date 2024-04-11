
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Usuarios</h1>
<div>
    <div>
        <table>
            <th>Id</th>
            <th>name</th>
            <th>email</th>
            <th>Acçoes</th>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="user/edit/{{$user->id}}">Editar</a></td>
                    <td><a href="user/delete/{{$user->id}}">Eliminar</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
</body>
</html>
