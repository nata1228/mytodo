<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <title>Todoリスト</title>
</head>
<body>
        <input type="text" name="name" value="{{ old('name') }}">
        <button>追加</button>
<div class="a">
    <div class="b">
        @foreach($tasks as $task)
        <p>{{$task->name}}</p>
        <p>{{$task->limit}}</p>
        @endforeach
        <div class="btn">
            <p><a href="{{url('/todos/{id}')}}">編集</a></p>
            <p><a>削除</a></p>
        </div>
    </div>

</div>
</body>
</html>