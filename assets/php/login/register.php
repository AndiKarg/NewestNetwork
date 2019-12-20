<?php
session_start();
include "../connect.php";

$u = $_POST['u'];
$p = sha1($_POST['p']);

$sql = "insert into users
    (user_name, user_pass)
    VALUES('".$u."', '".$p."')";

if (!mysqli_query($con, $sql)) {
        header('HTTP/1.1 500 Internal Server Booboo');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'Es existiert bereits ein User mit diesem Namen!', 'code' => 1337)));
    } else {
        $_SESSION['user_name'] = $u;
        $_SESSION['user_id'] = $con->insert_id;
    }

?>