<?php
session_start();
$conn = mysqli_connect("localhost","root","","library_card");

if(isset($_POST['login'])){

    $rol = $_POST['opt'];
    $uis = $_POST['id'];
    $pass = $_POST['pass'];
    
    if($rol =="admin"){

         $sql = "SELECT * from admin where uname = '$uis' and password ='$pass'";
         $run_sql = $conn->query($sql);

         if(!$row  = mysqli_fetch_array($run_sql)){
            echo '<script>alert("Uname OR Password Is Invalid !")</script>';
         }
         else{
            echo '<script>alert("Logged In Successfully !")</script>';
            header('location:index.php');
            $_SESSION['admin'] = $uis;

         }
    }
    else{
        echo '<script>alert("Please select right option !")</script>';
    }
}
 ?>

<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
        <title>Library card generator</title>
        <style>
nav{
width:100%;
padding:.2rem 0rem;
background:#3366ff;
color:white;
cursor:pointer;

 }
 body{
    background: url('img/1.jpg');
    background-size: cover;
 }
*{
padding:0rem;
margin:0rem;
} 

.ad{
width:100%;
padding:0.5rem 0rem;
background:rgba(0, 0,0,0.3);

}
button{
padding:0rem .3rem;
margin:.1rem .5rem;
font-size:1rem;
}



#footer{
width:100%;
height:100px;
background:rgb(64,128,128);
margin-top: 10%;
padding:.5rem 0rem;
} 
#ro1{
margin:.2rem 3rem;
display:inline-block;
padding: .3rem 1rem;
font-size: 1.2rem;
}

#ro1 a{
text-decoration:none;
color:rgb(255,128,64);
font-size: 15px;
}
ul li{
list-style:none;
}
#opt{
margin-top: 20%;
}

#opt li{
    width: 100%;
    background: black;
    color: white;
    margin: .4rem 0rem;
    padding: .5rem 0rem;
}
#opt a{
    margin: .4rem 1rem;
    padding: .2rem 1rem;
    text-decoration: none;
    color:rgb(0, 255, 255);
    font-family: sans-serif;
}
#opt a:hover{
    color: black;
    background: white;
}

#ro1 a:hover{
    transition: .6s;
    color: white;
}

#lgb{
    width:50%; 
    background: none;
    color:rgb(0, 255, 255);
    border: none;
    cursor: pointer;
    
}
#lgb:hover{
  background: white;
  color: black;
}
span{
    cursor: pointer;
    width: 15px;
    height: 3px;
    padding: .5px 1px;
    margin: 2px 1rem;
    background: #3366ff;
    display: flex;
}
.cover{
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
}
.home{
    background: white;
    color: black;
}
.ad p{
    float: right;
    margin-top: -20px;
    margin-right:20px;
}
.ad p a{
    margin: 0px 10px;
    color: white;
    text-decoration: none;
}
.ad a:hover{
    color: black;
    background:orange;
    border-radius: 3px;
    padding: 2px 5px ;
}
#hhm{
    color: black;
    background:orange;
    border-radius: 3px;
    padding: 2px 5px ;
}
#contact{
  width: 100%;
  height: 400px;
  margin: -2% auto;
  background-image: url('img/aa.jpg');
  background-size: cover;
  animation: ani 10s infinite;
}
@keyframes ani{
  0%{
    background-image: url('img/aa.jpg');
  }
  50%{
    background-image: url('img/z.jpg');
  }
  100%{
    background-image: url('img/qq.jpg');
  }
}
#cover1{
  width: 100%;
  height:100%;
  border-radius: 0rem 50rem 0rem 50rem;
  background: #1B98E059;
}
#cover1 h3{
  color: white;
  cursor: pointer;
  font-family: sans-serif;
  font-size: 1.5rem;
  text-shadow: 1px 2px gray;
}
#cover1 h3:hover{
    color: #3366ff;
    text-shadow: 1px 2px gray;
}
#login_bx{
    width: 40%;
    height: 250px;
    background: url('img/aa.jpg');
    background-size: cover;
    margin: -8% auto;
    padding: .4rem 1rem;
}
#login_bx form{
    margin: .3rem 1rem;
    font-size: 1.2rem;
    color: black;
    font-weight: bold;
    cursor: pointer;
}
form input,select{
    padding: .2rem .5rem;
    cursor: pointer;
}
form p{
    margin: .3rem 0rem;
    color: white;
}
#btn_s{
    background: #3366ff;
    color: white;
    border:none;
    cursor: pointer;
}


    </style>
    </head>
    <body>
       
        <div class ="cover">

            <nav>
            <center><h2>Student Library Card</h2></center>
        </nav>
        <br>
        <br>
       
            <hr>
         <div class="ad">
             
             
              <span onclick = "Show()"></span>
              <span onclick = "Show()"></span>
              <span onclick = "Show()"></span>



            <p><a href="">GALLERY</a> <a href="">CONTACT US</a><a href="">FAQ</a></p>


            
         </div>
        
        
        
        <br>


<div id ="contact">

<div id="cover1">

<br>
<center><h3>Administrator Login Here</h3></center>
</div>

</div>
</div>

<div id ="login_bx">
    <div id="cover1">
  <center><h3>Admin login</h3></center>
  <br>

  <form method="post">
      
    <p>Login As
        <select name="opt">
            <option value="admin">Admin</option>
            <option value="owner">Owner</option>
        </select>
    </p>
    <br>

    <p>Owner/Admin Id: <br><input type="text" name="id" placeholder="Enter Your Id......."></p>
    <p>Owner/Admin Password:<br> <input type="password" name="pass" placeholder="Enter Your password......."></p>

    <p><input type="submit" name="login" value="Login" id="btn_s"></p>

  </form>


</div>


</div>
<br><br><br><br>


  
    
<div id ="footer">

   
    <div id ="ro1">
        <ul>
            <li><b>Links</b></li>
            <li><a href="">FAQ</a></li>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
        </ul>
        
    </div>
    
    <div id ="ro1">
        <ul>
            <li><b>Services</b></li>
            <li><a href="">Flight mng</a></li>
            <li><a href="">Hotel mng</a></li>
            <li><a href="">Web-dev</a></li>
        </ul>
        
    </div>
    
    <div id ="ro1">
        <ul>
            <li><b>Social</b></li>
            <li><a href="">Facebook f+</a></li>
            <li><a href="">Twitter T+</a></li>
            <li><a href="">Instagram</a></li>
        </ul>
        
    </div>

    <div id ="ro1">
        <ul>
            <li><b>Contact</b></li>
            <li><a href="">Address: tussipura morena<br>  MP (476001)</a></li>
           
            <li><a href="">Email: rsmorena0123@gmail.com</a></li>
        </ul>
        
    </div>
    
    
</div>
        

<script>
            
 function Show(){
   alert("Required Login As Administrator")
   }
</script>

        </div>
        
    </body>
</html>
