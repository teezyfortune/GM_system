

<?php
//by:fortunetech 11/09/2018
include('../includes/conn.php');
$con = connection();
if(isset($_POST['signup']) && $_POST['upass']=$_POST['conpwd']){//checks if user entry matches

        $fname=mysqli_real_escape_string($con,trim($_POST['fname']));
        $lname=mysqli_real_escape_string($con,trim($_POST['lname']));
        $email=mysqli_real_escape_string($con,trim($_POST['umail']));
        $pass=mysqli_real_escape_string($con,trim($_POST['upwd']));
        $conpass=mysqli_real_escape_string($con,trim($_POST['conpwd']));
        $course=mysqli_real_escape_string($con,trim($_POST['ucourse']));
        $yearofgrad=mysqli_real_escape_string($con,trim($_POST['yearofgraduation']));
        $unit=mysqli_real_escape_string($con,trim($_POST['unit']));
        // $fname=mysqli_real_escape_string($con,trim($_POST['fname']));
        // $fname=mysqli_real_escape_string($con,trim($_POST['fname']));
        // $fname=mysqli_real_escape_string($con,trim($_POST['fname']));
        // $fname=mysqli_real_escape_string($con,trim($_POST['fname']));

        $sql = "INSERT INTO `user`(`first_name`, `last_name`, `Email`, `password`, `con_pass`, `course`, `year_of_grad`, `units`) VALUES ('$fname','$lname','$email','pass','$conpass','$course','yearofgrad','$unit')";
        $stmt = $con->query($sql) or die($con->error);
        if ($stmt) {
                echo "Data Added Successfully";
        }else{
                echo "failed";
        }



}

?>