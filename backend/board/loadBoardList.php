<?php
    header('Content-Type:application/json; charset=utf-8');

    $db= mysqli_connect('localhost','endoyo','als2d3f4!','endoyo');
    mysqli_query($db,'set names utf8');

    $sql= "SELECT * FROM web_board ORDER BY no DESC";
    $result= mysqli_query($db, $sql);

    $board_list=[];

    $row_num= mysqli_num_rows($result);
    for($i=0; $i<$row_num; $i++){
        $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
        $board_list[$i]= $row;
    }

    mysqli_close($db);

    $board_size= count($board_list);

    $response= [];
    $response['status']= 200;
    $response['total']= $board_size;
    $response['data']= $board_list;

    echo json_encode($response);

?>