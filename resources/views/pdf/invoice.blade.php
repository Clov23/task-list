<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Reporte</h1>
    <table class="table">
                <thead>
                <tr>
                    <th scope="col">Nombre de la tarea</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->task }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
</body>
</html>