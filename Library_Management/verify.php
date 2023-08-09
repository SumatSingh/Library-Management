<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
        <title>Verify the Student</title>
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
	background:url('img/2.jpg');
	background-size:cover;
	margin: 5% auto;
	border-radius: .5rem;

}
.chk_box h3{
	color: #3366ff;
	font-family: sans-serif;
	cursor: pointer;
}
.chk_box input{
	padding: .2rem 1rem;
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
	font-weight: bold;
	font-family: sans-serif;
	font-size: 1rem;
	background: cyan;
	color: black;
	border-radius: .1rem;
}
#links a:hover{
	transition: 1s;
	background: black;
	color: cyan;
	letter-spacing: .1rem;
}
form p{
	font-weight: bold;
	display: inline-block;
}
form input{
	color: black;
	text-align: center;
	background: none;

}




        </style>
    </head>
    <body>
       
        <nav>
            <center><h3>Student Library Card</h3></center>
        </nav>
        <br>


        <div class="chk_box">

        	<center><h3>Verify Student</h3></center>

        	<br>
              <center> 
                <form  method="post">
        		<input type="text" name="roll" placeholder="Enter Roll Number...">
        		<button name="verify">Verify</button>
        	    </form>
        	   
        	    <br>

        	   <?php 
               $con = mysqli_connect("localhost","root","","library_card");

               if(isset($_POST['verify'])){

	           $roll = $_POST['roll'];


	           $sql  = "SELECT * FROM s_details where Roll_no = '$roll'";
	           $sq = $con->query($sql);

	           if(!$ro = mysqli_fetch_array($sq)){
	            	echo "<script>alert('Invalid Roll Number !')</script>";
	             }
	             else{
	             	?>

	            	<form method = "post">

	            		<p>Student Name<br>
	            		<input type="text" name=""value= "<?php echo $ro[0];?>" readonly></p>

	            		<p>Father's Name<br>
	            		<input type="text" value= "<?php echo $ro[1];?>" readonly></p>

	            		<p>Branch <br>
	            		<input type="text" name=""value= "<?php echo $ro[2];?>" readonly></p>

	            		<p>Enrollment Number<br>
	            		<input type="text" name="rolln"value= "<?php echo $ro[3];?>" readonly></p>

	            		<p>Semester <br>
	            		<input type="text" name=""value= "<?php echo $ro[5];?>" readonly></p>

	            		<p>Mobile Number<br>
	            		<input type="text" name=""value= "<?php echo $ro[8];?>" readonly></p>

	            		<p>Address<br>
	            		<input type="text" name=""value= "<?php echo $ro[7];?>" readonly></p>

	            		<p>Status<br>
	            		<input type="text" name="sts" value= "<?php echo $ro[14];?>" readonly></p>
	            		<br><br>

                       <p> <button name="yes">Verified</button></p>

                    </form>
                     </center>
	            	<?php
	             }

	            
                }
                ?>

        	<center>
        		<div id="links">
        		<a href="index.php" id ="dash">DashBoard</a>  <a href="card.php">Card Generation</a>

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

if(isset($_POST['yes'])){

	$rro = $_POST['rolln'];
	$sts2 = $_POST['sts'];
	$sts = "Verified";


	if($sts2 == "Verified")
	{
		echo "<script>alert('Student Is Already Verified')</script>";

	}
	else
	{
	$s_q = "UPDATE s_details SET status = '$sts' where Roll_no = '$rro'";
	$sq_r = $con->query($s_q);

	if($sq_r){

		echo "<script>alert('Student Verified')</script>";
	}
	else{
		echo "<script>alert('Student details incorrect')</script>";
	}
	}


}

?>

