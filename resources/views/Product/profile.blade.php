<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$item->name}}</h1>
    <h2>{{$item->description}}</h2>
    <h2>{{$item->user->name}}</h2>
    <h2>{{$item->user->profile}}</h2>
    <h2>{{$item->stock}}</h2>
    <h2>{{$item->price}}</h2>
</body>
</html>