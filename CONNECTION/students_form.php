<!DOCTYPE html>
<html lang="en">
<head>
    <style type='text/css'>

    input{
        width:100%;
        box-sizing: border-box;
        margin:20px 0px;
        padding: 5px;
    }

    form{
        width: 25%;
        background: #f3f3f3;
        padding:40px 30px;
        position: relative;
        top:70%;
        left:50%;
        transform:translate(-50%,3%);
    }
    input[type=submit]{
        background: blue;

    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="insert_student.php">
    <h2>ADD STUDENT</h2>
    <label>ID</label>
    <input type="text" name="id">
    <label>StudentName</label>
    <input type="text" name="student_name">
    <label>Age</label>
    <input type="number" name="age">
    <label>Sex</label>
    <select name="sex" class="input">
        <option>Male</option>
        <option>Female</option>
    </select>
    <input type="submit" value="Insert Student">
   </form> 
</body>
</html>