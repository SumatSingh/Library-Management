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
background:rgb(0,128,128);
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
background: url('img/bck.webp');
background-size: cover;
}

.chk_box{
	width: 50%;
	padding: 1rem 1rem;
	background:rgba(0,0,0,.5);
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
	text-align: center;
	margin: 1% auto;
}
.card_box h4{
	text-align: center;
	font-family: sans-serif;
	font-size: 1rem;
	color:white;
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
	color: rgba(0,255,255);
	border:none;
	background: none;
	width: 90px;
	font-weight: bold;
	cursor: pointer;
}
#input1{
	color: rgba(0,255,255);
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

        	<center><h3 style="color: white;">Find Student Library Card </h3></center>

        	<br>
            
            <center> 
            	<form method="post">
        		<input type="text" name="roll" placeholder="Enter Roll Number...">
        		<button name="gen">Find card</button>
        	    </form>

        	    <br><br>

        	    </center>

        	    <?php 
               $con = mysqli_connect("localhost","root","","library_card");

               if(isset($_POST['gen'])){

	           $roll = $_POST['roll'];


	           $sql  = "SELECT * FROM cards where Roll_n = '$roll'";
	           $sq = $con->query($sql);

	           if(!$rrr = mysqli_fetch_array($sq)){
	            	echo "<script>alert('Invalid Roll Number !')</script>";
	             }
	             else{
	             	?>

	             	<div id="bxx">
                    <div class ="card_box">
                    	<div class="bxx2">

                    <h4><u>INDIRA GANDHI ENGINEERING COLLEGE SAGAR (M.P.)</u></h4>
                    <br>

                    <center> <label>LIBRARY CARD</label></center>
                    <br>
                    <br><br>

                    <form method="post">

                    <p><i>Card Number  : <input type="text" name="crd_n"
                     value="<?php echo $rrr[0]; ?>" id ="input" readonly> </p>

                    <p>Roll Number  : <input type="text" name="rolln" 
                    	value="<?php echo $rrr[1];?>"  id ="input" readonly></p>

                    <p style="color:rgb(255,128,0);">Verify Status : <input type="text" name="st" 
                    	value="<?php echo $rrr[2];?>"  id ="input" readonly>
                    </p>
                    <p>Your Name  :  <input type="text" name="nm" 
                    	value="<?php echo $rrr[3];?>"  id ="input1" readonly>
                    	 </p>
                    <p>Your Branch  :  <input type="text" name="brc" 
                    	value="<?php echo $rrr[4];?>"  id ="input" readonly></p>

                    <p>Semester  : <input type="text" name="sem" 
                    	value="<?php echo $rrr[5];?>"  id ="input" readonly></p>
                    <p>Address : <input type="text" name="add" 
                    	value="<?php echo $rrr[6];?>"  id ="input1" readonly></p></i>
                    
                </div>
                </div>

                <br>
                
                </div>
               </p>
                   </form>

	            	<?php
	             }

	            
                }
                ?>

                
                <center>

        		<div id="links">
        		<a href="index.php">DashBoard</a>  <a href="verify.php">Verify Student</a>

        	    </div>
        	</center>
        	
        </div>
        <br>
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
        
    </body>
</html>
