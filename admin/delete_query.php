<?php
include 'conn.php';


$query_id = $_GET['id'];


$sql= "DELETE FROM contact_query where query_id={$query_id}";


$result=mysqli_query($conn,$sql);
mysqli_close($conn);

 ?>
