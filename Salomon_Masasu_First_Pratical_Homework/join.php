<?php
$conn= mysqli_connect('localhost','root','','Stock');
if (!$conn){
    die("Connection failed");
}

else{
    // echo "Connected Successfully";
}
$sql="SELECT Furniture.FurnitureId, Furniture.FurnitureName,Furniture.FurnitureOwnerName,Import.ImportDate,Import.Quantity
FROM Import
INNER JOIN Furniture ON Import.FurnitureId=Furniture.FurnitureId;";
$result=mysqli_query($conn,$sql);

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
                    <th style="border: 1px solid black;">Import Date</th>
                    <th style="border: 1px solid black;">Quantity</th>



                </tr>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['FurnitureId']; ?></td>
                        <td><?php echo $row['FurnitureName']; ?></td>
                        <td><?php echo $row['FurnitureOwnerName']; ?></td>
                        <td><?php echo $row['ImportDate']; ?></td>
                        <td><?php echo $row['Quantity']; ?></td>


                    </tr>
                    <?php } ?>
                </tbody>

                </tr>
            </table>
    </div>


    </center>
</body>

</html>