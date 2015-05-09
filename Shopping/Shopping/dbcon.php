<?php
$db_host = 'localhost';
  $db_user = 'root';

  $db = 'perfume';

  $con = mysql_connect($db_host, $db_user, "");

  if(!$con){
    die('Could not connect ' . mysql_error());
  }

  mysql_select_db($db, $con);
  ?>