<!DOCTYPE html>
<body>
<h1>todolist</h1>
    <ul>
    @foreach ($tasks as $task)
<a href="/todolist/{{ $task->id }}">
    <li>{{ $task->title }}</li>

    @endforeach
    
    </ul>
</body>
</html>