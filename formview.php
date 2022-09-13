<?php

session_start();
extract($_SESSION);
extract($_GET);
extract($_POST);

include ('connection.php');


$query = mysqli_query($connect, "SELECT * FROM student_data WHERE student_id='$id'");

$row1 = $query->fetch_array();
    


?>
<p><?php echo $row1['Full_Name']; ?></p>
<img src="images/<?php echo $row1['photo']; ?>" alt="picture" style="width:15%; height:35">

