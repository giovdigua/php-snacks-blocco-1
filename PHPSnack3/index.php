<?php
include 'var.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPSnack 3</title>
</head>
<body>
<?php
    foreach ($posts as $key => $date) {?>
       <h1> <?php echo " Post del $key";?></1>
        <?php foreach ($date as $value) {?>
            <h2><?php echo $value['title'];?></h2>
            <h3><?php echo $value['author'];?></h3>
            <p><?php echo $value['text'] ?></p>
            <hr>
        <?php }
       

    }
?>
    
</body>
</html>