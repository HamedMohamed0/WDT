<?php
$error_fields = array();
include 'db_connection.php';
$conn = openCon();
$id = filter_input(INPUT_GET, 'U_ID', FILTER_SANITIZE_NUMBER_INT);
$select = "SELECT * FROM `users` WHERE `users`.`U_ID`= " . $id." LIMIT 1;";
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($result);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!(isset($_POST['name']) && !empty($_POST['name']))){
        $error_fields[] = "name";
    }
    if(!(isset($_POST['user_name']) && !empty($_POST['name']))){
        $error_fields[] = "user_name";
    }
    if(!$error_fields){
        $id = filter_input(INPUT_GET, 'U_ID', FILTER_SANITIZE_NUMBER_INT);
        $name = mysqli_escape_string($conn, $_POST['name']);
        $userName = mysqli_escape_string($conn, $_POST['user_name']);
        $password = (!empty($_POST["password"])) ? ($_POST['password']) : $row['paswword'];
        $admin = (isset($_POST['admin'])) ? 1 : 0;
        $query = "UPDATE `users` SET `name`= '".$name."', `user_name`= '".$userName."', `password`= '".$password."' , `admin` = " . $admin. " WHERE `users`.`U_ID` = ". $id;
        if(mysqli_query($conn, $query)){
            header("Location: list.php");
            exit;
        }
        else{
            echo $query;
            echo mysqli_error($conn);
        }
    }
}
closeCon($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Edit</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnePyOneAdmins</title>
    <link rel="stylesheet" href="E-Learning/css/normalize.css" />
    <link rel="stylesheet" href="E-Learning/css/all.min.css" />
    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
        rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- GoogleFonts -->
    <style>
        :root {
        --main-color:#181818;
        --second-color:#00ce79;
        --second-color-dark:#00ce79f0;
        --second-color-light:#00e472;
        --section-padding:100px;
        }
        .edit {
            color:var(--second-color);
            margin-left:10px;
        }
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color:var(--main-color);
            color:white;
        }
        a {
            text-decoration:none;
            color:var(--second-color);
            font-weight:bold;
        }
        table tr td,
        table tr th {
            border:1px solid var(--second-color);
            padding:10px;
            margin:15px;
            border-radius:5px ;
            background-color:#2c2b2b;
        }
        table {
            width:100%;
        }
        form {
            display: flex;
            justify-content: start;
            align-items: flex-start;
            margin: 50px 0;
            gap: 20px;
            flex-direction: column;
            margin: 50px;
        }
        form input {
            background:#2c2b2b;
            border:none;
            padding:10px 20px;
            border-radius:5px;
            color:var(--second-color)
        }
        form input[type=text]::placeholder {
            color:var(--second-color)
        }
        form input:focus{
            outline:none;
        }
        form input[type=submit]{
            background-color:var(--second-color);
            color:var(--main-color);
            font-weight:500;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form method="post">
        <input type="hidden" name="id" id="id" value="<?= (isset($row['id'])) ? $row['id']:''?>"/>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= (isset($row['name'])) ? $row['name']:''?>"/> <?php if(in_array("name", $error_fields)) echo "*Please Enter Your Name!";?><br>
        <label for="user_name">user_name</label>
        <input type="text" name="user_name" id="user_name" value="<?= (isset($row['user_name'])) ? $row['user_name']:''?>"/> <?php if(in_array("user_name", $error_fields)) echo "*Please Enter Your Username!";?><br>
        <label for="password">Password</label>
        <input type="text" name="password" id="password" value="<?= (isset($row['password'])) ? $row['password']:''?>" /> <?php if(in_array("password", $error_fields)) echo "*Please Enter A Password Not Less Than 6 Characters!";?><br>
        <div>
        Admin <input type="checkbox" name="admin" <?= ($row['admin']) ? 'checked':'' ?>/>
        </div>
        <input type="submit" name="submit" value="Edit User">
    </form>
</body>
</html>