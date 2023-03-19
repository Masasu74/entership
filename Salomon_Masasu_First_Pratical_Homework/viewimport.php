<?php
$conn= mysqli_connect('localhost','root','','Stock');
if (!$conn){
    die("Connection failed");
}

else{
    // echo "Connected Successfully";
}
$sql="SELECT * FROM Import";
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
    <div class="button-3"><a href="view.php">Add New </a></div>
    <div class="button-3"><a href="join.php">See Joined Data </a></div>


    <div>
        <center>
            <table>
                <tr>
                    <th style="border: 1px solid black;">FurnitureID</th>
                    <th style="border: 1px solid black;">Import Date</th>
                    <th style="border: 1px solid black;">Quantity</th>
                    <th>Action</th>
                </tr>
                <tbody><?php if($result->num_rows>0) {
        while($row=$result->fetch_assoc()) {
            ?><tr>
                        <td style="border: 1px solid black;"><?php echo $row['FurnitureId'];
            ?></td>
                        <td style="border: 1px solid black;"><?php echo $row['ImportDate'];
            ?></td>
                        <td style="border: 1px solid black;"><?php echo $row['Quantity'];
            ?></td>
                        <td> <a href="updateimport.php?id=<?php echo $row['FurnitureId']; ?>">Edit</a><br></td>
                        <td> <a href="deleteimport.php?id=<?php echo $row['FurnitureId']; ?>">Delete</a><br></td>
                    </tr><?php
        }
    }

    ?>
                    </tr>
            </table>
    </div>


    </center>
</body>

</html>