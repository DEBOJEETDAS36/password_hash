<?php
 
$pass="news";
$option = ['cost' => 15];
$str_pass=password_hash($pass, PASSWORD_BCRYPT, $option);
echo "$str_pass";
$hlo="something";
$pass_check=password_verify($hlo, $str_pass);
if($pass_check){
    echo "<br>Login Successful!";
}else{
    echo "<br>Not successful!";
}

?>