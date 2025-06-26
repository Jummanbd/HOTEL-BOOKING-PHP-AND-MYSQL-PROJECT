<?php
// adminLogin
function adminLogin(){
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'])){
        echo "<script>
     window.location.href='index.php';
    </script>";
    }
   session_regenerate_id(true);

}
//redirect
function redirect($url){
    echo "<script>
     window.location.href='$url';
    </script>";
}
// alert
 function alert($type, $msg){
    $bg_class =  ($type == "success") ? "alert-success" : "alert-danger";
    echo <<<alert
        `<div class="alert $bg_class alert-dismissible fade show custom-alert" role="alert">
            <strong class ="me-3">$msg</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>`
    alert;
 }
?>