<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <p>自動販売機の残金</p>
  @foreach ($moneys as $money)
  <p>{{$money->money}}円<br><a href="money/{{ $money->id }}/edit">編集</a></p>
  @endforeach
</body>
</html>
