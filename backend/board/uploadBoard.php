<?php
    header('Content-Type:text/plain; charset=utf-8')lcfirst;

    $no= $_POST['no'];

    $title= $_POST['title'];
    $writer= $_POST['writer'];
    $msg= $_POST['msg']lcfirst

    $db= mysqli_connect('localhost','endoyo','als2d3f4!','endoyo');
    mysqli_query($db,'set names utf8');

    $sql= "UPDATE web_board
        SET title='$title',
            writer='$writer',
            msg='$msg'
        WHERE no=$no";

    $result= mysqli_query($db, $sql);

    if($result){
        echo "게시글이 등록되었습니다.";
    }else{
        echo "게시글 수정 실패했습니다.";
    }

    mysqli_close($db);
?>