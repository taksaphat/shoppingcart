<?php

$connection = mysqli_connect("localhost", "root", "", "shoppingcart");
$variable = (isset($_GET['variable'])) ? $_GET['variable'] : "";

$sql = "INSERT INTO products (`name`, `desc`, `price`) VALUES ('".$_GET["product_name"]."', '".$_GET["desc"]."','".$_GET["price"]."')";
if ($connection->query($sql) === TRUE) {
    echo "เพิ่มสินค้าสำเร็จ";
    ?>
    <a href="<?php echo "index.php"; ?>">กลับหน้าหลัก </a>
    <?php
  } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }


?>