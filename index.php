<?php
$characters = 'QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789!&/';
include_once __DIR__ . '/function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (!empty($_GET['lenPassword'])) { ?>
                    <div class="success">
                        <p> La password generata è : <?php echo createPassword($characters, $_GET['lenPassword']); ?></p>
                    </div>
                    <div class="alert alert-success my-2" role="alert">
                        La tua password è stata generata con successo!!
                    </div>
                <?php } else { ?>
                    <p></p>
                    <div class="alert alert-secondary my-2" role="alert">
                        Nessun parametro valido inserito
                    </div>
                <?php } ?>
            </div>
            <div class="col-12">
                <form action="./index.php" method="get">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Inserisci la lunghezza che vuoi dare alla tua password</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="lenPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
</body>

</html>