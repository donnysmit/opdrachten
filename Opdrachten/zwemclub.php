<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/site.css"> 
  <?php include '../navbar.php'; ?>
</head>
<body>
  <style>
  <? include "../style.css"; ?>
  </style>
</body>
    <h2> Swimming club </h2> <br>
<?php 
    $name = array("De spartelkuikens" => "25", "De waterbuffels" => "32", "Plonsmderin" => "11", "Bommetje" => "23");
?>
  <table align="center">  
<?    
    foreach ($name as $zwemclub => $naam) {
        echo "<tr> <td>".$zwemclub."</td> <td>".$naam."</td> </tr>";
       } ?>
</table>