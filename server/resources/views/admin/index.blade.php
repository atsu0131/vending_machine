<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @foreach ($vendings as $vending)
  <p>{{$vending->name}}<br>{{$vending->price}}円<br>{{$vending->store}}個<br><a href="admin/{{ $vending->id }}/edit">編集</a></p>
  @endforeach
</body>
</html>
