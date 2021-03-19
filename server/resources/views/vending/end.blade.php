
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @if($flag == 1)
    <p>お金が足りません</p>
  @elseif($flag == 2)
    <p>在庫切れです</p>
  @else
    <p>購入ありがとうございます</p>
    <p>お釣りは{{$change}}円です</p>
  @endif
</body>
</html>

