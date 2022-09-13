<!doctype html>


<?php
include ('dashboard.php');

?>

    <center>
        <form action="register.php" method="post" enctype="multipart/form-data">

        <p>REGISTRATION FORM:</p>
        <p>ENTER FULLNAME: <input type="text" name="fullname" id="fullname" required></p>
        <p>ENTER AGE:      <input type="text" name="age" id="age" required></p>
        <p>ENTER STATE:    <input type="text" name="state" id="state" required></p>
        
        <!-- SELECT WITH OPTION MENU -->
        <P>SELECT STATUS: 
        <select name="status" id="status" required>
            <option value="">SELECT.....</option>
            <option value="SINGLE">SINGLE</option>
            <option value="MARRIED">MARRIED</option>
            <option value="DIVORCED">DIVORCED</option>
        </select>
</p>

<p>MESSAGE: <input type="text" name="message" id="message" required></p>
<p>SELECT FILE: <input type="file" name="image" id="image"></INPut></p>
<button type="Submit" name="Submit" id="Submit">SUBMIT DATA</button>


        </form>



    </center>


</body>
</head>
</html>