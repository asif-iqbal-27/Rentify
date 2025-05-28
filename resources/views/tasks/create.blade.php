<!-- resources/views/tasks/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
</head>
<body>
    <h1>Create New Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="name">Task Name</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
</body>
</html>
