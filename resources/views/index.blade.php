<Html>  
    <head>   
       <style>
           body{
                background: lemonchiffon;
           }
           h1{
               text-align: center;
               color: green;
               text-decoration: underline;
           }
           label{
               margin: 12px 14px;
               color: green;
               font-size: 20px;
              font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           }
           input{
               min-width: 60px;
               max-width: 160px;
               padding:4px 19px 4px; 
           }
           cc{
               color: red;
           }
       </style>
    <title>Registration|Page</title>  
    </head>  

    <body>  
        <?public_path()
            if(isset($_POST['SUBMIT'])){
                echo "Data Saved Successfully";
            }
        ?>
    <br>  
    <br>  
        <h1>Registration Page</h1>
    <form action="index" method="POST">  
        @csrf
      
    <label> Firstname: <cc>*</cc> </label>  <br>  <br>      
    <input type="text" name="name" placeholder="Enter First Name" size="15" required/> <br> <br>  
    
    <label> Lastname : </label>  <br>  <br>     
    <input type="text" name="lastname" placeholder="Enter LastName" size="15"/> <br> <br>  

   <label> Email: <cc>*</cc>  </label><br> <br>
    <input type="email" id="email" placeholder="Enter Your E-mail" name="email"  required/> <br><br> 

    <label> Phone : </label>  <br> <br>
    <input type="text" name="ccode" placeholder="eg +91" size="4"/>   
    <input type="text" name="phone" placeholder="Enter Phone "size="10"/> <br> <br>  
    <label> Address:  </label><br> <br>
    <br>  
    <textarea cols="80" rows="5"  name="address" value="address">  
    </textarea>  
    <br> <br>  
      
    <label> Username: <cc>*</cc> </label> <br> <br>
    <input type="text" id="pass"placeholder="Enter UserName" name="username" required> <br>   
    <br> <br>  
    <label>Password: <cc>*</cc> </label> <br> <br>
    <input type="Password" id="password" placeholder="Enter Password" name="password" required> <br> <br>  
    <button type="submit" name="submit" value="submit">Save</button> 
    <button > <a href="/show">Check All Data </a></button> 
    </form>  
    </body>  
    </html>  
    