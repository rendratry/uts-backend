<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
    <title>Todo List</title>
</head>
<body>
    <div class="container">
    <h1>Edit</h1>
    <form method="POST" action="<?= base_url('update-todo/' . $todo->id)?>">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Acara</label>
        <input required value="<?=$todo->todo?>" name="todo" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Isikan Acara">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Deadline</label>
        <input required value="<?=$todo->deadline?>"name="deadline" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Isikan Acara">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
</body>
</html>