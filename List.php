<?php
include 'db_connection.php';
$conn = openCon();
$query = "select * from `users`";
if(isset($_GET["search"])){
    $search = mysqli_escape_string($conn, $_GET["search"]);
    $query.= " WHERE `users`.`name` LIKE '%".$search."%' OR `users`.`user_name` LIKE '%".$search."%' OR `users`.`U_ID` LIKE '%".$search."%'"; 
}
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
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
            padding:10px;
            margin:15px;
            border-radius:5px ;
            background-color:#2c2b2b;
        }
        table {
            width:100%;
            border: 1px solid var(--second-color);
            text-align: center;
            border-radius: 5px;
        }
        form {
            display:flex;
            justify-content: center;
            align-items:center;
            margin:50px 0;
            gap:20px;
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
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;color:var(--second-color); font-size:30px">Users List <i class="fa-solid fa-address-book fa-fade edit"></i></h2>
    <form method="get">
        <input type="text" name="search" placeholder=" Name or UserName or ID">
        <input type="submit" value="Search">
        <a href="E-Learning/admin/indexadmin.html"><i class="fa-solid fa-house"></i></a>
    </form>
    <table style="text-align: center">
            <tr>
                <td colspan="3" style="text-align: center"> <?= mysqli_num_rows($result) ?> Users <i class="fa-solid fa-user edit"></i></td>
                <td colspan="3" style="text-align: center"><a href="signup-check.php">Add User</a></td>
            </tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Admin</th>
                <th>Actions</th>
            </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?= $row['U_ID']?></td>
            <td><?= $row['name']?></td>
            <td><?= $row['user_name']?></td>
            <td><?= ($row['admin']) ? 'Yes' : 'No' ?></td>
            <td><a href="edit.php?U_ID=<?=$row['U_ID']?>">Edit</a> | <a href="delete.php?U_ID=<?=$row['U_ID']?>">Delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <script src="E-Learning/js/all.min.js"></script>
    <script src="E-Learning/js/bootstrap.bundle.min.js"></script>
    <script src="E-Learning/js/tasks.js"></script>
</body>
</html>
<?php
mysqli_free_result($result);
closeCon($conn);