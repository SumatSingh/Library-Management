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



#footer{
width:100%;
height:100%;
background:#467748;
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
color:gray;
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
    color: blue;
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
    background: none;
    color: white;
    border: none;
    cursor: pointer;
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
#tbl{
    width: 100%;
    height: 100%;
    padding: 1rem 0rem;
    margin: -1% auto;
}
#er{
    width:100%;
    height: 100%;
    background: darkcyan;
    padding: 1rem 0rem;
    color: whitesmoke;
}

table td,th{
    text-align: center;
    width: 10%;
    margin: .2rem 1rem;
}
#er input{
    transition: 1s;
    cursor: pointer;
    padding: .3rem 1rem;
    border-radius: .2rem;
}
#er button{
    border: none;
    background: white;
    padding: .3rem;
    width: 50%;
    cursor: pointer;
    border-radius: .2rem;
}
#er button:hover{
    transition: .7s;
    background: #556677;
    color: white;
}
#tbl2{
   width: 70%;
   height: 100%;
    margin: 1% auto;
}
th{padding: .3rem 1rem;
    background:white;
    border-radius: .2rem;
}
#tbl2 td{
    color: white;
    padding: 2rem 0rem;
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
        <center><h3 style="color: lightgreen;">Available Books</h3></center>
            <hr>
            
         <div class="ad">
             
             
              <span onclick = "Show()"></span>
              <span onclick = "Show()"></span>
              <span onclick = "Show()"></span>



            
         </div>
        
        
        <div id ="mn">
            <button onclick =" Hide()" id ="cr"> X</button>
        <br>
            
            
            <div id="opt">
                
            <ul>
                
                <li><a href="index.php">Home</a></li>
                <li><a href="avlbook.php" class="home">AVL Books</a></li>
                <li><a href="issuebooks.php">Issue Books</a></li>
                <li><a href="checkIssue.php">Chk Issue Books</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="about.php">Contact us</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li>
                    <center>

                    <form method="post">
                    <button id ="lgb" name="logout">Logout</button></center></li>
                    </form>
            </ul>
                
            </ul>
            <br>

               <center> <p style="color: white;">V 1.0.1</p></center> 
                
            </div>


        </div>
        <br>



        <div id = "tbl">

            <div id ="er">
            
               <form method="post">

                <table>
                    <tr>
                        <td>
                            <b>Enter The Book Name</b>
                        </td>

                        <td>
                            <input type="text" name="book_n" placeholder="Enter the book name.....">
                        </td>
                        <td><button name="srch">Search</button></td>
                    </tr>

                </table>
               </form>
            </div>

            <br>


            <div id ="tbl2">
               
               <table border="1">
                   
                   

                   <?php 

                   $conn = mysqli_connect("localhost","root","","library_card");

                   if(isset($_POST['srch'])){

                       $name = $_POST['book_n'];

                       $ss = "SELECT * from books where bk_name = '$name' or sort_name = '$name'";
                       $run = $conn->query($ss);

                       if(!$row = mysqli_fetch_array($run)){
                              
                              $ss_b = "SELECT * from new_book where book_name = '$name'";
                              $run_ss_b = $conn->query($ss_b);
                              if($rr = mysqli_fetch_array($run_ss_b)){

                                 ?>

                            <tr>
                                 <th>Book Name</th>
                                 <th>Book Auther Name</th>
                                 <th>Status</th>
                                 <th>Date</th>
                             </tr>



                              <tr>
                                <td> <?php echo $rr[0];?></td>
                                <td><?php echo $rr[2];?></td>
                                <td><?php echo $rr[3];?></td>
                                <td><?php echo $rr[4];?></td>
                    
                              </tr>

                                 <?php
                              }
                              else{
                                        echo "<script>alert('Book Is Not Available in Library')</script>";
                              }
                       }
                       
                        else{
                        
                        ?>
                        <tr>
                          <th>Book Name</th>
                          <th>Book Auther Name</th>
                          <th>Total AVL Books</th>
                        </tr>
                        <tr>
                            <td> <?php echo $row[0];?></td>
                            <td><?php echo $row[2];?></td>
                            <td><?php echo $row[3];?></td>
                    
                        </tr>
                       <?php

                       }
                       
                   }
                   ?>
                   
               </table>


            </div>
        </div>    

<br>
<br>
<br>
<br>
<br>
    
<div id ="footer">

   
    <div id ="ro1">
        <ul>
            <li>Links</li>
            <li><a href="">FAQ</a></li>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
        </ul>
        
    </div>
    
    <div id ="ro1">
        <ul>
            <li>Services</li>
            <li><a href="">Flight mng</a></li>
            <li><a href="">Hotel mng</a></li>
            <li><a href="">Web-dev</a></li>
        </ul>
        
    </div>
    
    <div id ="ro1">
        <ul>
            <li>Social </li>
            <li><a href="">Facebook f+</a></li>
            <li><a href="">Twitter T+</a></li>
            <li><a href="">Instagram</a></li>
        </ul>
        
    </div>

    <div id ="ro1">
        <ul>
            <li>Contact </li>
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
