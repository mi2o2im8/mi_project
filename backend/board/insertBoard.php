<?php
    header('Content-Type:text/plain; charset=utf-8');
    $json_data = file_get_contents("php://input");
echo $json_data;
exit;
    $json_data= file_get_contents('php://input');
    $datas= json_decode($json_data, true);

    $title= $datas['title'];
    $writer= $datas['writer'];
    $password= $datas['password'];
    $message= $datas['msg'];

    $password=password_hash($password, PASSWORD_DEFAULT);

    $now= date('Y.m.d H:i:s');

    $db= mysqli_connect('localhost','endoyo','als2d3f4!','endoyo');
    mysqli_query($db, 'set names utf8');

    $sql= "INSERT INTO web_board(title, msg, writer, date, hits, password) VALUES('$title','$message','$writer','$now','0','$password')";
    $result= mysqli_query($db, $sql);

    if($result) echo "글 업로드 성공";
    else echo "오류 발생. 다시 시도해 주세요.";

    mysqli_close($db);
    

?>