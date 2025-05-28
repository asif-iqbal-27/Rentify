<!-- resources/views/tasks/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Add this in the <head> section of your Blade file -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <h1>Task List</h1>
    <a href="{{ route('tasks.create') }}">Create New Task</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->name }}</td>
                <td>{{ $task->status }}</td>
                <td>
                    <a href="{{ route('tasks.edit', $task) }}">Edit</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
