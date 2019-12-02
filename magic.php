<?php
include "flag.php";
show_source(__FILE__);
$str=$_GET['i'];
$str2=$_GET['ii'];

if(!is_numeric($str) || !ctype_alpha($str2)){
  die("hacking hazimaseyo!");
}

if(isset($_GET['i'])&&isset($_GET['ii'])){
  if(md5($str) == md5($str2)){
    echo $flag;
  }
  else{
    die("hacking hazimaseyo!");
  }
}
else{
  die();
}
?>
