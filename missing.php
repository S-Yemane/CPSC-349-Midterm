<?php

    $row = mysqli_fetch_object($result);

    $db_userid = $row->admin_id;
    $db_password = $row->admin_password;
    $encryptpasswd = sha1($userPasswd);
    $db_name = $row->admin_name;

    if ($db_userid != $userid || $db_password != $encryptpasswd) {
        //TODO

        if (!$result) {
            echo ("Insert to administrator failed. ". mysqli_error($connection));
            exit();
        }
    }
?>