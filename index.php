
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">Operaciones Matemáticas</h2>
    
    <form action="proceso.php" method="post" class="form-inline">
<div class="mb-3">
    <label for="option" class="form-label"> Escoge una operacion</label>

    <select name="option" class="form-select">

        <option value="sum" name="sum">
            Sumar
        </option>

        <option value="rest" name="rest">
            Restar
        </option>

        <option  value="div" name="division">
            División
        </option>
    </select>
</div>

       <div class=" mb-3">
           <label for="numero1" class="form-label"></label>
           <input  name= "numero1" type="number" class="form-control">
       </div>
        <div class="mb-3">
            <label for="numero2" class="form-label"></label>
            <input type="number" name="numero2" class="form-control">
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-dark">Operar</button>

        </div>
    </form>

</div>
</div>
     <a href="file.php" class="btn btn-success">Subir Archivos</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>