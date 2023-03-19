<?php
$conn= mysqli_connect('localhost','root','','Stock');
if (!$conn){
    die("Connection failed");
}

else{
    //echo "Connected Successfully";
}
if(isset($_POST['delete'])){
    $id=$_POST['id'];

    $sql="DELETE FROM Import WHERE FurnitureId=$id";

    $delete=mysqli_query($conn,$sql);
    header('Location:view.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>delete</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <form action="deleteimport.php" method="post">
        <h2>delete furniture</h2>
        <input type="text" name="id" placeholder="furniture id">
        <input type="submit" id="delete" value="delete" name='delete'>
    </form>
    <div class="button-3"><a href="view.php">GO BACK</a></div>

</body>

</html>