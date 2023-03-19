<?php
$conn= mysqli_connect('localhost','root','','Stock');
if (!$conn){
    die("Connection failed");
}

else{
    // echo "Connected Successfully";
}
$sql="SELECT * FROM Furniture";
$result=mysqli_query($conn,$sql);


if(isset($_POST['submit'])){
    $furnitureid=$_POST['furnitureid'];
    $importdate=$_POST['importdate'];
    $quantity=$_POST['quantity'];

$sql1="INSERT INTO Import(FurnitureId,ImportDate,Quantity) VALUES ('$furnitureid','$importdate','$quantity')";
$result1=mysqli_query($conn,$sql1);
if($result1){
    echo"Data Inserted";
}
else{
    echo"Data Not inserted";
}
}
?>
<html>

<head>
    <title>View</title>
    <link rel="stylesheet" href="./style.css">
    <style>
    table {
        border-collapse: collapse;
    }
    </style>

<body>
    <div class="button-3"><a href="index.php">Add New </a></div>
    <div class="button-3"><a href="viewimport.php">View Import Information</a></div>
    <div>
        <center>
            <table>
                <tr>
                    <th style="border: 1px solid black;">ID</th>
                    <th style="border: 1px solid black;">Furniture Name</th>
                    <th style="border: 1px solid black;">Furniture Owner Name</th>
                    <th style="border: 1px solid black;">Action</th>

                </tr>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['FurnitureId']; ?></td>
                        <td><?php echo $row['FurnitureName']; ?></td>
                        <td><?php echo $row['FurnitureOwnerName']; ?></td>
                        <td>
                            <a href="update.php?id=<?php echo $row['FurnitureId']; ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $row['FurnitureId']; ?>">Delete</a>

                        </td>
                    </tr>
                    <?php } ?>
                </tbody>

                </tr>
            </table>
    </div>

    <div class="container">
        <h1 style="text-align: center;">ADD IMPORT INFORMATION</h1>
        <form method="post" action="view.php">
            <table>
                <tr>
                    <td><label>Furniture Name</label></td> <br>
                    <td><input type="text" name="furnitureid" placeholder="Enter furniture Id" required> </td>
                    <br>

                </tr>

                <tr>
                    <td><label>Furniture Owner Name</label></td> <br>
                    <td><input type="date" name="importdate" placeholder="Enter Import Date" required>
                    </td> <br>
                </tr>
                <tr>
                    <td><label>Quantity</label></td> <br>
                    <td><input type="number" name="quantity" placeholder="Enter Quantity" required>
                    </td> <br>
                </tr>
                <tr>
                    <td><button type=" submit" name="submit">Submit</button></td>
                </tr>

            </table>
        </form>
    </div>
    </center>
</body>

</html>