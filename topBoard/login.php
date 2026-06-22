<?php
$conn= new mysqli("localhost","endoyo","als2d3f4!","endoyo");

$id= $_POST['id'];
$pw= $_POST['pw'];

$sql= "SELECT * FROM users WHERE id='$id'";
$result= $conn->query($sql);

if ($result->num_rows >0){
    $row= $result->fetch_assoc();

    if (password_verify($pw, $row['pw'])) {
        echo "<script>
            alert('로그인 성공');
            location.href='../Mi01.html';
            </script>";
    }else {
        echo "<script>alert('비밀번호 오류'); history.back(); </script>";
    }
} else {
    echo "<script>alert('아이디 오류'); history.back();</script>";
}

?>