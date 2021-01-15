<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Banking</title>
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
			.table{
				border-collapse: collapse;
				width:100%;
				color: #588c7e;
				font-family: monospace;
				font-size: 25px;
				text-align: left;
			}
			th{
				background-color: #588c7e;
				color:white;
			}
			tr:nth-child(even) {background-color: #f2f2f2}
				
				
				
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
                       <li><a href="Customers.php"><span class="glyphicon glyphicon-user"></span>Transfer Histroy</a></li>
                   </ul>
               </div>
           </div>
       </nav>







<br><br><br
 
<h2>All Account Details</h2>

<table>
<tr>
<th>ID</th>

<th>Branch Name</th>
<th>Account Number</th>
<th>Name</th>
</tr>
<?php 
$conn = mysqli_connect("localhost", "root", "", "bank_db");
if($conn-> connect_error) {
	die("Connection failed:". $conn-> connect_error);
}
$sql = "SELECT id, branch_name, number, name from users";
$result = $conn-> query($sql);
if($result-> num_rows > 0){
	while ($row = $result-> fetch_assoc()) {
		echo "<tr><td>". $row["id"] . "</td><td>". $row["branch_name"] . "</td><td>". $row["number"] . "</td><td>". $row["name"] . "</td></tr>";
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