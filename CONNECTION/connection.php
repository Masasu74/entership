<?php
  $conn=mysqli_connect("localhost","root","","idatech");
if ($conn==true)
{
    echo"connected";
}
else{
    echo"not connected";
}
?>