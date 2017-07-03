<?php
require_once("../connection.php");
extract($_REQUEST);
$id2=$_GET['id1'];
mysql_query("delete from blogs where id='".$id2."'");
header("location:deleteblogs.php");
?>