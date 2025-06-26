<?php
require('../inc/essentials.php');
require('../config/db_config.php');
adminLogin();

if(!isset($_POST['get_general'])){
    $q = "SELECT * FROM `setting` WHERE `sr_no`=?";
    $values = [1];
    $res = select($q, $values,"i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo 'setting'. $json_data;
}

if(isset($_POST['upd_general'])){
  $frm_data = filteration($_POST);
  $q = "UPDATE `setting` SET `site_title`=?,`site_about`=? WHERE `sr_no`=?";
  $value = [$frm_data['site_title'], $frm_data['site_about'],1];
  $res = update($q, $value,'ssi');
  echo $res;

}


if(isset($_POST['upd_shutdown'])){
  $frm_data = ($_POST['upd_shutdown'] == 0) ? 1 : 0;
  $q = "UPDATE `setting` SET `shutdown`=? WHERE `sr_no`=?";
  $value = [$frm_data, 1];
  $res = update($q, $value,'ii');
  echo $res;

}
?>