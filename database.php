<?php
$conn = mysqli_connect($servername="localhost", $username="root", $password="");

$sql = "CREATE DATABASE myProject";
mysqli_query($conn , $sql);

if(!$conn)
{
  die("not connected ". mysqli_connect_error());
}
else
{
  echo "connected";
}

?>