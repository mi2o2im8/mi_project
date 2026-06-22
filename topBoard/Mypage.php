<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['nickname'] = $_POST['nickname'] ?? "";
    $_SESSION['intro'] = $_POST['intro'] ?? "";

    if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {

        $uploadDir = "uploads/";

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $newName = time() . "_" . $_FILES['img']['name'];

        move_uploaded_file(
            $_FILES['img']['tmp_name'],
            $uploadDir . $newName
        );

        $_SESSION['img'] = $uploadDir . $newName;
    }

    header("Location: profile.php");
    exit();
}
?>