<?php
require_once("database.php");
$datas["student_code"] = "";
$datas["student_name"] = "";

if (isset($_POST['code'])) {
    $code = $_POST['code'];
    $sql = "select * from students where s_id ='$code'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $datas["student_code"] = $row["s_id"];
            $datas["student_name"] = $row["fullname"];
        }
    }
}
echo json_encode($datas);
?>