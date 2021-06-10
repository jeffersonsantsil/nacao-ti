<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>MP3 em PHP</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <?php

        if (isset($_GET['pages'])) {
            if (file_exists("pages/{$_GET['page']}.php")) {
                include_once "pages/{$_GET['page']}.php";
            } else {
                include_once 'pages/erro_404.php';
            }
        } else {
           include_once 'pages/albuns.php';
        }

        ?>



    </div>

</body>

</html>