<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
        <title>Generate Card for  Student</title>
        <style>
nav{
width:100%;
padding:.2rem 0rem;
background:#3366ff;
color:white;
cursor:pointer;

 }
*{
padding:0rem;
margin:0rem;
} 



#footer{
width:100%;
height:100%;
background:#467748;
margin-top: 19%;
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
color:white;
}
ul li{
list-style:none;
}
body{

}

.chk_box{
	width: 50%;
	padding: 1rem 1rem;
	background:#447676;
	background-size: cover;
	margin: 5% auto;
	border-radius: .5rem;

}
.chk_box h3{
	color: #3366ff;
	font-family: sans-serif;
	cursor: pointer;
}
.chk_box input{
	padding: .2rem .4rem;
	margin: .2rem 0rem;
	text-transform: uppercase;
}
button{
	padding: .3rem 1rem;
	margin: .2rem .4rem;
	background: #3366ff;
	border: none;
	cursor: pointer;
	color: white;
}
#links{
	margin-top: 10%;
}
#links a{
	margin: .2rem 1rem;
	padding: .2rem 1rem;
	text-decoration: none;
	background: orange;
	font-weight: bold;
	font-family: sans-serif;
	font-size: 1rem;
}
#links a:hover{
	transition: .8s;
	letter-spacing: .1rem;
}
.card_box{
	background:url('img/2.jpg');
	background-size: cover;
    width: 70%;
	height: 100%;
}
.card_box h4{
	text-align: center;
	font-family: sans-serif;
	font-size: 1rem;
	color: white;
	cursor: pointer;
	font-weight: bold;
}
.card_box label{
	padding: .2rem .5rem;
	border: .1rem solid black;
	border-radius: 1rem;
	cursor: pointer;
	background: white;
	color: #3366ff;
	font-weight: bold;
}
.card_box p{
	padding: .2rem 1rem;
	margin: .5rem 1rem;
	font-weight: bold;
	font-size: 1rem;
	font-family: sans-serif;
}
.card_box b{
	font-size: 1.3rem;
}
#input{
	color: rgba(74,232,95);
	border:none;
	background: none;
	width: 90px;
	font-weight: bold;
	cursor: pointer;
}
#input1{
	color: rgba(74,232,95);
	border:none;
	background: none;
	width: 120px;
	font-weight: bold;
	cursor: pointer;
}
.bxx2{
	background: rgba(0,0,0,0.6);
	width: 90%;
	height: 100%;
	padding: .5rem 1rem;
	border-radius: .2rem;
	box-shadow: .1rem .1rem .1rem .1rem gray;
	text-align: center;
	color: white;
}




        </style>
    </head>
    <body>
       
        <nav>
            <center><h3>Student Library Card</h3></center>
        </nav>
        <br>

        



        <div class="chk_box">

        	<center><h3>Generate Student Library Card </h3></center>

        	<br>
            
            <center> 
            	<form method="post">
        		<input type="text" name="roll" placeholder="Enter Roll Number...">
        		<button name="gen">Generate Card</button>
        	    </form>

        	    <br><br>

        	    

                <?php 
               $con = mysqli_connect("localhost","root","","library_card");

               if(isset($_POST['gen'])){

	           $roll = $_POST['roll'];


	           $sql  = "SELECT * FROM s_details where Roll_no = '$roll'";
	           $sq = $con->query($sql);

	           if(!$rrr = mysqli_fetch_array($sq)){
	            	echo "<script>alert('Invalid Roll Number !')</script>";
	             }
	             else{
	             	?>

	             	<div id="bxx">

                    <div class ="card_box">


                    	   <div id ="ccc">

                    	   	<div class="bxx2">

                    <h4><u>Hitkarini College of Engineering and Technology Jabalpur</u></h4>
                    <br>

                    <center> <label>LIBRARY CARD</label></center>
                    <br>
                    <br><br>

                    <form method="post">

                    <p><i>Card Number  : <input type="text" name="crd_n"
                     value="<?php $nu = rand(10,1000000); echo $nu;?>" id ="input" readonly> </p>

                    <p>Roll Number  : <input type="text" name="rolln" 
                    	value="<?php echo $rrr[3];?>"  id ="input" readonly></p>

                    <p style="color: green;">Verify Status : <input type="text" name="st" 
                    	value="<?php echo $rrr[14];?>"  id ="input" readonly>
                    </p>
                    <p>Your Name  :  <input type="text" name="nm" 
                    	value="<?php echo $rrr[0];?>"  id ="input1" readonly>
                    	 </p>
                    <p>Your Branch  :  <input type="text" name="brc" 
                    	value="<?php echo $rrr[2];?>"  id ="input" readonly></p>

                    <p>Semester  : <input type="text" name="sem" 
                    	value="<?php echo $rrr[5];?>"  id ="input" readonly></p>
                    <p>Address : <input type="text" name="add" 
                    	value="<?php echo $rrr[7];?>"  id ="input1" readonly></p></i>
                    
                   </div>


                   </div>

                <br>
                <center><button>Download Card</button> <button name="save">Save Card</button></center>
                </div>

               </p>
                   </form>

	            	<?php
	             }

	            
                }
                ?>
             

        		<div id="links">
        		<a href="index.php">DashBoard</a>  <a href="verify.php">Verify Student</a>

        	    </div>
        	</center>
        </div>


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
        
    </body>
</html>
<?php 

$vr = "Verified";

if(isset($_POST['save'])){

	$crd = $_POST['crd_n'];
	$rol = $_POST['rolln'];
	$st = $_POST['st'];
	$nm = $_POST['nm'];
	$br = $_POST['brc'];
	$sem = $_POST['sem'];
	$add = $_POST['add'];


	$ck = "SELECT * from cards where Roll_N = '$rol' or crd_n = '$crd'";
	$r_q = $con->query($ck);
	$ch_r = mysqli_num_rows($r_q);

	if($ch_r>0){
          echo "<script>alert('This Roll number already Exist Card PLZ Find Card !')</script>";
	}
	else{
		 if($st != $vr){
		 	echo '<script>alert("Student is not Verified")</script>';
		 }
		 else{


		 	$ss = "INSERT into cards(crd_n,Roll_n,sts,name,branch,sem,addr)VALUES('$crd','$rol','$st','$nm','$br','$sem','$add')";
	     $run = $con->query($ss);

	if($ss){

		echo "<script>alert('Card has been Saved SuccessFully')</script>";
	}
	else{
		echo "<script>alert('Something went Wrong~!')</script>";
	}

		 }

	}

	
}


?>
