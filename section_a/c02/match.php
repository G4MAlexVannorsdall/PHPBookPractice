<?php
$day = 'Tuesday';

$offer = match($day) {
    'Monday' => '20% off chocolates',
    'Saturday', 'Sunday' => '20% off mints',
    'Tuesday' => '15% off gum',
    default  => '10% off your entire order',
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>match Expression</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Offers on <?= $day ?></h2>
    <p><?= $offer ?></p>
  </body>
</html>