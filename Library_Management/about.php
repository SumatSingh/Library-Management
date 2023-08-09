<?php 
session_start();
if(!isset($_SESSION['admin']))
{
header('location:admin.php');
}

if(isset($_POST['logout'])){
session_destroy();
echo '<script>alert("Logged Out Successfully !")</script>';
header('location:admin.php');
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
#mn{
width:20%;
height:100%;
background:rgba(0, 0,0,0.8);
position:fixed;
margin-top:0%;
display:none;
}
#cr{
background: none;
cursor: pointer;
border: none;
color: white;
float : right;
}
.r1{
text-align:center;
margin: 4% auto;
padding:.5rem;
background:none;
}
.r2{
text-align:center;
margin: 4% auto;
padding:.5rem;
background:none;
}
.r3{
text-align:center;
margin: 4% auto;
padding:.5rem;
background:none;
}

.r1 a{
text-decoration:none;
color:white;
}
.r2 a{
text-decoration:none;
color:white;
}
.r3 a{
text-decoration:none;
color:white;
}

#footer{
width:100%;
height:100%;
background:rgb(64,128,128);
margin-top: 15%;
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
  height: 300px;
  margin: -2% auto;
 background-image: url('img/bck.webp');
  background-size: cover;
}
#contact h3{
  color: white;
  font-family: Arial Unicode MS;
  font-size: 2rem;
  cursor: pointer;
  text-shadow: 1px 2px blue;
  animation: nnn 1s infinite;
}
@keyframes nnn{
  0%{

    transition: .7s;
    letter-spacing: .02rem;
  }

}
#contact p{
 color:#3366ff;
  font-family: Arial Unicode MS;
  font-size: 1.5rem;
  cursor: pointer;
}

#contact p:hover{
  transition: .7s;
  color:white;
}
#box_1{
  margin: 4% 15%;
  width: 70%;
  height: 70%;
  cursor: pointer;
  background:url('img/2.jpg');
  border-radius: .5rem;
  animation: ani 1s infinite;
}
@keyframes ani{
0%{
  box-shadow: .1rem 1rem 1rem .1rem gray;
}
}

#box_1 img{
  width: 50%;
  float: right;
  height: 100%;
}
#box_1 h4{
  padding: .2rem 1rem;
 font-family: sans-serif;
 font-size:1.3rem;
}
#box_1 li{
  margin: .2rem 1rem;
  list-style: none;
  font-family:Batang;
}
#box_1:hover{
font-family:arial;
box-shadow: .1rem .1rem 1rem .1rem gray;
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



            <p><a href="gallery.php">GALLERY</a> <a href="about.php" id ="hhm">CONTACT US</a><a href="faq.php">FAQ</a></p>


            
         </div>
        
        
        <div id ="mn">
            <button onclick =" Hide()" id ="cr"> X</button>
        <br>
            
            
            <div id="opt">
                
            <ul>
                
                <li><a href="index.php" class="home">Home</a></li>
                <li><a href="avlbook.php">AVL Books</a></li>
                <li><a href="issuebooks.php">Issue Books</a></li>
                <li><a href="checkIssue.php">Chk Issue Books</a></li>
                <li><a href="avlbook.php">Comming Books</a></li>
               
                <li>
                    <center>

                    <form method="post">
                    <button id ="lgb" name="logout">Logout</button></center></li>
                    </form>
                
            </ul>
            <br>

               <center> <p style="color: white;">V 1.0.1</p></center> 
                
            </div>


        </div>
        <br>


<div id ="contact">

<br>
<center><h3>Student Generate Library Card </h3>
  <p>&</p>
<p>Issue The Favorite Books</p>
</center>


<br>

<div id ="box_1">

  <img src="img/contact.png"> 
  <h4>Contact Us</h4>
  <li>Mr. Shiv Narayan Bunkar</li>
  <li>Mr. Falcon Sumat</li>
  <li>Mr. Bhupendra Ahirwar</li>

  
  <li><b> Email: </b> <a href="">rsmorena0123@gmail.com</a></li>
  <li>Contact : +91 8982443551</li>
  <li>Address: tussipura morena MP India(476001).</li>
  <br><br>
</div>



</div><br><br>












        

    
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
            <li><a href="">Address: tussipura morena<br> MP India(476001).</a></li>
           
            <li><a href="">Email: rsmorena0123@gmail.com</a></li>
        </ul>
        
    </div>
    
    
</div>
        

<script>
            
 function Show(){
   document.getElementById('mn').style.display="block";
   }

function Hide(){
   document.getElementById('mn').style.display="none";
}

</script>

        </div>
        
    </body>
</html>
