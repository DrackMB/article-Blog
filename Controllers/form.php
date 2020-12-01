<?php

$adressEmail=$_POST['User'];
$motDepass=$_POST['password'];
$b = new User();
$b-> remplireInfo('aa', 'bbb', 'MB@MB.com', 2222222, "M", "123456789");
echo $b->creeCompt(1);
var_dump($b);
exit;
?>

