<?php
session_start();
extract($_SESSION);
extract($_GET);
extract($_POST);


include ('connection.php');
$fullname = $_POST['fullname'];
$age = $_POST['age'];
$state = $_POST['state'];
$status = $_POST['status'];
$message = $_POST['message'];

$insert= mysqli_query($connect, "UPDATE student_data SET Full_Name='$fullname', Age='$age', State='$state', Status='$status', message='$message' WHERE student_id=$id'");
if($insert){
    echo ' 
    <script>
    alert("Record Updated");
    window.location=("record.php");
    
    </script>
    
    ';
}else {
    echo '
    <script>
    alert("Record update error");
    window.location=("record.php");
    
    </script>
    
    ';
}

?>