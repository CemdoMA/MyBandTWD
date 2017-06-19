<?php

$episodes_list = array();
//add model for articles

$sql = "SELECT * FROM episodes";

$result = $mysqli->query($sql);

while ($item = $result->fetch_assoc()){
    $episodes_list[] = $item;

}