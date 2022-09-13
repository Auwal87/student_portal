<!doctype html>


<?php
session_start();

include('connection.php');

if (isset($_SESSION ['userdata'])){
//data of the session owner
    $userdata = $_SESSION['userdata'];





?>
<html>

<head>


<body>
    <hr><hr>
    <a href="dashboard.php" ><button>DASHBOARD</button></a>
    <a href="records.php" ><button>LIST OF REGISTERED RECORDS</button></a>
    <a href="dash_reg.php" ><button>REGISTER STUDENT</button></a>
    <a href="logout.php" ><button>LOGOUT</button></a>

    <hr>
     <h4> WELCOME:USER_FULLNAME: <?php echo $userdata['user_fullname']; ?> </h4>
     <hr>

     <?php
}
else {
    echo '
    <script>
    alert("Invalid session please login");
    window.location=("index.php");
    
    </script>
    ';
}
?>