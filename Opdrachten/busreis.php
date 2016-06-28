<html>    
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css"> 
  <? include "../navbar.php"; ?> 
</head>
  <style>
  <? include "../style.css"; ?>
  </style>
<body> 
    <h2> Bus trip </h2> <br>
    <?php 
        $leeftijd = 0;
        $prijs = 0;
        if ($leeftijd > 65) {
            $prijs = 5;
        }
        else if ($leeftijd < 12) {
            $prijs = 5;
        }
        else if ($leeftijd < 3) {
            $prijs = 0;
        }
        else if ($leeftijd > 12) { 
            $prijs = 10;
        }
        
        $leeftijd = 10;
             echo "Age to price" , "(" , $leeftijd , ")" , " " , "=" , " " , $prijs , "€"; 
        
     ?>   
</body>
</html>