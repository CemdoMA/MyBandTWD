<?php

$results_per_page = 3;

$query = "SELECT * FROM articles";
$result = mysqli_query($mysqli,$query) or die ("Error querying! (GETPAGINATION.PHP)");

$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results / $results_per_page);


!isset($_GET['page']) ? $page = 1 : $page = $_GET['page'];

$limit_starting_number = ($page - 1) * $results_per_page;

?>

<?php
//$limit_starting_number = 0;


$query = "SELECT * 
          FROM articles
          ORDER BY id DESC 
          LIMIT $limit_starting_number,$results_per_page";

$result = mysqli_query($mysqli,$query) or die ('Error querying');

while($item = $result -> fetch_assoc()){
    $result_list[] = $item;
}
?>
