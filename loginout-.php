<?php
if (isset($_COOKIE['username'])){
    setcookie('username','',time()-3600,'/');
    setcookie('password','',time()-3600,'/');
}
header("refresh:0;url=login.php");
?>
