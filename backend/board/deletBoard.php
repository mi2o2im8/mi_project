<?php
    header('Content-Type:text/plain; charset=utf-8');

    $json_data= file_get_contents('php://input');
    $datas= json_decode($json_data, true);

    $no= $datas['no'];

    $db= mysqli_connect('localhost','endoyo','als2d3f4!','endoyo');
    mysqli_query($db,'set names utf8');

    $sql= "DELETE FROM web_board WHERE no=$no";
    $result= mysqli_query($db, $sql);

    if($result) echo "게시글 삭제 성공";
    else echo "게시글 삭제 실패";

    mysqli_close($db);


?>