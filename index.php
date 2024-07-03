<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Candy Sugar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles/carrousel.css">
    <link rel="shortcut icon" href="./img/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row align-items-start">
            <div class="col-sm-2">
            </div>
            <div class="col-sm">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/caramelo.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/caramelo.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/caramelo.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-2">
            </div>
        </div>

        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/caramelo.jpg" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <p class="card-text">Paletas de diferentes sabores y formas, ¡solo $500 cada una!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/caramelitos.jpg" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <p class="card-text">Variedad de caramelos y chicles, ¡solo $30 cada uno!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/caramelos.webp" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <p class="card-text">Combos de caramelos, chicles y paletas, ¡solo $2000!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once './views/mapas.php';
        require_once './views/accordion.php';
        require_once './views/footer.php';
        require_once './partials/popper_js.php';
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>