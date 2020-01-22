<?php
    include 'functions.php';
    $array = randomGenerator(15);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPSnack4</title>
</head>
<body>

<?php
    foreach ($array as $key => $value) {
        $key++;
        echo " $key) $value"; ?><br>
<?php
    }
?>

</body>
</html>