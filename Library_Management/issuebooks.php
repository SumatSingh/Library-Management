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
margin-top: 10% auto;
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
    padding: .2rem 0rem;
    color: whitesmoke;
}

table td,th{
    text-align: center;
    width: 10%;
    margin: .2rem 1rem;

}
table th{
   
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
    color: whitesmoke;
    border-radius: .2rem;
     background: #779455;
}
#data table td{ 
    border: .1rem solid #779455;
    font-weight: bolder;
    padding: 1rem 0rem;
}
#data{

    width: 100%;
    height: 100%;
    background: white;
    margin: 1% auto;

}
#data1{
    width: 20%;
    height: 100%;
    margin: 5% auto;
}
#data1 button{
    padding: .3rem 1rem;
    border: none;
    background: #3355dd;
    cursor: pointer;
    color: white;
    border-radius: .2rem;
}
#data input{
    cursor: pointer;
    height: 1.2rem;
    padding: .2rem 1rem;
}

#iin{
    text-align: center;
    border: none;
    background: none;
    font-size: 14px;
    font-weight: bolder;
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
        <center><h2 style="color: rgb(0,255,64);">Issue Books</h2></center>
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
                <li><a href="avlbook.php">AVL Books</a></li>
                <li><a href="issuebooks.php" class="home">Issue Books</a></li>
                <li><a href="checkIssue.php">Chk Issue Books</a></li>
                <li><a href="avlbook.php">Comming Books</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="about.php">Contact us</a></li>
                <li><a href="faq.php">FAQ</a></li>
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



        <div id = "tbl">

            <div id ="er">
            
               <form method="post">

                <table>
                    <tr>
                        <td>
                            <b>Enter The Roll Number:</b>
                        </td>

                        <td>
                            <input type="text" name="rln" placeholder="Enter the Roll Number.....">
                        </td>
                        <td><button name="srch">Get Data</button></td>
                    </tr>

                </table>
               </form>
            </div>

            <br>

        </div> 






<div id ="data">

        <?php 
         error_reporting(0);
        $conn  = mysqli_connect("localhost","root","","library_card");

        if(isset($_POST['srch'])){

            $rln = $_POST['rln'];


            $squ = "SELECT * from cards where Roll_n = '$rln'";
            $sq_run = $conn->query($squ);
            if(!$row = mysqli_fetch_array($sq_run)){

                echo "<script>alert('Card is not Found please generate card !')</script>";
            }
            
        }
        ?>

          <form method="post">
       <table>
        
        <tr>
            <th>Name</th>
            <th>Roll Number</th>
            <th>Card Number</th>
        </tr>

        <tr>
            <td><input type="text" id="iin" value="<?php echo $row[3];?>" name="nameof" placeholder="name of student" readonly required></td>
            <td><input type="text" id="iin" value="<?php echo $row[1];?>" name="rollof" placeholder="Roll number of student" readonly required></td>
            <td><input type="text" id="iin" value="<?php echo $row[0];?>" name="cardof" placeholder="Card Number" readonly required></td>
        </tr>
        
    </table>
</div> 
<br>
<div id ="data">
 <table>
        <tr>
            <th>Book Number</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Issue Date</th>
        </tr>
      
        <tr>
            <td><input type="text" name="booknum" placeholder="Book Unique Number" required></td>
            <td><input type="text" name="bookname" placeholder="Book name..." required></td>
            <td><input type="text" name="author" placeholder="Book Author...."required></td>
            <td><input type="date" name="date" required></td>
        </tr>  
    </table>
    
   
</div> 
 <div id ="data1">
<button onclick="Disp()" name="allow">Issue Book</button>
</div>
</form>

    
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

function Disp(){
   confirm('Administrator allow to issue Book');
   }

  


</script>
        </div>
        
    </body>
</html>
<?php 


                
if(isset($_POST['allow'])){

    $name = $_POST['nameof'];
    $ro = $_POST['rollof'];
    $crd = $_POST['cardof'];
    $book_num = $_POST['booknum'];
    $bk_name = $_POST['bookname'];
    $author = $_POST['author'];
    $date  = $_POST['date'];
    

                $kk = "SELECT * from issuebooks where bk_name = '$bk_name'";
                $gg = $conn->query($kk);
                $isb =  mysqli_num_rows($gg);


    $chk = "SELECT * from issuebooks where roll_n = '$ro' and bk_name = '$bk_name'";
    $chk_r = $conn->query($chk);
    $runn = mysqli_num_rows($chk_r);

    $bk_valid  = "SELECT * from books where bk_name ='$bk_name'";
    $valid = $conn->query($bk_valid);
    $run_bk = mysqli_num_rows($valid);

	
	
	$valid1 = "SELECT * from cards where crd_n = '$crd' and Roll_n = '$ro'";
	$r_valid = $conn->query($valid1);
	$ru = mysqli_num_rows($r_valid);


     $bb = "SELECT * from books where bk_name = '$bk_name'";
                $run_bb = $conn->query($bb);
                   

       while($tal = mysqli_fetch_array($run_bb)) {
                       $tt = $tal[3];
                   }

    if ($runn>0) {
        echo "<script>alert('This book is Already Issued !')</script>";
    }
    else{

        if(!$ru){
			echo "<script>alert('Card number Or Roll number is Invalid  !')</script>";
		}
		else{
			if(!$run_bk){
                echo "<script>alert('Book is not available in Library')</script>";
            }
            else{

                if($tt == 0){
                        echo "<script>alert('Book Is Not Avilable in Library !')</script>";
                         
                    }
                else{

                $sql_c = "INSERT into issuebooks(name,roll_n,crd_n,bk_number,bk_name,author,issue_date)
                 values('$name','$ro','$crd','$book_num','$bk_name','$author','$date')";
                   $sql_run = $conn->query($sql_c);

                   if($sql_run){
                   $total = ($tt-1);
                   $upd = "UPDATE books SET total = '$total' where bk_name = '$bk_name'";
                   $ru_upd = $conn->query($upd);

                   if($ru_upd){
                        echo "<script>alert('Book Issued Successfully !')</script>";
                   }
                   else{
                    echo "<script>alert('Somthing went Wrong !')</script>";
                }
                }
                   
                 }
                   



                

            }
		}

    }
}





?>