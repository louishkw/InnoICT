<?php session_start(); ?>

<?php
include("condatabase.php");
$id = $_POST['LoginName'];
$pw = $_POST['LoginPassword'];

$result = mysqli_query($conn , "SELECT * FROM member WHERE email='$id'") ;
$row = @mysqli_fetch_array($result);

$link_prof = "<meta http-equiv=REFRESH CONTENT=1;url=../profile.html?id=";
$c = ">";

//echo $row[2] ; 

if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        echo '登入成功!';
        echo $link_prof.$id.$c;
}
else
{
        echo '登入失敗!';
        //echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
   
}


?>