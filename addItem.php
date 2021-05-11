<?=template_header('Add Item')?>

<center><br><br>
<form action="/addSuccess.php">
  <label for="fname">Product Name :</label><br>
  <input type="text" id="product_name" name="product_name"><br>
  <label for="lname">Description :</label><br>
  <input type="text" id="desc" name="desc"><br>
  <label for="price">Price :</label><br>
  <input type="text" id="price" name="price"><br><br>
  <input type="submit" value="Submit">
</form>

</center>


<?=template_footer()?>