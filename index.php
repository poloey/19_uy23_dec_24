<?php 

$fruits = ['apple', 'orange', 'banana'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>All fruits using foreach</h1>
  <ul>
  <?php foreach($fruits as $fruit) : ?>
    <li><?php echo $fruit ?></li>
  <?php endforeach; ?>
  </ul>
  <h1>All fruits using for loop</h1>
  <ul>
  <?php for($i = 0; $i < count($fruits); $i++) : ?>
    <li><?php echo $fruits[$i] ?></li>
  <?php endfor; ?>
  </ul>

  <h1>All fruits using while loop</h1>
  <ul>
  <?php $i = 0; ?>
  <?php while($i < count($fruits)) : ?>
    <li><?php echo $fruits[$i] ?></li>
  <?php $i++; endwhile; ?>
  </ul>
</body>
</html>

