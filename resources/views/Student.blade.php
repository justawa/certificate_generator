<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   {{-- <style>
       img{
          width: 100%;
          height: 100%;
       }
   </style> --}}
    <title>Certificate</title>
</head>
<body>
 {{-- <img src="image/certificate.jpg" alt="" srcset="">
 <h5> saurav Raj</h5> --}}
 <?php 


 ?>

<?php
if(isset($_POST['submit'])){

    header('content-type:image/jpeg');
    $font=realpath('Inkfree.ttf');
    $image=imagecreatefromjpeg("image\certificate.jpg");
    $color=imagecolorallocate($image,51,51,102);
    $name="saurav";
   //  $date=date('d F,Y');
    imagettftext($image,18,0,220,220,$color,$font,$name);
    imagejpeg($image,"folder/certificate.jpg");
    imagedestroy($image);
}
?>
<form action="post">

    <input type="submit" value="submit" name="submit">
</form>

</body>
</html>