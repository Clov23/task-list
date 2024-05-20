<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<main class="container"><br>
    <div class="card">
        <h5 class="card-header">Featured</h5>

            <!-- Mostrar mensaje de éxito -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        <!-- Mostrar errores de validación -->
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="card-body">
            <h1>System Work</h1>
            
            <form action="{{ url('/') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="task" class="form-label">Enter the name of the task!</label>
                    <input type="text" class="form-control" id="task" name="task">
                </div>
                <button type="submit" class="btn btn-outline-success">Add task</button>
                <button type="button" class="btn btn-outline-primary" onclick="window.location='{{ url('generatepdf') }}'">Download PDF</button>
            </form>
            



            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name of the homework</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->task }}</td>
                        <td>
                            <form action="{{ route('task.destroy', $task->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Eliminate</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
</body>
</html>
