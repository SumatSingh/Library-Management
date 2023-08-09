<!DOCTYPE html>
<html>
<head>
	<title>Submit Book</title>
<style>

	*{
		padding: 0rem;
		margin: 0rem
	}
	#coverpage{
		width:60%;
		height:100%;
		padding: 0rem 0rem;
		margin: 5% auto;
		border:.1rem solid rgb(98,208,255);
	}
	#coverpage h3{
		border-radius: .1rem 0rem .1rem 0rem;
		background:rgb(98,208,255);
		color: white;
		text-align: center;
		font-weight:bold;
		font-size: 18px;
		font-family: arial;
		cursor: pointer;
		padding: .4rem 0rem;
	}
	.info_f{
      
	}
	.info_f p{
		margin: .3rem 2rem;
		font-family: sans-serif;
		font-size: 18px;
		padding: .3rem 2rem;
	}
	button{
		margin: .2rem 1rem;
		padding: .2rem 1rem;
		border:none;
		cursor: pointer;
		color: white;
		background: #3366ff;
	}
  #input{
    border: none;
    background: none;
    cursor: pointer;
    text-align: center;
    font-weight: bold;
  }

	

</style>	
</head>
<body>

	<div id ="coverpage">

   <h3>Student Submit Book Here</h3>
   <br>

   <div class="info_f">

   	<?php 
       $bkn = $_GET['bkn'];
   	?>

    <form method="post">                      

    <br>
    <p>Book Number: <input type="text" name="bk_num" value="<?php echo $bkn; ?>" placeholder="Book number"  id ="input"  readonly></p>
    
     <p><button name="submit">find Book</button> <a href="index.php">DashBoard</p> </p>

    </form>
    <br>
	</div>
  <br>

<?php 
$conn = mysqli_connect("localhost","root","","library_card");

if(isset($_POST['submit'])){
  
  $b_numbers = $_POST['bk_num'];

 $ssql = "SELECT * from issuebooks where bk_number = '$b_numbers'";
 $run_q = $conn->query($ssql);


 while($row = mysqli_fetch_array($run_q)){
          
  ?>
      <div class="info_f">


       <form method="post">
         
         <p>Student Name: <input type="text" name="sn" id ="input"  value="<?php echo $row[0]?>"readonly></p>
         <p>Student Roll: <input type="text" name="sr" id ="input"  value="<?php echo $row[1]?>"readonly></p>
         <p>Student Card: <input type="text" name="sc"  id ="input" value="<?php echo $row[2]?>"readonly></p>
         <p>Book  Number: <input type="text" name="bnum" id ="input"  value="<?php echo $row[3]?>"readonly></p>
         <p>Book name: <input type="text" name="bname" id ="input"  value="<?php echo $row[4]?>"readonly></p>
         <p>Book Author: <input type="text" name="an" id ="input"  value="<?php echo $row[5]?>"readonly></p>
         <p>Issue Date: <input type="date" name="id" id ="input"  value="<?php echo $row[6]?>"readonly></p>
         <p>Submit Date: <input type="date" name="sd" id ="input" required></p>
          <br>

          <p><button name="submit_b">Submit book</button> </p>

       </form>

  
      </div>

  <?php
 }

}

?>


<?php 
error_reporting(0);

if(isset($_POST['submit_b'])){

  $name = $_POST['sn'];
  $roll = $_POST['sr'];
  $card = $_POST['sc'];
  $book_num = $_POST['bnum'];
  $book_name = $_POST['bname'];
  $book_au = $_POST['an'];
  $isd = $_POST['id'];
  $smtd = $_POST['sd'];


  $bb = "SELECT * from books where bk_name = '$book_name'";
  $run_bb = $conn->query($bb);

  while($tal = mysqli_fetch_array($run_bb)) 
   {
                       $tt = $tal[3];
    }

    $sql = "DELETE FROM issuebooks WHERE bk_number = '$book_num'";
    $run_sql = $conn->query($sql);

    if($run_sql){

       $in = "INSERT INTO submittedbooks(name,roll_n ,crd_n,book_num,bk_name,author,issue_d,submit_d,status)values('$name','$roll','$card','$book_num','$book_name','$book_au','$isd','$smtd','Submitted')";
       $run_in = $conn->query($in);

       if($run_in){

          $total_books = ($tt+1);

          $up = "UPDATE books SET total = '$total_books' where bk_name = '$book_name'";
          $run_up = $conn->query($up);

          if($run_up){
            echo '<script> alert("Book Submitted successfully !")</script>';
          }
          else{
            echo '<script> alert("book update error !")</script>';
          }
       }
       else{
        echo '<script> alert("Book Submitted Error!")</script>';
       }
    }




}
?>







</body>
</html> 