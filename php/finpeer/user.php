<?php
session_start();
function get_safe_value($con,$str){
   if($str!=''){
      $str=trim($str);
      return mysqli_real_escape_string($con,$str);
   }
}
$con=mysqli_connect("localhost","root","","finpeer");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/finpeer/');
define('SITE_PATH','http://127.0.0.1/php/finpeer/');

if(isset($_POST['submit'])){
   $username='';
   $password='';
   unset($_SESSION['ADMIN_USERNAME']);
   unset($_SESSION['ADMIN_LOGIN']);
}

if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:login.php');
	die();
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <div class="login-content">
               <div class="login-form mt-150">
                    <form method="post" action="login.php">
                     <div class="form-group">
                        <label>Username</label>
                        <h1>Welcome <?php echo $_SESSION['ADMIN_USERNAME']?></h1>
                     </div>
                     <div class="form-group">
                        <label for="json_file">JSON FILE Input</label><br>
                        <input type="file" name="json_file">
                     </div>
                     <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Back</button>
               </form>
               </div>
            </div>
         </body>
         </html>