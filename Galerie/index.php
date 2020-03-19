<?php 
include("tridy.php");

$vsecky_obrazky = "";

foreach ($galerie->obrazky() as $obrazek ) {
    $vsecky_obrazky .= "<img src='" . $obrazek . "' alt=''>";
}

?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>
    <script src="https://kit.fontawesome.com/8669340d90.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1><?php echo $vsecky_obrazky ?></h1>
</body>

</html>