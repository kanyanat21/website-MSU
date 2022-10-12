<?php

    include "database.php";
   
    if(isset($_POST['Submit']))
    {
       
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $sql = "SELECT id,name FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($link,$sql);

        // FAILED LOGIN
        if (mysqli_num_rows($result)==0)
        {
             //echo "Nothing found here";
             $failed=1;
        }

        // SUCCESS LOGIN
        else
        {
            //echo "Found! Login OK!";
            $row = $result->fetch_row();

            $db_id = $row[0];
            $db_name = $row[1];

            //echo "<br><br>ID: $db_id  Name: $db_name";

            setcookie("auth_id","$db_id");
            setcookie("auth_email","$email");

            //echo "Success! Cookie value: " . $_COOKIE['auth_id'];
            header("Location:UXUI_index.php");

            exit;
        }

    }

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Login</title>
            <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Kanit">
       <style>
        body {
	  background-color:#696969;
	  font-family: Kanit;
   
	  }
      </style>
</head>

<body >

<br>
<br>

<div class="container p-3 md-4">

    <?php
    if ($failed==1)
    {
    ?>
        <div class="panel panel-danger">
            <div class="panel-heading">Login error</div>
            <div class="panel-body">อีเมลล์หรือรหัสผ่านของคุณไม่ถูกต้อง</div>
        </div>
              
    <?php
    }
    ?>

    <div class="panel panel-default">
    <center><h3 class="panel-heading" >เข้าสู่ระบบ</h3></center>
    <div class="panel-body">


        <form method=POST action=login.php >
        

            <div class="form-group">
                <label>Email:</label>
                <input type="Email" class="form-control" autocomplete=off required name="email"/>
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control"  required name="password"/>
            </div>

            <div class="form-group">
                <label>ยืนยันข้อมูล</label>
                <button onclick="return confirm('คุณต้องการเข้าสูระบบใช่หรือไม่')" 
                type="submit" class="btn btn-warning" name="Submit" href="regist_success.php">Login</button>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="home.php" class="btn btn-primary text-white mb-4">กลับหน้าแรก</a>
            </div>

           
        </form>
    </div>
</div>
</div>
</body>
</html>