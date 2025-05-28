<!-- resources/views/tasks/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Task Name</label>
        <input type="text" name="name" id="name" value="{{ $task->name }}" required>
        
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
        </select>
        
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
</body>
</html>
