<?php 
$celsius = $_POST['celsius'];

function ConvertCelsius ($celsius) {        
    $fahrenheit = ($celsius * 1.8) + 32;
    return $fahrenheit;
}

function DeelbaarDoorDrie ($getal) {
    if ($getal % 3 == 0) {
        return true;
    }
}
function OmgekeerdeString ($woord) {
    echo strrev($woord);
}
?>

<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">  
  <?php include '../navbar.php'; ?>
  <style>
  <? include "../style.css"; ?>
  </style>
</head>
<body>
<h4> Convert Celsius to Fahrenheit example function! </h4>
<form action="functies.php" method="POST">
    <input type="text" name="celsius" value=""> <br> <br>
    <input type="submit" value="Convert">
</form>
</body>
    <?php echo "Fahrenheit:" .ConvertCelsius($celsius); ?>
</html>