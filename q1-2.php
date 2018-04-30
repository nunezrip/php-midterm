<!DOCTYPE html>
<?php

  /*
1: Lion bit my finger!

Part 1: Lion will bite your finger exactly 50% of the time. First, write a function isBitten() that returns TRUE with 50% probability, and FALSE otherwise. Hint: You may find the rand() function useful.
Part 2: Below the function, write code to generate a webpage that displays “Lion bit your finger!” or “Lion did not bite your finger!” using the isBitten() function.
*/

  include 'q1-1.php';

  $result = isBitten();
  $r;

  if ($result === True) {
    $r = 'Lion bit your finger!';
  } else {
    $r ='Lion did not bite your finger!';
  }


?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div><?php echo $r?></div>
</body>
</html>
