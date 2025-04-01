<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Archivos </title>
</head>
<body>
<div class=" d-flex justify-content-center">
    <div class="card-p4 " style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">Subir archivos</h2>

        <form class="form-inline" action="Process-file.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label" for="file">Subir archivo</label>
                <input name="file" type="file" placeholder="sube un archivo">
            </div>
            <button type="submit" class="btn btn-danger">Cargar Archivo</button>
        </form>
    </div>
</div>
</body>
</html>
