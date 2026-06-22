<?php
    header('Content-Type:application/json; charset=utf-8');

    $no= $_GET['no'];

    $db= mysqli_connect('localhost', 'endoyo', 'als2d3f4!', 'endoyo');
    mysqli_query($db, 'set names utf8');

    $no= (int)$no;

    $sql= "SELECT * FROM web_board WHERE no=$no";
    $result= mysqli_query($db, $sql);

    $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo json_encode($row);
?>