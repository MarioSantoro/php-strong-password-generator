<?php
session_start();

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
                <?php if (!empty($_GET['lenPassword'])) { ?>
                    <?php $_SESSION['pass'] = createPassword($_GET['lettere'], $_GET['numeri'], $_GET['simboli'], $_GET['lenPassword']) ?>
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
                        <div class="mb-3 d-flex justify-content-between p-3">
                            <div class="controls h-100 d-flex flex-column justify-content-between">
                                <label for="exampleInputPassword1" class="form-label">Lunghezza password:</label>
                                <div class="buttons d-flex">
                                    <button type="submit" class="btn btn-primary me-2">Invia</button>
                                    <button type="reset" class="btn btn-secondary">Anulla</button>
                                </div>
                            </div>
                            <div>
                                <input type="number" class="form-control mb-4" id="exampleInputPassword1" name="lenPassword">
                                <div class="checkboxs d-flex flex-column">
                                    <div class="check d-flex">
                                        <input class="form-check-input" type="checkbox" name="lettere" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Lettere
                                        </label>
                                    </div>
                                    <div class="check  d-flex">
                                        <input class="form-check-input" type="checkbox" name="numeri" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Numeri
                                        </label>
                                    </div>
                                    <div class="check  d-flex">
                                        <input class="form-check-input" type="checkbox" name="simboli" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Simboli
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>