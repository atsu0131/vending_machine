<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form method="POST" action="{{ route('admin.update', ['id' => $vending->id ]) }}">
    @csrf
    <div>
        <label for="name">商品</label>
        <input type="text" name="name" value="{{$vending->name}}">
    </div>
    <div>
      <label for="name">金額</label>
      <input type="text" name="price" value="{{$vending->price}}">円
    </div>
    <div>
      <label for="name">在庫</label>
      <input type="text" name="store" value="{{$vending->store}}">個
    </div>

    <input type="submit" value="更新">
</form>
</body>
</html>
