<?php
$con = mysqli_connect("rdbms.strato.de","U3422793","WW123chicken","DB3422793");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>