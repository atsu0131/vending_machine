<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method="POST" action="{{ route('money.update', ['id' => $money->id ]) }}">
    @csrf
    <div>
        <label for="name">残金</label>
        <input type="text" name="money" value="{{$money->money}}">
    </div>


    <input type="submit" value="更新">
</form>
</body>
</html>
