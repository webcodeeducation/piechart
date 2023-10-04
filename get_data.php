<?php
include 'config.php';

$sql_php = 'select * from chart_data where language = "PHP"';
$sql_java = 'select * from chart_data where language = "Java"';
$sql_laravel = 'select * from chart_data where language = "Laravel"';

$result1 = mysqli_query($connection, $sql_php);
$result2 = mysqli_query($connection, $sql_java);
$result3 = mysqli_query($connection, $sql_laravel);




$php = mysqli_fetch_row($result1);
$java = mysqli_fetch_row($result2);
$laravel = mysqli_fetch_row($result3);

echo json_encode(array('php'=>$php[2],'java'=>$java[2],'laravel'=>$laravel[2]));
?>