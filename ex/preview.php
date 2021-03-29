<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_FILES["file"]["name"];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $extension_arr = array("jpg", "jpeg", "png");

    if(in_array($imageFileType, $extension_arr)) {
      $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
      $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

      echo $image;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form id="form1" method="post" action="" enctype='multipart/form-data'>
    <input name="file" type="file" onchange="readURL(this);" />
    <img id="blah" src="#" alt="your image"/>
    <button type="submit">submit</button>
  </form>
</body>
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
    //   const reader = new FileReader();

    //   reader.onload = function (e) {
    //     document.getElementById("blah").setAttribute("src", e.target.result)
    //   }

    //   reader.readAsDataURL(input.files[0])
    // }
  }
</script>
</html>