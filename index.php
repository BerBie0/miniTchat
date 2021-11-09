<?php
    include 'functions/main-f.php';

/*
Scan le repertoire page
test si l'url contient page, non vide et dans repertoire
si : $page = ...
sinon $page = home
*/
    $pages = scandir('pages/');

    if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php', $pages)){
        $page = $_GET['page'];
    }else{
        $page = 'home';
    }

    $pages_functions = scandir('functions/');

    if(in_array($page.'.f.php', $pages_functions)){
        include 'functions/'.$page.'.f.php';
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Application web chat</title>
</head>
<body>
    <?php
     include './body/topbar.php';
    ?>
    <div class="container">
    <?php
    include './pages/'.$page.'.php'
    ?>
    </div>

    <script src="./js/jquery.js"></script>
    <?php
            $pages_js = scandir('js/');
            if(in_array($page.'.f.js',$pages_js)){
                ?>
                    <script src="js/<?= $page ?>.f.js"></script>
                <?php
            }

        ?>
<br><br><br><br><br><br><br><br><br><br><br>
<script src="./js/main-f.js"></script>
</body>
</html>