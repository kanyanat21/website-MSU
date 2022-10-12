<!doctype html>
<html lang="en">
  <head>
  <title>รับฟังความเห็น</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Kanit">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
	  background-color:#696969;
	  font-family: Kanit;
   
	  }
    .col-md-6 .offset-md-3 {
      min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
    }
      </style>
  </head>

  <body>
    <center>
<br>
<br>

<div class="container p-3 md-4">
  <div class="animated fadeIn"> 
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
            <strong class="fs-2" >รับฟังความเห็น</strong> 
        </div>

      <form method=POST action=comment_db.php>
        <div class="card-body card-block">
          <div class="row form-group">
              <div class="col col-md-3"><label for="text-input" class=" form-control-label">ชื่อ-นามสกุล</label></div>
              <div class="col-12 col-md-9"><input type="text" name="name" placeholder="name" class="form-control"></div>
          </div>
          <br>
          <div class="row form-group">
              <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
              <div class="col-12 col-md-9"><input type="email" name="email" placeholder="Enter Email" class="form-control"></div>
          </div>
          <br>
          <div class="row form-group">
              <div class="col col-md-3"><label for="phone-input" class=" form-control-label">เบอร์โทร</label></div>
              <div class="col-12 col-md-9"><input type="phone" name="phone" placeholder="phone" class="form-control"></div>
          </div>
          <br>
          <div class="row form-group">
              <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">ระบุรายละเอียด</label></div>
              <div class="col-12 col-md-9"><textarea name="comment" rows="9" placeholder="Comment..." class="form-control"></textarea></div>
          </div>
          <br>
          <div class="form-group">
                <label>ยืนยันข้อมูล</label>
                <button onclick="return confirm('คุณต้องการส่งความคิดเห็นใช่หรือไม่')" 
                type="submit" class="btn btn-warning" name="Submit" href="comment_db.php">บันทึก</button>
                <a href="UXUI_index.php" class="btn btn-primary">กลับหน้าแรก</a>
            </div>
          
        </div>
      </form>
  </div>
  </div>
    <!-- End Example Code -->
  </center>
  </body>
</html>