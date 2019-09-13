<?php
session_start();
session_destroy();
header('Location: indexRegi.php');
exit;
?>