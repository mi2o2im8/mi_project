<?php
    header('Content-type:text/html; charset=utf-8');

    $db= mysqli_connect('localhost', '', '', '');
    mysqli_query($db, 'set names utf8');

    $sql= "SELECT * FROM !!!!!!!!!!!! ORDER BY no DESC";
    $result= mysqli_query($db, $sql);

    $board_list[];
    $row_num= mysqli_num_rows($result);
    for($i=0; $i<$row_num; $i++);
        $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
        $board_list[$i]= $row;


?>