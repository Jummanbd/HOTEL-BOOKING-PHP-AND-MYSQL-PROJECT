<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 <!-- bootstrap  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // alert
  function alert(type, msg){
      let bg_class =  (type == "success") ? "alert-success" : "alert-danger";
      let element =  document.createElement("div");
      element.innerHTML = `
      <div class="alert ${bg_class} alert-dismissible fade show custom-alert" role="alert">
          <strong class ="me-3">${msg}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`;

       document.body.append(element);


    }
</script>