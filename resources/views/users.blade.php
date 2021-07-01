<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($utilisateurs as $utilisateur )
    <div style='background-color:pink; margin-bottom:15px'>
        <p>{{$utilisateur->id}}</p>
        <p>{{$utilisateur->nom}}</p>
        <p>{{$utilisateur->age}}</p>
        <p>{{$utilisateur->email}}</p>
    </div>    
    @endforeach
</body>
</html>