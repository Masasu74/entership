<?php
$conn= mysqli_connect('localhost','root','','Stock');
if (!$conn){
    die("Connection failed");
}

else{
    // echo "Connected Successfully";
}
$furnitureid = $_GET['id'];

$sql = "SELECT * FROM Import WHERE FurnitureId = $furnitureid";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Update record when form is submitted
if (isset($_POST['update'])) {
    $importdate=$_POST['importdate'];
    $quantity=$_POST['quantity'];

    $sql = "UPDATE Import SET ImportDate='$importdate',Quantity='$quantity' WHERE FurnitureId=$furnitureid";

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
        <h1 style="text-align: center;">UPDATE IMPORTDETAILS</h1>
        <form method="post">
            <table>
                <tr>
                    <td> <label>Import Date:</label></td>
                    <td> <input type="date" name="importdate" value="<?php echo $row['ImportDate']; ?>"><br></td>
                </tr>
                <tr>
                    <td> <label>Quantity:</label>
                    </td>
                    <td> <input type="number" name="quantity" value="<?php echo $row['Quantity']; ?>"><br>
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