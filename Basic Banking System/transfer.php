<br>
<br><br><br>





<?php 
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "bank_db";
$conn=mysqli_connect($server_name,$username,$password,$database_name);


if(isset($_POST['save']))
{
	$transfer_account = $_POST['transfer_account'];
	$recever_account = $_POST['recever_account'];
	$amount = $_POST['amount'];
	
	
	$sql_query = "INSERT INTO transfer_db(transfer_account,recever_account,amount)
	VALUES('$transfer_account','$recever_account','$amount')";
	if(mysqli_query($conn,$sql_query))
	{
		echo "Transaction successful";
	}
	
	mysqli_close($conn);
}


?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Banking</title>
  

</script>
  <style>
  		 body{
                width:100%;
                height:100%;
                margin:0;
            }
            a{
                text-decoration:none;
                background-color:transparent;
                color:#ededed;
            }
            .inner header{
                width:80%;
                margin:auto;
            }
            .logo{
                float: left;
                height: 50px;
                padding: 15px;
                font-size: 20px;
                font-weight: bold;
            }
            .header-link {
                float:right;
                font-size:14px; 
                height: 50px;
                padding: 15px 15px;
                font-size:16px;
                font-weight: bold;
            }
  
  
  </style>
  
  
</head>
<body style="background:#96D678;background-size: 100%">
<nav class="navbar navbar-inverse navbar-fixed-top">
           <div class="container">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       
                   </button>
                   <a href="#" class="navbar-brand">TSF GRIP BANK</a>
                   
               </div>
               <div class="collapse navbar-collapse" id="mynavbar">
                   <ul class="nav navbar-nav navbar-right">
                       <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                       <li><a href="about.php"><span class="glyphicon glyphicon-star"></span>About Us</a></li>
                       <li><a href="Customers.php"><span class="glyphicon glyphicon-user"></span>Customers</a></li>
                   </ul>
               </div>
           </div>
       </nav>
<br><br><br>

  
  <div class="card-header text-center">
    Funds Transfer
  </div>
  
      <div>
	<form action="transfer.php" method="post">
		
					<h1>New Transfer</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
					<label for="transfer_account"><b>Transfer Account</b></label>
					<input class="form-control" id="transfer_account" type="number" name="transfer_account" required>

					<label for="recever_account"><b>Receiver Account</b></label>
					<input class="form-control" id="recever_account"  type="number" name="recever_account" required>

					<label for="amount"><b>Amount</b></label>
					<input class="form-control" id="amount"  type="number" name="amount" required>

					
					<input class="btn btn-primary" type="submit" id="register" name="save" value="Transfer">
				
				</form>
      
    <br>
    

</div>

</body>
</html>