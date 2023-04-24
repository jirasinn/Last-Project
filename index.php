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
          <button type="button" class="btn btn-outline-secondary me-2">EN</button>
          <button type="button" class="btn btn-warning">Time</button>
<?php

          $date = new DateTime();
          echo $date->format(DateTime::RFC1123) . "\n";
          echo "Time in Bangkok\n";
          $date2 = new DateTime();
          $date2->setTimezone(new DateTimeZone('Asia/Bangkok'));
          echo $date2->format(DateTime::RFC1123) . "\n";
?>
        </div>
      </div>
    </div>
  </header>
<!-- End head -->

<div class="container-fluid pb-3">
    <br>
    <div class="d-grid gap-4" style="grid-template-columns: 1fr 2fr;">
      <div class="bg-body-tertiary border rounded-3">
        <br><br><br><br><br><br><br><br><br><br>
      </div>
      <div class="bg-body-tertiary border rounded-3">
        
        <br><br><br><br><br><br><br><br><br><br>
      </div>
    </div>
  </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>