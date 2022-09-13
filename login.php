<?php

session_start();

include('connection.php');


$username = $_POST['username'];
$password = $_POST['password'];


$login1 = mysqli_query($connect, "SELECT * FROM USERS WHERE user_name = '$username' AND user_password = '$password'" );

if (mysqli_num_rows($login1)>0){

    $userdata = mysqli_fetch_array($login1);

    $_SESSION['userdata'] = $userdata;

    echo '
    <script>
    window.location = ("dashboard.php");
    </script>
    ';
}else {
    echo '
<script>
alert("Empty or Invalid Login Details");
window.location = ("index.php");

</script>
';

}


?>