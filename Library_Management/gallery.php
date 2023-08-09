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
.gellery{
  width:80%;
  height: 350px;
  background: url('img/books.jpg');
  background-size: cover;
  border-radius: 1rem;
  margin: 4% auto;
  cursor: pointer;
  animation: nn 10s infinite;

}
@keyframes nn{
  0%{
    background: url('img/3.jpg');
  }
  30%{
    background: url('img/11.png');
  }
  50%{

    background: url('img/22.jpg');
  }
  70%{
    background: url('img/11.png');
  }
  90%{
    background: url('img/bck.webp');
  }
  100%{
    background: url('img/books.jpg');
  }


}

.gellery:hover{
  box-shadow: .1rem .2rem .1rem .1rem gray;
}
#ccov{
  width: 100%;
  height: 100%;
  border-radius: .2rem;
  text-align: center;
}
#ccov:hover{
  background: rgba(0,0,0,0.5);
}
#ccov label{
  font-size: 18px;
  font-family: sans-serif;
  margin: .3rem 0rem;
  border-bottom: .1rem solid blue;
  color: blue;
  cursor: pointer;
}
#ccov label:hover{
  transition: 1s;
  color: white;
}
#div1{
  width: 78%;
  height:100%;
  background:rgba(0,0,0,0.6);
  color: white;
  margin: 2% 9%;
  padding: .2rem 1rem;
  text-align: center;
  display:inline-block;
  cursor: pointer;
  border-radius: .2rem;
}
#div1 p{
  text-align: left;
  display: inline-block;
  font-family: sans-serif;
}
#div1 img{
  margin: .5rem 0rem;
  width: 49%;
  height: 100%;
  border-radius: .2rem;
}
#div1:hover{
  transition: .7s;
  color: white;
  box-shadow: .1rem .1rem .1rem .1rem;
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



            <p><a href="gallery.php" id ="hhm">GALLERY</a> <a href="about.php">CONTACT US</a><a href="faq.php">FAQ</a></p>


            
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


<div class="gellery">

<div id ="ccov">

  <label>GALLERY</label>
  
</div>

</div>

<br>

<div id="div1">
<p><img src="img/4.jpg">  <img src="img/6.jpg"></p>

 <p> It helps librarian to maintain the database of new books and the books that are borrowed by members along with their due dates.
This system completely automates all your library's activities.
A  library management system is used to maintain library records. It tracks the records of the number of books in the library, how many books are issued, or how many books have been returned or renewed or late fine charges, etc.
  </p>

</div>













        

    
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

</script>


            


        </div>
        
    </body>
</html>
