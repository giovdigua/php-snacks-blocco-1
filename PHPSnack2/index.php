<?php
include 'functions.php';
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

$text = '';
if ((mb_strlen($name)>=3) && (isValidMail($email) && (is_numeric($age)) )) {
    $text = 'Login successfull....';
} else {
    
    $text = 'Login deined....';
}


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPSnack2</title>
   
</head>
<body>
<?php if (empty($_GET)) {?>
   

<form action="" method="get">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <label for="age">Age:</label>
    <input type="number" name="age" min="1" max="120" id="age">
    <input type="submit" value="Send">
</form>
  <?php } else {?>
      <div><?php echo"$text";?></div>
 <?php } ?>
</body>
</html>