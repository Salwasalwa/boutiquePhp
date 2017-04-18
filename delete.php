<?php
include('miniproj_onlineSho_solo/cart.php');
$number = "POST['id_produitt']";
$qry = "DELETE FROM contient_cart WHERE id_produitt ='$number'";
$result=mysql_query($qry);

?>
