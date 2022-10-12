<!DOCTYPE HTML>

<html>

<head>
  <title>Registration</title>

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

<body>
<br>
<br>
<br>
<br>
<br>

<div class="container p-3">

    <div class="panel panel-default">
    <div class="panel-heading">สมัครสมาชิกใหม่: กรุณากรอกข้อมูลให้ครบถ้วน</div>
    <div class="panel-body">

        <form method=POST action=regist_success.php>

            <div class="form-group">
                <label>ชื่อ-นามสกุล:</label>
                <input type="text" class="form-control" name="name" required/>
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control"  name="email" required/>
            </div>

            <div class="form-group">
                <label>เบอร์โทร:</label>
                <input type="text" class="form-control"  name="phone" required/>
            </div>

            <div class="form-group">
                <label>รหัสผ่าน:</label>
                <input type="password" class="form-control"  required name="password"/>
            </div>

            <div class="form-group">
                <label>ยืนยันข้อมูล</label>
                <button onclick="return confirm('คุณต้องการสมัครสมาชิกใช่หรือไม่')" 
                type="submit" class="btn btn-warning" name="Submit" href="regist_success.php">บันทึก</button>
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