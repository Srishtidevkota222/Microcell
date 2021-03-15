<!DOCTYPE HTML>
<?php include('menu.php'); ?>

<HTML>
<HEAD>
<style>
.submit{
margin:200px;
}
</style>
</HEAD>
<BODY>
<body style='white'>
<br>
<div class="submit">


<?php
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $dbname = "ticketsystem";
        // Create connection
        $tact = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($tact->connect_error) {
            die("Connection failed: " . $tact->connect_error);
        } 
        
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $number=$_POST['number'];
        $message=$_POST['message'];
    
        // inset data to database
        $sql = "INSERT INTO `userinfo` (`fname`, `lname`, `number`, `message`)
        VALUES ( '$fname', '$lname','$number','$message')";

        
        

        if ($tact->query($sql) === TRUE) {
            echo "ticket has been created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $tact->error;
        }

        $tact->close();

    echo "<br><h2>hello </h2>".$_POST['fname'];
    echo "<br><h2>Thankyou for your infromation please check your email i have submitted details</h2>";





    
?>


</div>
</BODY>
</HTML>