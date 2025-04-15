<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Todolist</h1>
        <div class="row">
            <?php foreach ($todolist as $todo): ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <?php echo $todo['judul']; ?>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $todo['deskripsi']; ?></p>
                            <p class="card-text">Tanggal Mulai: <?php echo $todo['tanggal_mulai']; ?></p>
                            <p class="card-text">Tanggal Selesai: <?php echo $todo['tanggal_selesai']; ?></p>
                            <p class="card-text">Status: <?php echo $todo['status']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>