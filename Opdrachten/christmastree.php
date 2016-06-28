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
</head>
<body>
  <style>
  <? include "../style.css"; ?>
  </style>
</body>
    <h2> Christmas tree </h2> <br>
<?php 
    for ($regel = 0; $regel <= 8; $regel++) {
        for ($ster = 0; $ster < $regel; $ster++) {
            echo "*";
            }
        echo "*<br>";
    }
?>   
     <?php
                                //**EXTRA CODE GEEN IDEE WAAR HET NEERGEZET KAN WORDEN!**\\
    //$jaar = 6;
    //$kaarsjes = 0; (begint met 0 om er een int van te maken)
    //while ($kaarsjes < $jaar) { (Zolang $kaarsjes kleiner is dan 6 teken je kaarsjes oftewel hoeveel je wilt hebben)
        //	echo " |*| "; // (printen van kaarsjes)
        //	$kaarsjes++; // is hetzelfde als $kaarsjes = $kaarsjes + 1 (Optellen van kaarsjes ++ = telkens 1 erbij)
    ?>
</html>