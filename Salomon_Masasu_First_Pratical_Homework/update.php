<?php
$conn= mysqli_connect('localhost','root','','Stock');
if (!$conn){
    die("Connection failed");
}

else{
    // echo "Connected Successfully";
}
$furnitureid = $_GET['id'];

$sql = "SELECT * FROM Furniture WHERE FurnitureId = $furnitureid";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Update record when form is submitted
if (isset($_POST['update'])) {
    $furniturename=$_POST['furnitureName'];
    $furnitureownername=$_POST['furnitureOwnerName'];

    $sql = "UPDATE Furniture SET FurnitureName='$furniturename',FurnitureOwnerName='$furnitureownername' WHERE FurnitureId=$furnitureid";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Display update record form
?>
<html>

<head>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container">
        <h1 style="text-align: center;">UPDATE FURNITURE DETAILS</h1>
        <form method="post">
            <table>
                <tr>
                    <td> <label>FurnitureName:</label></td>
                    <td> <input type="text" name="furnitureName" value="<?php echo $row['FurnitureName']; ?>"><br></td>
                </tr>
                <tr>
                    <td> <label>FurnitureOwnerName:</label>
                    </td>
                    <td> <input type="text" name="furnitureOwnerName"
                            value="<?php echo $row['FurnitureOwnerName']; ?>"><br>
                    </td>


                </tr>
                <tr>
                    <td> <input type="submit" name="update" value="Update"></td>
                </tr>
        </form>

    </div>
    <div class="button-3"><a href="view.php">Back </a></div>
</body>

</html>