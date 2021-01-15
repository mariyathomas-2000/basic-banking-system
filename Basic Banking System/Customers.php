<html>
    <head>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="UTF-8">
        <title>TSF GRIP BANK</title>
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
            .content {
                min-height: 600px;
            }
			table{
				border-collapse:separate;
				border-spacing:0 15px;
			}
			th{
				background-color:#4287f5;
				color:white;
			}
			th,td{
				width:150px;
				text-align:center;
				border:1px solid black;
				padding:5px;
			}
			h2{
				color:#4287f5;
			}
            
        </style>
		<link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
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
                       <li><a href="Customers.php"><span class="glyphicon glyphicon-user"></span>Transfer History</a></li>
                   </ul>
               </div>
           </div>
       </nav>
	   <br>
	   <br>
	   <br>
	   <br><br>
	   
          <h2>Transfer History</h2>

<table>
<tr>
<th>Sender Account</th><br>

<th>Receiver Account</th><br>
<th>Amount</th><br>

</tr>
<?php 
$conn = mysqli_connect("localhost", "root", "", "bank_db");
if($conn-> connect_error) {
	die("Connection failed:". $conn-> connect_error);
}
$sql = "SELECT transfer_account, recever_account, amount from transfer_db";
$result = $conn-> query($sql);
if($result-> num_rows > 0){
	while ($row = $result-> fetch_assoc()) {
		echo  "</td><td>". $row["transfer_account"] . "</td><td>". $row["recever_account"] . "</td><td>". $row["amount"] . "</td></tr>";
	}
	echo "</table>";
}
else {
	echo "0 result";
}
$conn-> close();
?>


</table>

     
</body>
</html>