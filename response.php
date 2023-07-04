    <?php
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="style.css">
    </head>

    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(https://cdn.wallpapersafari.com/84/22/Jz6bAs.gif);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .response {
            background-color: white;
            border-radius: .66rem;
            padding: 1rem;
        }
    </style>

    <body class="generator">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="response">
                        <?php if ($_SESSION['pass'] !== null) {  ?>
                            <div class="alert alert-success" role="alert">
                                Password creata con successo!!
                            </div>
                        <?php } else { ?>
                            <div class="alert alert-danger" role="alert">
                                Password non creata!! Causa : Non hai inserito valori Validi!!!
                            </div>
                        <?php } ?>
                        <div class="alert alert-info" role="alert">
                            La tua password è : <?php echo $_SESSION['pass'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>