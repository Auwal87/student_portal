<?php

include('dashboard.php');

?>


<html>
    <head>
        <style>
            td, th {
                border: 1px solid black;
                padding: 2px;
            }
        </style>
    </head>
<body>
    <center>
       <h1>LIST OF REGISTERED RECORD IN DATABASE</h1> 
    
    <table style="width; 100%">

<tr>
<th>S/N</th>
<th>NAME</th>
<th>AGE</th>
<th>STATE</th>
<th>STATUS</th>
<th>ACTION</th>
</tr>

<?php
$preview = mysqli_query($connect, "SELECT * FROM student_data");

while ($row = $preview->fetch_assoc()){
    //echo $row['Full_Name'];






?>
<tr>
<td><?php echo $row['student_id'];   ?></td>
<td><?php echo $row['Full_Name'];   ?></td>
<td><?php echo $row['Age'];   ?></td>
<td><?php echo $row['State'];   ?></td>
<td><?php echo $row['Status'];   ?></td>
<td>
<a href="formview.php?id=<?php echo $row['student_id']?>" ><button style="color:green">PREVIEW FORM</button></a>
<a href="UpdateForm.php?id=<?php echo $row['student_id']?>" ><button style="color:blue">EDIT FORM</button></a>
<a href="Deleteform.php?id=<?php echo $row['student_id']?> "><button style="color:red">DELETE FORM</button></a>
</td>
</tr>
<?php } ?>
</table>
</center>
</body>


</html>