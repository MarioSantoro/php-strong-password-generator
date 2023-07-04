<?php
session_start();
$_characters = 'QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789!&/';
include_once __DIR__ . '/function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./style.css">
</head>

<body class="generator">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (!empty($_GET['lenPassword']) && $_GET['lenPassword'] !== 0) { ?>
                    <?php $_SESSION['pass'] = createPassword($_characters, $_GET['lenPassword']) ?>
                    <?php header("Location: http://localhost/classe-98/php-strong-password-generator/response.php/");
                    exit;
                    ?>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert">
                        Nessun valore valido inserito
                    </div>
                <?php } ?>
            </div>
            <div class="col-12">
                <div class="container-form">
                    <form action="./index.php" method="get">
                        <div class="mb-3 d-flex justify-content-between align-items-baseline p-3">
                            <div class="controls d-flex flex-column">
                                <label for="exampleInputPassword1" class="form-label">Lunghezza password:</label>
                                <div class="buttons d-flex">
                                    <button type="submit" class="btn btn-primary me-2">Invia</button>
                                    <button type="reset" class="btn btn-secondary">Anulla</button>
                                </div>
                            </div>
                            <input type="number" class="form-control w-25" id="exampleInputPassword1" name="lenPassword">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>