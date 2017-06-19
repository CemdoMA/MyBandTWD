<?php
//$limit_starting_number = 0;
$results_per_page = 2;


$query = "SELECT * 
          FROM articles
          ORDER BY id DESC 
          LIMIT $limit_starting_number,$results_per_page";

$result = mysqli_query($mysqli,$query) or die ('Error querying');
?>