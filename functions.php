<?php
  session_start();
  error_reporting(E_ALL ^ E_WARNING); 

  include("hash.php");
  $link=mysqli_connect($host,$userName,$password,$dbName);
  if(mysqli_connect_error()){
    print_r(mysqli_connect_error());
    exit();
  }else{
    //  echo "Database successfully Connected .";
  }
  if(isset($_GET['process'])){
    if($_GET['process']=="logout"){
      session_unset();
    }
  }

?>