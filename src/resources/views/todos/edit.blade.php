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
    <form action="{{route('tasks.update')}}" method="post">
    @csrf
        <input type="hidden" name="id" value="{{$task->id}}">
        <input type="text" name="name"  value="{{$task->name}}">
        <input type="date" name="limit" value="{{$task->limit}}">
        <button>更新する</button>
    </form>
    
</body>
</html>