<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    {{-- <style>
        @media print{
            body *{
                visibility: hidden;
            }
            .print {
                visibility: visible;
            }
            .print{
                position: absolute;
                left: 0px;
                top: 0px;
            }
        }
    </style> --}}
    <title>Document</title>
</head>
<body id="body">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <h1>Print Screen
    </h1>

    <div id="data">
       <img src="image/certificate.jpg" alt="" srcset="">
       <img src="image/certificate.jpg" alt="" srcset="">
       <img src="image/certificate.jpg" alt="" srcset="">
       <img src="image/certificate.jpg" alt="" srcset="">
       <img src="image/certificate.jpg" alt="" srcset="">
       <img src="image/certificate.jpg" alt="" srcset="">
       <img src="image/certificate.jpg" alt="" srcset="">
</div>

<div>
    <?php
    $im = imagecreatefromjpeg('image/certificate.jpg');
  
// View the loaded image in browser using imagejpeg() function
header('content-type: image/jpeg');  
imagejpeg($im ); 
imagedestroy($im);
?>

</div>

    <button onclick="raj()" > PrintImage</button>

    <script type="text/javascript">
        function raj()
        {
            var body=document.getElementById('body').innerHTML;
            var data=document.getElementById('data').innerHTML;
            document.getElementById('body').innerHTML= data;
            window.print();
            document. getElementById('body').innerHTML=body;
        
        }
        </script>
    
</body>

</html>