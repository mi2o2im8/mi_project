<?php
$conn= new mysqli("localhost","endoyo","als2d3f4!","endoyo");

$id= $_POST['id'];
$pw= $_POST['pw'];
$pw_check= $_POST['pw_check'];
$name= $_POST['name'];
$birthday= $_POST['birthday'];
$gender = $_POST['gender'];
$country= $_POST['country'];
$phone= $_POST['phone'];

if ($pw !==$pw_check){
    die("비밀번호가 일치하지 않습니다.");
}

$hash_pw= password_hash($pw, PASSWORD_DEFAULT);

$sql= "INSERT INTO users (id, pw, name, birthday, gender, country, phone)
        VALUES('$id','$hash_pw','$name','$birthday','$gender','$country','$phone')";

if ($conn->query($sql)===TRUE){
    echo "<script>alert('회원가입 성공');</script>";
}else {
    echo "회원가입 실패 : " .$conn->error;
}
?>