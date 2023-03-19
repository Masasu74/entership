<?php
$conn= mysqli_connect('localhost','root','','Stock');
if (!$conn){
    die("Connection failed");
}

else{
    // echo "Connected Successfully";
}
if(isset($_POST['submit'])){
    $furniturename=$_POST['furnitureName'];
    $furnitureownername=$_POST['furnitureOwnerName'];

$sql="INSERT INTO Furniture(FurnitureName,FurnitureOwnerName) VALUES ('$furniturename','$furnitureownername')";
$result=mysqli_query($conn,$sql);
if($result){
    echo"Data Inserted";
}
else{
    echo"Data Not inserted";
}
}
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>FURNTITURE</title>
</head>

<body>
    <!-- <h1>Welcome <?php session_start();
 echo $_SESSION['Username']; ?> Click here to</h1>
    <a href="logout.php">Logout </a> -->
    <center>
        <div class="container">
            <h1 style="text-align: center;">ADD FURNITURE</h1>
            <form method="post" action="create.php">
                <table>
                    <tr>
                        <td><label>Furniture Name</label></td> <br>
                        <td><input type="text" name="furnitureName" placeholder="Enter furniture name" required> </td>
                        <br>

                    </tr>

                    <tr>
                        <td><label>Furniture Owner Name</label></td> <br>
                        <td><input type="text" name="furnitureOwnerName" placeholder="Enter furniture owner Name"
                                required>
                        </td> <br>
                    </tr>
                    <tr>
                        <td><button type=" submit" name="submit">Submit</button></td>
                    </tr>

                </table>
            </form>
        </div>
        <a class="button-3" href="view.php">View </a>
    </center>
</body>

</html>