<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">Boolhotels</div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
            <form action="./index.php" method="GET">
                    <div class="row">
                        <div class="col-5">
                            <select name="parking" id="parking" class="form-select form-select-sm">
                                <option value="">Parcheggio</option>
                                <option value="0">NO</option>
                                <option value="1">SI</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control form-control-sm" name="vote" placeholder="voto">
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-sm btn-primary">Cerca</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>