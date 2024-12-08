<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 w-50">
      @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      <div class="card mb-3">
          <div class="card-header">
              <h4>Add New Task</h4>
          </div>
          <div class="card-body">
              <form action="{{route('tasks.store')}}" method="POST">
                  @csrf
                  <div class="mb-3">
                      <label for="name" class="form-label">Task Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Task Name">
                  </div>
                  <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea class="form-control" id="description" name="description" rows="3" placeholder="Task Description"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Add Task</button>
              </form>
          </div>
      </div>
      <h5>Task List</h5>
      @if(count($tasks)==0)
        <div class="alert alert-primary">No tasks available</div>
      @endif
      @foreach($tasks as $task)
        <div class="d-flex justify-content-between align-items-center mb-2 p-3 border rounded">
          <a href="{{route('tasks.edit', $task->id)}}" class="text-decoration-none text-dark">
            <div>
                <strong>{{ $task->name }}</strong>
                <br>
                {{ $task->description }}
            </div>
          </a>
          <form action="{{route('tasks.destroy', $task->id)}}" method="post">
            @csrf
            @method('DELETE')
            @if($task->status == "Pending")
              <button class="btn btn-sm-warning btn-sm text-dark">{{ $task->status }}</button>
            @else
              <button class="btn btn-success btn-sm text-light">{{ $task->status }}</button>
            @endif
          </form>
        </div>
      @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
