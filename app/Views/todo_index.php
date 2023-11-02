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
    <h1>Todo List</h1>
    <form method="POST" action="<?= base_url('create-todo')?>">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tambahkan Acara</label>
        <input required name="todo" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Isikan Acara">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Deadline</label>
        <input required name="deadline" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Isikan Acara">
    </div>
    <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
    <br></br>
    <h2>Todo</h2>
    <div class="mb-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Acara</th>
                <th>Deadline</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1;?>
        <?php foreach ($progress as $p): ?>
        <tr>
                <td><?= $no++ ?></td>
                <td><?=$p->todo?></td>
                <td><?=$p->deadline?></td>
                <td>
                <span class="badge rounded-pill bg-danger">Belum Selesai</span>
                </td>
                <td>
                <a class="btn btn-primary" href="<?= base_url('done-todo/' . $p->id)?>">
                    Selesaikan
                </a>
                <a class="btn btn-secondary" href="<?= base_url('edit-todo/' . $p->id)?>">
                    Edit
                </a>
                <a class="btn btn-danger" href="<?= base_url('delete-todo/' . $p->id)?>">
                    Hapus
                </a>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </div>
    <h2>Complete</h2>
    <div class="mb-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Acara</th>
                <th>Deadline</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1;?>
        <?php foreach ($done as $d): ?>
        <tr>
                <td><?= $no++ ?></td>
                <td><?= $d->todo?></td>
                <td><?= $d->deadline?></td>
                <td>
                <span class="badge rounded-pill bg-success">Selesai</span>
                </td>
                <td>
                <a class="btn btn-outline-danger" href="<?= base_url('delete-todo/' . $d->id)?>">
                    Hapus
                </a>
                <a class="btn btn-outline-primary" href="<?= base_url('restore-todo/' . $d->id)?>">
                   Restore
                </a>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    </div>
</body>
</html>