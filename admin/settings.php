<?php
require('inc/essentials.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require('inc/link.php');?>

</head>
<body>
<?php require('inc/header.php');?>


<div class="container-fluid">
   <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4">SETTINGS</h3>
            <!-- General settings selection -->
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between mb-3">
                          <h5 class="card-title m-0">General Settings</h5>
                          <button class="btn btn-dark shadow-none " data-bs-toggle="modal" data-bs-target="#editModal">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>
                      </div>
                      <h6 class="card-subtitle mb-2 fw-bold">Site Title</h6>
                      <p class="card-text " id = "site_title"></p>
                      <h6 class="card-subtitle mb-2 fw-bold">About us</h6>
                      <p class="card-text " id = "site_about"></p>

              </div>
            </div>

            <!-- Shutdown selection -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                              <form >
                               <input class="form-check-input" type="checkbox"  onchange="upd_shutdown(this.value)" id = "shutdown-toggle">

                              </form>
                          </div>
                        </div>
                        <p class="card-text">
                          No customers will be allowed to book hote room when shutdown mode is turned on.
                        </p>
                    </div>
                </div>


            </div>

      </div>



    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form >
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">General Settings</h1>
        </div>
        <div class="modal-body">
              <div class="mb-3">
                <label  class="form-label "style="font-weight: 500;">Site Title</label>
                <input name="site_title" id="site_inp_title" class="form-control shadow-none" placeholder = "site title" />
            </div>
            <div class="mb-3">
                <label  class="form-label "style="font-weight: 500;">About Us</label>
                <textarea name="site_about" id="site_inp_about" class="form-control shadow-none" placeholder = "site title" rows="6"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary" data-bs-dismiss="modal" >Close</button>
          <button type="button" class="btn custom-bg text-white shadow-none" onclick = "upd_general(site_title.value, site_about.value)">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>

    <!-- script -->
  <?php require('inc/script.php');?>
  <script>
    let general_data;

    function get_general(){

     let site_title = document.getElementById('site_title');
     let site_about = document.getElementById('site_about');

     let site_inp_title = document.getElementById('site_inp_title');
     let site_inp_about = document.getElementById('site_inp_about');
     let shutdown_toggle = document.getElementById('shutdown-toggle');


     let xhr = new XMLHttpRequest();
     xhr.open("GET", "./ajax/setting_crud.php", true);
     xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

     xhr.onload = function(){
      let res_date = this.responseText;
      let res_top = (res_date.replace('setting', ''));
      general_data = JSON.parse(res_top)

      site_title.innerText = general_data.site_title;
      site_about.innerText = general_data.site_about;

      site_inp_title.value = general_data.site_title;
      site_inp_about.value = general_data.site_about;

      if(general_data.shutdown == 0){
        shutdown_toggle.checked = false;
        shutdown_toggle.value = 0;
      }else{
        shutdown_toggle.checked = true;
        shutdown_toggle.value = 1;
      }

     }
     xhr.send('get_general');

    }

    function upd_general(site_title_val, site_about_val){
     let xhr = new XMLHttpRequest();
     xhr.open("POST","ajax/setting_crud.php", true);
     xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

     xhr.onload = function(){
      let resp = this.responseText.match(/(\d+)$/);
      let respIndex = resp[0];

      let modal = bootstrap.Modal.getInstance('#editModal');
      modal.hide();


      if(respIndex == 1){
        alert('success', 'Changes saved!')
        get_general()

      }else{
      alert('error', 'No changes saved!')
      }
     }
     xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');

    }

    function upd_shutdown(val){
     let xhr = new XMLHttpRequest();
     xhr.open("POST","ajax/setting_crud.php", true);
     xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

     xhr.onload = function(){
      let resp = this.responseText.match(/(\d+)$/);
      let respIndex = resp[0];
      if(respIndex == 1 && general_data.shutdown == 0){
        alert('success', 'Site has been  shutdown!')

      }else{
        alert('success', ' Shutdown mode off!')
      }
      get_general()
     }
     xhr.send('upd_shutdown='+val);
    }

    window.onload = function(){
      get_general();
    }
  </script>




</body>
</html>