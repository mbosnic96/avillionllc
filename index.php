<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootrstrap v5.2.3 -->
    <!-- CSS only -->
    <link href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/navbar-scroll-fixed.js"></script>

    
    <link href="assets/fontawesome-free-6.4.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="assets/fontawesome-free-6.4.2-web/css/brands.css" rel="stylesheet">
    <link href="assets/fontawesome-free-6.4.2-web/css/solid.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/FAVICON.png">
    <title>Avillion LLC</title>
</head>

<body>

    <!-- navbar -->
     <?php include 'pages/header.html' ?>
    <!-- navbar -->

    <main class="main">
        <?php
        $directory = 'pages';
        $whitelist = array_map(function ($file) use ($directory) {

            return "$directory/$file";
        }, array_diff(scandir($directory), array('..', '.')));
        if (!isset($_GET['page'])) {
            $page = "homepage";
        } else {
            $route = explode("?", $_GET['page']);
            $page = $route[0];
        }
        $file = "$directory/$page" . ".html";

        if (in_array($file, $whitelist) && file_exists($file)) {
            include($file);
        } else {
            echo "The Page you are looking for, does not exist!";
        }
        ?>
    </main>

    <?php include 'pages/footer.html' ?>

   
</body>

</html>