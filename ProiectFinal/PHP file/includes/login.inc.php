<?php
if (isset($_POST ['login-submit'])) {
    require 'bdh.inc.php';

    $mailuid = $_POST ['mailuid'];
    $password = $_POST ['pwd'];
    if (empty($mailuid) ||empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();  
    }
    else {
        $sgl = "SELECT * FROM users_registration WHERE Username=? OR Email=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
        exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['Password']);
                if ($pswCheck == false) {
                    header("Location: ../index.php?error=wrongpwd");
                    exit();  
                }
                else if($pswCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['ID'];
                    $_SESSION['userUId'] = $row['Username'];

                    header("Location: ../index.php?login=success");
                    exit();  
                }
                else {
                    header("Location: ../index.php?error=wrongpwd");
                    exit(); 
                }
            }
            else {
                header("Location: ../index.php?error=nouser");
                exit();  
            }

        }
    }
}
else {
    header("Location: ../index.php");
    exit();  
}
