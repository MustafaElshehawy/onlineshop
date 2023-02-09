<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = mysqli_real_escape_string($con, md5($_POST['password']));

   $select = mysqli_query($con, "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:shop.php');
   }else{
      $message[] = 'incorrect password or email!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login |تسجيل الدخول</title>
   <link rel="stylesheet" href="css/login.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
<center>
   <div class="form-container">
      <form action="" method="post">
         <h3>تسجيل الدخول</h3>
         <input type="email" name="email" required placeholder="البريد الالكتروني" class="box">
         <br>
         <input type="password" name="password" required placeholder="كلمة المرور" class="box">
         <br>
         <input type="submit" name="submit" class="btn" value="تسجيل الدخول">
         <br>
         <p>هل تملك حساب بالفعل؟ <a href="register.php"> حساب جديد</a></p>
         <br><br>
      </form>
   </div>
</center>  
</body>
</html>