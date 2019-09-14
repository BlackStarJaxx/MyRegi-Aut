<?php
session_start();
require('connect.php');
if (isset($_POST['username']) and isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username'and password='$password'";
    $result = mysqli_query($connection, $query) or die (mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['username'] = $username;
    } else {
        $fsmg = "Ошибка";
    }
}
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Hello " . $username . "";
    echo " Ви зайшли";
    echo "<a href='logout.php' class=btn.btn-lg.btn-primary' > <br>LogOut</br> </a>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device=width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styleRegi.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>MyRegi_Auto</title>
</head>
<body>


<div class="container">
    <form class="form-signin" method="POST">
        <h2>Registration</h2>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <a href="indexRegi.php" class="btn bnt-lg btn-primary btn-block">Registration</a>
    </form>
</div>


</body>
</html>