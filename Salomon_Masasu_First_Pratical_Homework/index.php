<?php
session_start();
$conn= mysqli_connect('localhost','root','','Stock');
if (!$conn){
    die("Connection failed");
}

else{
    echo "Connected Successfully";
}
?>
<html>

<body>

    <head>
        <link rel="stylesheet" type="text/css" href="./style.css">
        <title>LOGIN</title>
    </head>
</body>
<center>
    <div class="container">
        <h1 style="text-align: center;">MANAGER LOGIN</h1>
        <form method="post" action="index.php">
            <table>
                <tr>
                    <td><label>Username</label></td> <br>
                    <td><input type="text" name="Username" placeholder="Enter username" required> </td> <br>

                </tr>

                <tr>
                    <td><label>Password</label></td> <br>
                    <td><input type="text" name="Pass" placeholder="Enter password" required> </td> <br>
                </tr>
                <tr>
                    <td><button type=" submit" name="login">Login</button></td>
                </tr>
            </table>
        </form>
    </div>
</center>
<?php
    if(isset($_POST['login'])){
        $username=$_POST['Username'];
        $password=$_POST['Pass'];
    
    $sql="SELECT * FROM Manager where Username='$username' AND Pass='$password' ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);

    if(is_array($row)){
        $_SESSION["Username"]=$row['Username'];
        $_SESSION["Pass"]=$row['Pass'];
    }
    else{
        echo'<script type="text/javascript">';
        echo'alert("Invalid Username or Password!")';
        echo'window.location.href="index.php"';
        echo'</script>';
    }
}
if(isset($_SESSION["Username"])){
    header("Location:create.php");
}
?>
</center>

</html>