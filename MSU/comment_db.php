<?php
   include "database.php"; 

   if(isset($_POST['Submit'])){
     include_once("database.php");
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $comment = $_POST['comment'];
   
     $sql = "insert into comments (name,email,phone,comment) 
     VALUES ('$name','$email','$phone','$comment')";
      
     if (mysqli_query($link, $sql)) {
          //echo "เพิ่มข้อมูลสำเร็จ";
          $alert = '<script type="text/javascript">';
          $alert .= 'alert("เพิ่มข้อมูลสำเร็จ");';
          $alert .= 'window.location.href = "UXUI_index.php";';
          $alert .= '</script>';
          echo $alert;
          exit();
      } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
      }

      mysqli_close($link);
  }
?>