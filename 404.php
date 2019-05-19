<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Err</title>
</head>
<style>
    body {
    background: url("<?php bloginfo('template_directory'); ?>/./images/error.jpg") no-repeat;
    background-size: 100%;
}
</style>
<body>
    <div class="container-fluid">  
            <img src="<?php bloginfo('template_directory'); ?>/./images/site-logo.png" alt="site logo">
            <div class="card" style="width: 18rem;">
                <img src="<?php bloginfo('template_directory'); ?>/./images/err404.jpg" class="card-img-top" alt="Err 404">
                <div class="card-body">
                    <h4 class="card-title">Error 404</h4>
                    <p class="card-text">pagina no disponible.</p>
                    <input type="button" class="btn btn-outline-dark" onclick="history.back()" name="volver atrás" value="volver atrás">
                </div>
            </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>