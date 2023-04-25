<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Last project</title>
</head>
<body>
    
    <!-- head -->
    <header class="p-3 text-bg-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <img href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Mahasarakham_University_Emblem.png/800px-Mahasarakham_University_Emblem.png"  width="55" height="72">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-dark">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-dark">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-dark">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-dark">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-secondary" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-secondary ">EN</button>
          <button type="button" class="btn btn-outline-secondary ">TH</button>
          <button type="button" class="btn btn-warning">Time</button>

<!-- Date time -->
<div id="local_time" class="btn btn-outline-secondary ">&nbsp;</div>
 
<?php
    $current_local_time = date("Y")."/".date("m")."/".date("d")." ".date("H:i:s");
?>
 
 <script language="JavaScript1.2">
<!--
function local_date(now_time) {
    current_local_time = new Date();
 
    local_time.innerHTML = current_local_time.getDate() + "/" + (current_local_time.getMonth()+1) + "/" + current_local_time.getFullYear() + " " + current_local_time.getHours() + ":" + current_local_time.getMinutes() + ":" +current_local_time.getSeconds();
 
    setTimeout("local_date()",1000);
}
 
setTimeout("local_date()",1000);
//-->
</script>
<!-- End Date time -->

        </div>
      </div>
    </div>
  </header>
<!-- End head -->

<!-- กรอบซ้าย -->
<div class="container-fluid pb-3">
    <br>
    <div class="d-grid gap-4" style="grid-template-columns: 1fr 2fr;">
      <div class="bg-body-tertiary border rounded-3">

  <div class="card" style="width: 18rem;">
  <img src="https://play-lh.googleusercontent.com/gfXcCyd98v83B3_OAr77S3EwsIGg8LyCYLuItRXhyi3SCHEeQg0kfL4M9uuksPL_rD8" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Scan Here</p>
  </div>
</div>

        <br><br><br><br><br><br><br><br><br><br>
      </div>
<!-- กรอบซ้ายจบ -->
<!-- กรอบขวา -->
      <div class="bg-body-tertiary border rounded-3">  
        <br><br><br><br><br><br><br><br><br><br>
      </div>
    </div>
  </div>
<!-- กรอบขวาจบ -->

    <script src="js/bootstrap.min.js"></script>
</body>
</html>