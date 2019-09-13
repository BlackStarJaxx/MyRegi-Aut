<?php
//$connection = mysqli_connect('localhost', 'root', '12341234');
//$select_db = mysqli_select_db('$connection' , 'practice');
//?>
<?php
$connection = new mysqli('localhost', 'root', '12341234', 'practice') or die("Could not connect to mysql" . mysqli_error($connection));
?>
