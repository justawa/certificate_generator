<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
    <style>
        h2{
            text-align: center;
            color: #4caf50;
            text-decoration: underline;
        }
        #raj{
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;

        }
        #raj td,#raj th{
            border: 1px solid #ddd;
            padding: 8px;
        }
        #raj tr:nth-child(even){
            background-color: #0bfdfd;
        }
        #raj th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4caf50;
            color:#fff;
        }
        button{
            float: right;
            margin: 5px;
            padding-top: 5px;
        }
        input{
            float: right;
            margin: 5px;
            padding-top: 5px;
        }
       .photo{
           height: 100%;
           width: 100%;
       }
    </style>
    <title>Show|Table</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <h2>User's Data</h2>
    <table id="raj">
        <thead>
            <tr>
                <th>First Name </th>
                <th>Last Name </th>
                <th>Email </th>
                <th>Country Code </th>
                <th> Phone </th>
                <th> Address </th>
                <th> UserName </th>
                {{-- <th> Password </th> --}}
            </tr>
        </thead>
      
       <tbody>
           @foreach ($user as $item)
           <tr>
           
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
        
               <td>{{$item->name }}</td>
               <td>{{$item->lastname}}</td>
               <td>{{$item->email }}</td>
               <td>{{$item->ccode }}</td>
               <td>{{$item->phone }}</td>
               <td>{{$item->address }}</td>
               <td>{{$item->username }}</td>
               {{-- <td>{{$item->password }}</td> --}}
           </tr>
               
           @endforeach
       </tbody>
    </table>

    {{-- <button> <a href="/generate">Generate-Certificate</a></button> --}}
    <button> <a href="/download-pdf">Download-PDF</a></button>
    <button> <a href="/index.php">Add Members</a></button>
    <button onclick="window.print()" >Print</button>
</body>
</html>