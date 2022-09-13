<?php
include ('connection.php');

$fullname = $_POST['fullname'];
$age = $_POST['age'];
$state = $_POST['state'];
$status = $_POST['status'];
$message = $_POST['message'];
$photo = $_FILES['photo']['name']; //this is to save the file to the datbase.
$file = $_FILES['photo']['tmp_name']; //this is to save the photo to any folder you wish.

move_uploaded_file($file, "images/$photo");
$insert = mysqli_query($connect, "INSERT INTO student_data (Full_Name, Age, State, Status, photo, message) VALUES ('$fullname','$age', '$state','$status','photo','$message')");

if ($insert){

    echo '
    <script>
    alert("REISTRATION COMPLETED!");
    window.location = ("index.php")
    </script>
    ';
}else echo'
<script>
    alert("REISTRATION COMPLETED!");
    window.location = ("index.php")
    </script>
    ';





?>