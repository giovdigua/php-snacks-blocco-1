<?php
include 'var.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPSnack5</title>
</head>
<body>
<?php
    foreach ($arrayFromText as $value) {
        ?><p><?php echo $value ?>.</p><?php
    }

?>

    
</body>
</html>