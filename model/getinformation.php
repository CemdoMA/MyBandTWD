<?php
$information_list = array();

$sql = "SELECT * FROM information";

$result = $mysqli->query($sql);

while ($item = $result->fetch_assoc()) {
    $information_list[] = $item;
}

?>