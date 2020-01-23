<?php 
include 'var.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPSnack7</title>
</head>
<body>
<?php
    foreach ($students as $value ) {
        echo $value['name'].' '.$value['lastname'].' .AVG Votes:' ;
      foreach ($value as $key => $inside) {
          
          if ($key === 'votes' ) {
              $average = calcualteArrayAverage($inside);
              echo $average.'<br>';
          }

      }
    }
      ?>
</body>
</html>