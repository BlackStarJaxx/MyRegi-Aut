<?php
require('connect.php');
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $smg = "Регистрация прошла успешно";
    } else {
        $fmg = "Ошибка";
    }
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
    <form class="form-signin" method="POST" >
        <h2>Registration</h2>
        <?php if (isset($smg)) { ?>
            <div class="alert alert-success" role="alert"> <?php echo $smg; ?> </div> <?php } ?>
        <?php if (isset($fmg)) { ?>
            <div class="alert alert-danger" role="alert"> <?php echo $fmg; ?> </div> <?php } ?>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a href="login.php" class="btn bnt-lg btn-primary btn-block">Login</a>
    </form>
</div>
</body>
</html>