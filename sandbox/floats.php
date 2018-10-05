<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Floating Point Numbers</title>
  </head>
  <body>
    <?php
    echo $float = 3.14;
    ?><br>
    <?php
    echo $float + 7;
    ?><br>
    <?php
    echo 4/3;
    ?><br>
    Round: <?php echo round($float, 1); ?> <br>
    Ceiling: <?php echo ceil($float); ?> <br>
    Floor: <?php echo floor($float); ?> <br>
    <?php $integer = 3; ?>
    <?php echo "Is {$integer} integer? " . is_int($integer); ?><br>
    <?php echo "Is {$float} float? " . is_int($float); ?><br>
  </body>
</html>
