<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/edit.css')}}">
    <title>編集</title>
</head>
<body>
    <input type="text" value="{{$task->name}}">
    <a href="{{url('/todos')}}">更新する</a>
</body>
</html>