<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" <---href=style.css"-- />
    <script src="main.js"></script>
    <style>
        .wrapper{
            background-color: black;
            width:;
        }
        form{
        position: right;
        padding-right:20px;
        padding-bottom:20px;
        
        }
        forminput{
            width: 30px;
            height:30px;
        }

        button{
            width: 50px;
            height:30px;
        }
        .form-cont{
        
            float:right;
            width: 200px;
            padding-right:200px;
        }
        .back-image{

            width:80px;
            height:80px;
        }
        </style>
</head>
<body>
    <login form--/>
<div class="wrapper">
    <div id="header">
        <div id="logo">
           <p style="color:white; padding-top:10px; padding-left:20px;"> GM_System</p>
            <div class="colapse">
<form action="login.php" method="post">
    <div align="right"></div><div class="row " align= "right" >
        
            <input type ="text" name="email" placeholder="enter email" required>
        <input type ="password" name="pwd" placeholder="enter password" required>
        <button style="background-color:blue; border:0px;" name="login">login</button>
</form>
</div>

</div>
</div>
</div>
    </div>
        <sign up area/>
        <div class="container">
            <div class="back-image">
                <img  style="with "src="./image.jpg">
            </div>
                   
<form class="form-cont" action="../GM_system/user/insert.php" method="POST"> 
<p style="font-size:32px; color:green;">Create Account</P>
    <label>first-name</label>
    <input type="text" name="fname" required placeholder="first name"><br>
    <label>last-name</label>
    <input type="text" name="lname" required placeholder="last name"><br>
    <label>email</label><br>
    <input type="email" name="umail" required placeholder="enter email">
    <label>password</label>
    <input type="password" name="upwd" required placeholder="enter password"><br>
    <label>confirm-password</label>
    <input type ="password" name="conpwd" required placeholder="confirm password"><br>
    <label>course of study</label>
    <input type ="text" name="ucourse" required placeholder="course name"><br>
    <label>year of graduation</label>
    <input type= "date" name="yearofgraduation" required placeholder="enter year of graduation"><br>
    <label>Units</label><br>
    <select name="unit" required ><br>
        <option>
            Drama
    </option>
<option>Press and publicity</option>
<option>Prayer </option>
<option>Choir</option>
<option>Evangelism</option>
</select><br>
<label>which set ?</label>
    <input type= "int" name="set" required placeholder="which set?"><br>
   
<label>Marital status</label><br>
<select name="mstatus" required ><br>
    <option>Married</option>
    <option>single</option>
</select><br>
<label>state</label>
    <input type ="text" name="ustate" required placeholder="enter state"><br>

<button style="background-color:green; border-color:white; width:100px; border-style:oval;" name="submit" id='submit'>signup</button>
       </form
    </div>
    
</div>
</html>
</body>