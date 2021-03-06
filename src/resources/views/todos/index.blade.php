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
        <form action="{{route('tasks.store')}}" method="post">
        @csrf
            <input type="text" name="name">
            <input type="date" name="limit">
            <button>追加</button>
        </form>
            
<div class="a">
    @foreach($tasks as $task)
        <div class="b">
            <p>{{$task->name}}</p>
            <p>{{$task->limit}}</p>

            <div class="btn">
                <a href="/tasks/{{$task->id}}">編集</a>
                    <form action="{{route('tasks.delete',$task->id)}}" method="post">
                    @csrf
                        <button>削除</button>
                    </form>
                
            </div>
        </div>
    @endforeach
    

</div>
</body>
</html>