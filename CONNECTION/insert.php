<?php
  include 'connection.php';
    
    $a=$_POST['id'];
    $b=$_POST['name'];
    $c=$_POST['password'];
    $d=$_POST['location'];

    $sql="INSERT INTO user values('$a','$b','$c','$d')";

    $a=mysqli_query($conn,$sql);

    header("location:FORM.php");
    ?>