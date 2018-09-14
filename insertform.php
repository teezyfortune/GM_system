
<user_id
	<first_name	
   <last_name	
    <Email	
    <password	
    <con_pass	
    course
    	year_of_grad	
        units	
        set	
        marital_stat	
        state	
        posts	
        profile_image	
        verify_code>

<?php
//by:fortunetech 11/09/2018
include('../includes/conn.php');
if(isset($_POST['signup']) && $_POST['upass']=$_POST['conpass']){//checks if user entry matches
        $fname=mysqli_real_escape_string(trim($_POST['fname']));
        $lname=mysqli_real_escape_string(trim($_POST['lname']));
        $email=mysqli_real_escape_string(trim($_POST['umail']));
        $pass=mysqli_real_escape_string(trim($_POST['upwd']));
        $conpass=mysqli_real_escape_string(trim($_POST['conpwd']));
        $course=mysqli_real_escape_string(trim($_POST['ucourse']));
        $yearofgrad=mysqli_real_escape_string(trim($_POST['yearofgraduation']));
        $unit=mysqli_real_escape_string(trim($_POST['unit']));
        $fname=mysqli_real_escape_string(trim($_POST['fname']));
        $fname=mysqli_real_escape_string(trim($_POST['fname']));
        $fname=mysqli_real_escape_string(trim($_POST['fname']));
        $fname=mysqli_real_escape_string(trim($_POST['fname']));



}

?>