<!doctype html>


<?php
session_start();
extract($_SESSION);
extract($_GET);
extract($_POST);


include ('connection.php');

$preview = mysqli_query($connect, "SELECT * FROM student_data WHERE student_id='$id'");
$row = $preview->fetch_array();


?>
<html>

<head>

    <hr><hr>
</head>
<body>
    <hr><hr>
    <center>
        <form action="UpdateForm.php?id=<?php echo $row['student_id']; ?>  " method="post" enctype="multipart/form-data">

        <p>REGISTRATION FORM:</p><br>
        <p>ENTER FULLNAME:</p>
         <input type="text" name="fullname" id="fullname" value="<?php echo $row['Full_Name']; ?>" required><br>
        <p>ENTER AGE:</p>
        <input type="text" name="Age" id="Age" value="<?php echo $row['Age']; ?>" required><br>
        <p>ENTER STATE: </p>
        <input type="text" name="State" id="State" value="<?php echo $row['State']; ?>" required><br>
        
        
        <P>SELECT STATUS: </p>
        <select name="status" id="status" required>
        <option selected value="<?php echo $row['Status']; ?>"><?php echo $row['Status']; ?></option>
            <option value="SINGLE">SINGLE</option>
            <option value="MARRIED">MARRIED</option>
            <option value="DIVORCED">DIVORCED</option>
        </select>
</p>

<p>MESSAGE: <input type="text" name="message" id="message" value="<?php echo $row['message']; ?>" required></p>
<button type="Submit" name="Submit" id="Submit">SUBMIT DATA</button>


        </form>



    </center>
<hr><hr>

</body>
</html>