<?php
/*$login = "Не известно";
$password = "Не известно";
if(isset($_POST['login'])) $login = $_POST['login'];
if (isset($_POST['password'])) $password = $_POST['password'];
 
echo "Ваш логин: $login  <br> Ваш пароль: $password";
echo PHP_EOL;
?>

<?php
$ft = fopen("Text.txt", 'r') or die("не удалось открыть файл");
while(!feof($ft))
{
    $str = htmlentities(fgets($ft));
    echo $str;
}
fclose($ft);

echo PHP_EOL;
/*$str = htmlentities(file_get_contents("Text.txt"));
echo $str   /*Повне відкриття файлу.

$fto = fopen("text2.txt", 'r') or die("не удалось открыть файл");
while(!feof($fto))
{
    $str = htmlentities(fread($fto, 1));
    echo $str;
}
fclose($fto); /* Відкриття файлу поблочно */


$fw = fopen("text3.txt", 'a+') or die("не удалось создать файл");
$str = "Привет мир , Как дела !";
fwrite($fw, $str);
fclose($fw);



?>

