<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Kanit">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
    <title>ค้นหาเว็บไซต์คณะ</title>
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
<br>
<br>
<br>

<div class="container p-3 md-4" align="center">
  <div class="animated fadeIn"> 
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
        <center><strong class="fs-2">ค้นหาเว็บไซต์คณะ</strong> </center>
        </div>
        <div id="content">
            <form class="row" action="" method="POST" enctype="multipart/form-data">
                <div class="card-body card-block">
                <div class="row form-group">
                    <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="ค้นหา"
                            value="<?php if (isset($_POST['search'])) {echo $_POST['search'];} ?>" required/>
                        <button class="btn btn-outline-secondary" type="submit" name="submit" id="button-addon2" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg></button> 
                        <br>
                    </div>
                        <button class="btn btn-warning text-white mb-4" type="submit" name="submit">Search</button>
                        <a href="UXUI_index.php" class="btn btn-primary text-white mb-4">กลับหน้าแรก</a>
                    </div>
                    </div>
            </form>

                        <?php
                        include "database.php";
                        
                        if (isset($_POST['submit'])) {
                            $sql = "SELECT * FROM faculty WHERE name LIKE '".$_POST['search']."%'";
                            $query = mysqli_query($link,$sql);
                            $check_data = mysqli_num_rows($query);
                            if ($check_data == 0) {
                            echo '<p class="text-center py-4"><span class="badge bg-danger" style="font-size: 20px;">ไม่พบข้อมูล</span></p>';
                            }else{
                            ?>
                            <table class="table table-bordered mt-4">
                                <thead class="table-secondary">
                                <tr>
                                    <th scope="col">ชื่อคณะ</th>
                                    <th scope="col">เว็บไซต์</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($result = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                    <td><?php echo $result['name']; ?></td>
                                    <td><?php echo $result['url']; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <?php
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php mysqli_close($link);?>
</body>
</html>