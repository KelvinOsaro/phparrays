<?php
  $mixedNumbers = array(1, 3, 4, 7, 12, 15, 18, 23, 28, 31, 36, 39, 42, 45, 48, 60);
  $oddNumbers = array();
  $evenNumbers = array();

  foreach ($mixedNumbers as $number) {
    if ($number % 2 == 0) {
      $evenNumbers[] = $number;
    } else {
      $oddNumbers[] = $number;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Using Arrays</title>
</head>
<body>

  <h2>Original Array - mixedNumbers</h2>
  <?php
    echo '<pre>';
    print_r($mixedNumbers);
    echo '</pre>';
  ?>

  <hr>

  <h2>Odd Numbers Array - oddNumbers</h2>
  <?php
    echo '<pre>';
    print_r($oddNumbers);
    echo '</pre>';
  ?>

  <hr>

  <h2>Even Numbers Array - evenNumbers</h2>
  <?php
    echo '<pre>';
    print_r($evenNumbers);
    echo '</pre>';
  ?>

  <hr>

  <h2>Printing Odd Numbers using HTML</h2>
  <?php
    foreach ($oddNumbers as $oddNumber) {
      echo '<p>Odd Number: ' . $oddNumber . '</p>';
    }
  ?>

  <hr>

  <h2>Printing Even Numbers using HTML</h2>
  <?php
    foreach ($evenNumbers as $evenNumber) {
      echo '<p>Even Number: ' . $evenNumber . '</p>';
    }
  ?>
  

</body>
</html>
