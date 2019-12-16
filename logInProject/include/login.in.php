<?php

session_start();

if(isset($_POST['submit'])){
    include_once 'dbh.inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //error handler
    //if these inputs are empty
    if(empty($uid) || empty($pwd)){
        header("Location: ../index.php?login=empty");
        exit();
    }else{
        $sql="SELECT * FROM users WHERE user_uid ='$uid' OR user_email='$uid' ";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
            header("Location: ../index.php?login=error1");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                //de-hashing the password
                $hashPwdCheck = password_verify($pwd, $row['user_pwd']);
                if($hashPwdCheck == false){
                    header("Location: ../index.php?login=error2");
                    exit();
                }elseif($hashPwdCheck == true){
                    //log in the user here
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['user_first_name'];
                    $_SESSION['u_last'] = $row['user_last_name'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_uid'] = $row['user_uid'];
                    header("Location: ../index.php?login=success");
                    exit();
                }
            }
        }
    }
}else{
    header("Location: ../index.php?login=error");
    exit();
}