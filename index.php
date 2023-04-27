<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Last project</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- head -->
    <header class="p-3 text-bg-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <img href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Mahasarakham_University_Emblem.png/800px-Mahasarakham_University_Emblem.png"  width="55" height="72">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">ระบบใช้บริการห้องบริการคอมพิวเตอร์ สำนักคอมพิวเตอร์ มหาวิทยาลัยมหาสารคาม</a></li>
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
<section class="py-8 bg-light-gradient border-top border-info border-5">
        <div class="bg-holder overlay overlay-light" style="background-image:url(../p/public/assets/img/gallery/header-bg.png);background-size:cover;">
        </div>

       


<!-- กรอบซ้าย -->
<div class="container-fluid pb-3">
    <br>
    <div class="d-grid gap-4" style="grid-template-columns: 1fr 2fr;">
      <div class="bg-body-tertiary border rounded-3">
      <br>
<!--  -->

<!--  -->

<!-- input id -->

<div class="user-input-section">
  <section class="heading">
    <div class="title">ลงชื่อเข้าใช้งาน</div>
    <div class="sub-title">กรอกรหัสนิสิต</div>
  </section>
  <section class="user-input">
    <input type="text" placeholder="Type something..." name="input_text" id="input_text" autocomplete="off">
    <button class="button" type="submit">Generate<i class="fa-solid fa-rotate"></i></button>
  </section>
</div>
<div class="container">
<div class="qr-code-container">
  <div class="qr-code" style></div>
</div>
 </div>
<!-- End input -->

  <!-- <div class="container" style="width: 25rem;">
  <div class="card">
  <img src="https://play-lh.googleusercontent.com/gfXcCyd98v83B3_OAr77S3EwsIGg8LyCYLuItRXhyi3SCHEeQg0kfL4M9uuksPL_rD8" class="card-img-top " alt="...">
  <div class="card-body">
    <p class="btn btn-danger fw-bold fs-2 fs-lg-4 lh-sm mb-2 text-center ">แสกนเข้าใช้งานที่นี่ !</p>
  </div>
  </div>
</div> -->

        <br><br><br><br><br><br><br><br><br><br>
      </div>
<!-- กรอบซ้ายจบ -->





<?php
require_once("database.php");
  $sql = "select * from students where s_id='".@$_GET['s_id']."' ";
	$rs = mysqli_query($conn, $sql) ;
	$data = mysqli_fetch_array($rs, MYSQLI_BOTH);
	@$id = $_GET['id'] ;
	
	if(isset($_GET['s_id'])) {
		$_SESSION['st_id'][$id] = $data['s_id'];
    $_SESSION['sc_id'][$id] = $data['c_id'];
		$_SESSION['st_name'][$id] = $data['s_name'];

	}

  ?>


<!-- กรอบขวา -->
      <div class="bg-body-tertiary border rounded-3">
      <br>  
      <!--  -->
      <form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
    	<label  class="form-label">รายชื่อนิสิต</label>
        <show class="form-control" type="text" placeholder="รายชื่อนิสิต" name="student_name" value="<?=$data['st_id']?>">
        
        <?php
// 	include("database.php");
 
//  $sql="SELECT * FROM students ORDER BY students.`s_id` ASC";
//  $rs= mysqli_query($conn,$sql);
 
//  while($data = mysqli_fetch_array($rs)){
// 	 $y = substr ($data['s_id'],0,2);
// 	 echo"<img src='http://202.28.32.211./picture/student/{$y}/{$data['s_id']}.jpg'width='100'> <br>";
// 	 echo"รหัสนิสิต:{$data['s_id']}<br>";
//    echo"บัตรประชาชน:{$data['c_id']}<br>";
// 	 echo"ชื่อ-สกุล:{$data['fullname']}<br>";


//  }
?>
    </div>
    </form>
      <!--  -->

<!--  -->
<?php
// if(!empty($_SESSION['st_id'])) 
//   foreach($_SESSION['st_id'] as $sid)
  ?>
    <!-- <tr>
      <th scope="row"><?=$i;?></th>
      <td><img src="http://202.28.32.211./picture/student/<?=$_SESSION['st_id'][$sid];?>" width="120"></td>
      <td><?=$_SESSION['st_id'][$sid];?></td>
      <td><?=$_SESSION['sc_id'][$sid];?></td>
      <td><?=$_SESSION['st_name'][$sid];?></td>
    </tr> -->

        <br><br><br><br><br><br><br><br><br><br>
      </div>
    </div>
  </div>
<!-- กรอบขวาจบ -->
<section class="py-8 bg-light-gradient border-bottom border-info border-5">
        <div class="bg-holder overlay overlay-light" style="background-image:url(../p/public/assets/img/gallery/header-bg.png);background-size:cover;">
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
        <script src="script.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>