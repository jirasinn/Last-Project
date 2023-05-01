$(document).ready(function () {
  var qrcode_obj = new QRCode(document.getElementById("image_qrcode"), "");

  // เช็ค event การคลิกปุ่ม
  $("#sign_in_button").on("click", () => {
    genQrcode();
  });

  $("#student_code").on("keyup", function (event) {
    var keycode = event.keyCode ? event.keyCode : event.which;
    if (keycode == "13") genQrcode();
  });

  function genQrcode() {
    var code = $("#student_code").val();
    $("#student_code").val("");
    qrcode_obj.clear(); // ล้างค่าเดิม
    qrcode_obj.makeCode(code); // สร้างจากข้อความใหม่ที่ส่งมา
    getMember(code);
  }

  function getMember(student_code) {
    // อ่านจาก API
    $.post("datas.json.php",{ code:student_code })
    .done((res) => {
      var obj = jQuery.parseJSON(res);
      $("#text_name").val(obj.student_name);
      $("#text_code").val(obj.student_code);
    });
  }
});
