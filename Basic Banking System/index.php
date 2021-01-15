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
            .banner-image {
                padding-bottom: 50px;
                margin-bottom: 20px;
                text-align: center;
                color: #f8f8f8;
                background: url(image/bank.png) no-repeat center; 
                background-size: cover;
            }
            .inner-banner-image{
                padding-top: 12%;
                width:80%;
                margin:auto;
            }
            .banner_content{
                position: relative;
                padding-top: 6%;
                padding-bottom: 6%;
                overflow:hidden;
                margin-bottom: 12%;
                background-color: rgba(0, 0, 0, 0.7);
                max-width: 660px;
            }
			h2{
				color:#00ff00;
			}
        </style>
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
        <div class="content">
            <div class="banner-image">
                <div class="inner-banner-image">
                    <center>
                        <div class="banner_content">
                            <h1>Welcome to TSF GRIP Bank</h1>
                            
                            <a href="transfer.php">
                                <center>
                                    <button class="btn btn-danger btn-lg active">Transfer Money</button>
                                </center>
                            </a>
                            <a href="viewcustomer.php">
                                <center>
                                    <button class="btn btn-primary">View Customers Details</button>
                                </center>
                                
                            </a>
                            
                        </div>
                    </center>
                </div>
            </div>
        </div>
		<h2>This website is created by <u> MARIYA THOMAS </u></h2>
        
        
    </body>
</html>
