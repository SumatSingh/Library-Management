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
  background: #1B98E059;
}
#cover1 h3{
  color: white;
  font-family: sans-serif;
  font-size: 1.5rem;
}
#ask_box{
  width: 35%;
  height: 100%;
  background: white;
  margin: -8% auto;
}
#ask_box h4{
  text-align: center;
  font-family:  Times New Roman, Times, serif;
  background: #00FEFE;
  padding: .4rem 0rem;
}
#ask_box p{
  padding: .2rem 1rem;
  box-shadow: .1rem .1rem .1rem .1rem gray;
  cursor: pointer;
  font-family: arial;
  font-size: 1.2rem;
  color: #3366ff;
}
.more{
  float: right;
  border:none;
  background: none;
  font-size: 1.3rem;
  cursor: pointer;
}
#more{
  width: 100%;
  height: 100%;
  padding: .4rem .2rem;
  display: none;
}
#more2{
  width: 100%;
  height: 100%;
  padding: .4rem .2rem;
  display: none;

}
#mm{
  display: none;
}
#mm1{
  display: none;
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



            <p><a href="gallery.php">GALLERY</a> <a href="about.php">CONTACT US</a><a href="faq.php" id ="hhm">FAQ</a></p>


            
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

<div id="cover1">

<br>
<center><h3>Frequently Asked Question</h3></center>
</div>

</div>
<div id ="ask_box">
  <h4>FAQs</h4>
  <br>

  <p><b>Know More</b>   <button id="pp" class ="more" onclick="About()" >+</button> <button id="mm" class ="more" onclick="Less()" >-</button>
    <div id ="more">
     <b><i> A library management system is software that is designed to manage all the functions of a library. It helps librarian to maintain the database of new books.</i>
     
    </div>
  </p>


  <p>Student Help   <button id="pp1" class ="more" onclick="About1()" >+</button> <button id="mm1" class ="more" onclick="Less1()" >-</button></p>
    <div id ="more2">
     <center>
      <b><i>Contact no. 1993 2782<br>
     Mobile no. +91 9997864435<br>
     Email : igeclibrarystudent.com</i></b>
     </center>
    </div>
  
<br>

  
</div>


<br><br>
        

    
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
            <li><a href="">Address: Badshahhh Nagod<br> Satna MP India</a></li>
           
            <li><a href="">Email:badshah@gmail.com</a></li>
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


 function About(){
   document.getElementById('more').style.display="block";
   document.getElementById('pp').style.display="none";
   document.getElementById('mm').style.display="block";

   }
  function Less(){
   document.getElementById('more').style.display="none";
   document.getElementById('pp').style.display="block";
   document.getElementById('mm').style.display="none";

   } 
    function About1(){
   document.getElementById('more2').style.display="block";
   document.getElementById('pp1').style.display="none";
   document.getElementById('mm1').style.display="block";

   }
   function Less1(){
   document.getElementById('more2').style.display="none";
   document.getElementById('pp1').style.display="block";
   document.getElementById('mm1').style.display="none";

   } 



</script>

        </div>
        
    </body>
</html>
