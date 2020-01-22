<?php 
include 'var.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPSnack6</title>
    <style>
        div {
            float:left;
            padding:20px;
            margin:20px;
        }
        .green{
            background-color:green;
          
            
        }
        .grey{
            background-color:grey;
            

        }
    </style>
</head>
<body>
    <?php 
        foreach ($db as $key => $value) {
            if ($key === 'teachers') {?>
            <div class="grey">
                <h2><?php echo $key; ?></h2>
               <?php foreach ($value as $text) {?>
                   <p><?php echo $text['name'].' '.$text['lastname'];?></p><?php
               }?>
            </div>
            <?php
            } else {
               ?>
            <div class="green">
             <h2><?php echo $key; ?></h2>
               <?php foreach ($value as $text) {?>
                   <p><?php echo $text['name'].' '.$text['lastname'];?></p>
                   <?php
               }?>
             </div>
            <?php
            }
            
        }
    
    ?>
</body>
</html>