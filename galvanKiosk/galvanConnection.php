<?php
   $galvan_conn = mysqli_connect("localhost", "root", "", "galvan_kiosk");


   if(!$galvan_conn) {
      die ("Error in Connection" .mysqli_connect_error());
   }
?>