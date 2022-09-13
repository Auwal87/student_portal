<?php

include ('connection.php');


$username = $_POST ['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$fullname = $_POST['fullname'];

//$insert = mysqli_query($connect, "INSERT INTO USERS (user_name,user_password,user_fullname)VALUES ('$username', '$password', '$fullname')");

if($password==$cpassword){
    $insert = mysqli_query($connect, "INSERT INTO USERS (user_name,user_password,user_fullname)VALUES ('$username', '$password', '$fullname')");
    if($insert){
echo'
<script>
alert("Admin added successfully");
window.location = ("index.php");
</script>

';

}
else {
    echo'
<script>
alert("Admin not added");
window.location = ("admin_reg.php");
</script>

';
}
}else {
    echo '
<script>
alert("password and comfirm password not the same");
window.location = ("admin_reg.php");
</script>
    ';
}

?>