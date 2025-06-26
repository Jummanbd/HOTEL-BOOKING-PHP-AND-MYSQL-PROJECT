<?php
  require('config/db_config.php');
  require('inc/essentials.php');


session_start();
if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'])){
  redirect('dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('inc/link.php');?>

</head>
<body class=" bg-light">

  <div class="login-form text-center rounded bg-white shadow overflow-hidden">
    <form method="POST">
        <h4 class=" mb-3 text-center py-3 text-white bg-dark">ADMIN LOGIN PANEL</h4>
        <div class="p-4">
           <div class=" mb-3">
             <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder= "Admin Name">
           </div>

           <div class=" mb-3">
             <input name="admin_passw" required type="text" class="form-control shadow-none text-center" placeholder ="Password">
           </div>
           <button name="login" type="submit" class="btn w-100 text-white bg-success shadow-none">Login</button>
        </div>
    </form>
  </div>

  <?php
   if(isset($_POST['login'])){
     $frm_data = filteration($_POST);

     $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
     $values = [$frm_data['admin_name'], $frm_data['admin_passw']];
     $res = select($query, $values, "ss");
     if($res->num_rows == 1){
      $row =  mysqli_fetch_assoc($res);
      $_SESSION['adminLogin'] = true;
      $_SESSION['adminId'] = $row['sr_no'];
      redirect('dashboard.php');

     }else{
      alert('error', 'Login failed - Invalid Credentials!');
     }
   }
  ?>
<?php require('inc/script.php');?>
</body>
</html>