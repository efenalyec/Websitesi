<?php include "connect.php";
$sql = "select *
     from yorumlar  
     ORDER BY id DESC
     LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);




?>
