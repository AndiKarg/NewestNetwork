<?php
include "../connect.php";

$sql = "SELECT f.feed_id, f.user_id, f.date, f.corefeed, f.likes, f.feedpic , u.user_name, u.user_level, u.online
FROM feed as f
inner join users as u on f.user_id = u.user_id
Order by date DESC";

$myObj;
$myArr = array();

$dberg = mysqli_query($con, $sql);

if (!empty($dberg)) {
    while ($row = $dberg->fetch_array(MYSQLI_ASSOC)) { //ergebnis als Array und von Array dann zu JSON umwandeln -- MYSQLI ASOCC Für richtige Ausgabe
        $myArr[] = $row;
    }
    echo json_encode($myArr);
} else {
    echo "???";
}
