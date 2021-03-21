<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>自動販売機です。お金を入れて商品を選んでボタンを押してください。</p>
    @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form action="/end" method="post">
        @csrf
        <div>
            <label for="name">お金</label>
            <input type="text" id="money" name="money">円
        </div>
        <select name="goods">
        @foreach ($goods as $good)
            <option value={{$good->id}}>{{$good->name}} {{$good->price}}円</option>
        @endforeach
        </select>

        <input type="submit" value="購入">
    </form>
</body>
</html>



