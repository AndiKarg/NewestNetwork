<?php
session_start();
include "../connect.php";

$username = $_POST['username'];
$password = $_POST['password'];
$check = 0;

$sqlu = "SELECT user_name from users where user_name = '" . $username . "'";

$dbergu = mysqli_query($con, $sqlu);
$rowu = mysqli_fetch_object($dbergu);
        if (!empty($rowu)) {
            $check = 1;
        } else {
            header('HTTP/1.1 500 Internal Server Booboo');
            header('Content-Type: application/json; charset=UTF-8');
            die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
        }

if ($check == 1) {

    $sqlp = "SELECT user_id, user_name, user_level 
            FROM users
            WHERE user_pass = '" . sha1($password) . "'";

    $dbergp = mysqli_query($con, $sqlp);
    $rowp = mysqli_fetch_object($dbergp);
    if (!empty($rowp)) {
        $check = 2;
    } else {
        header('HTTP/1.1 500 Internal Server Booboo');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'ERROR', 'code' => 1338)));
    }

}

if ($check == 2) {
    echo "Toll du bist angemeldet!";
}

?>