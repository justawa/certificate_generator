
           
           @foreach ($user as $item)
            <?php
         header('content-type:image/jpeg');
         $font=realpath('Inkfree.ttf');
         $image=imagecreatefromjpeg("image\certificate.jpg");
         $color=imagecolorallocate($image,51,51,102);
         $name=$item->name;
         $course="Completed Web Development Program";
         //  $date=date('d F,Y');
         imagettftext($image,20,0,340,220,$color,$font,$name);
         imagettftext($image,20,0,180,300,$color,$font,$course);
         imagejpeg($image,"folder/$name-certificate.jpg");
         imagedestroy($image);
        
         ?> 
            
               
     @endforeach