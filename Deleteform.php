<?php

session_start();
extract($_SESSION);
extract($_POST);
extract($_GET);


include ('connection.php');

$delete = mysqli_query($connect, "DELETE * FROM student_data WHERE student_id='$id'");

if($delete){
    echo '
    <script>
    alert("Record Deleted");
    window.location=("record.php");
    
    </script>
    
    ';
}else {
    echo '
    <script>
    alert("Record error");
    window.location=("record.php");
    
    </script>
    
    ';
}
?>