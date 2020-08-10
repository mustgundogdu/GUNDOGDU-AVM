<?php


//mysql connection
$conn = mysqli_connect('localhost', 'yolgezer', 'g1b3kc4t', 'gundogdu_avm');

if(!$conn)
{

	die("COnnection Failed" .mysqli_error($conn));
}


?>
