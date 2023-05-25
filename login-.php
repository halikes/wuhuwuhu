<?php
include ('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];
if ($username == 'root' and $password == '123456'){
    setcookie('username','',time()-3600,'/');
    setcookie('password','',time()-3600,'/');
    header("refresh:0;url=backstage2.php");
}else{
    if ($username and $password){
        $sql = "select * from users where username = '$username' and password = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            setcookie('username',$username,time() + 24 * 60 * 60,'/');//这里的'/'表示全局cookie
            setcookie('password',$password,time() + 24 * 60 * 60,'/');//这里的'/'表示全局cookie
            header("refresh:0;url=index.php");
        }else{
            echo "<script>alert('잘못된 계정이나 비밀번호!');</script>";
            header("refresh:0;url=login.php");
        }
    }else{
        echo "<script>alert('계정을 입력해주세요!');</script>";
        header("refresh:0;url=login.php");
    }
}

//$conn->close();
?>
