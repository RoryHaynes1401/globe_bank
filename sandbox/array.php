<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Arrays</title>
  </head>
  <body>
    <?php

    $numbers = array(4,8,15,16,23,42);
    $numbers[10][1] = "test";
    ?>
    <pre>
    <?php echo print_r($numbers); ?>
  </pre><br>
    <?php


    $assoc = ["first_name" => "Snowy", "type" => "Dog"];
    echo $assoc["type"];
    ?>


  </body>
</html>
