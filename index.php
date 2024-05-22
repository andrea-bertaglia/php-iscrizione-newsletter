<?php
include_once __DIR__ . "/partials/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center text-center py-5">
            <div class="col-5">
                <h1 class="rounded bg-primary text-light py-3">Iscriviti alla Newsletter</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3">
                <form action="index.php" method="POST">
                    <div class="mb-4">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="text" class="form-control" id="email" aria-describedby="Indirizzo e-mail" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center text-center pt-5">
            <div class="col-4">
                <h6 class="<?php echo $alert ?> py-3"><?php echo $result ?></h6>

            </div>
        </div>
    </div>
</body>

</html>