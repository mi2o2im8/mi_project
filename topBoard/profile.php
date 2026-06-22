<?php
session_start();

$img = $_SESSION['img'] ?? "../image/2026_낙서_1.jpg";
$nickname = $_SESSION['nickname'] ?? "";
$intro = $_SESSION['intro'] ?? "";
?>

<img src="<?= $img ?>" alt="프로필 이미지">
<h2><?= $nickname ?></h2>
<p><?= $intro ?></p>

<a href="mypage.html">저장하기</a>