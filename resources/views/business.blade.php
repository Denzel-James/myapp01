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
    <h1>Business</h1>
    <div>
        <a href="{{Route('business.create')}}">New</a>
    </div>
    <div>
        <table>
            <th>Name</th>
            <th>Email</th>
        @foreach($business as $busine)

                <tr>
                    <td>{{$busine->name}}</td>
                    <td>{{$busine->email}}</td>
                    <td><a href="{{Route('business.show')}}">Editar</a></td>
                    <td><a href="{{Route('business.destroy')}}">Eliminar</a></td>
                </tr>
        @endforeach
        </table>
    </div>
</body>
</html>
