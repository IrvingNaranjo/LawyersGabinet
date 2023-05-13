<?php
    $url = $_SERVER['NAME_SERVER'].$_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/colors.css">
    <title>Gabinete de abogados</title>
</head>
<body>
    <?php
        include_once "src/view/header.php";
        if(isset($_GET['option'])){
            include_once "src/controller/page-controller.php";
        } else{
            include_once "src/view/home.php";
        }
        include_once "src/view/footer.php";
    ?>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
