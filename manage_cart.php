<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['addToCart'])) {
    if (isset($_SESSION['cart'])) {
      $count = count($_SESSION['cart']);
      $_SESSION['cart'][$count] =
        array('Item_Name' => $_POST['Item_Name'], 'Price' => $_POST['Price'], 'Quantity' => 1);
      print_r($_SESSION['cart']);
    } else {
      $_SESSION['cart'][0] =
        array('Item_Name' => $_POST['Item_Name'], 'Price' => $_POST['Price'], 'Quantity' => 1);
      print_r($_SESSION['cart']);
    }
  }
}
