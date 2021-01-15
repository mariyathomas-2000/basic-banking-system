<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank_db";
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if (!$conn) {
	echo "Connection failed!";
}

$sql = "INSERT INTO users(id, branch_name, number, name)
        VALUES ('6' , 'bb' , '222000007896' , 'basil'),
                ('7' , 'ss' , '111000005679' , 'susy'),
                ('8' , 'ee' , '876000008765' , 'elsa'),
                ('9' , 'aa' , '666000008965' , 'anna'),
                ('10' , 'hel' , '765000009765' , 'helen'),
                ('11' , 'eva' , '456000008123' , 'eva'),
                ('12' , 'tere' , '567000006523' , 'teresa')";
if($conn->query($sql)===TRUE) {
    echo "New record created successfully";
}
else {
	echo "Error:" . $sql. "<br>" . $conn-> error;
}
$conn->close();














?>