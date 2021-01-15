<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$transfer_account 		= $_POST['transfer_account'];
	$recever_account 		= $_POST['recever_account'];
	$amount 			= $_POST['amount'];
	

		$sql = "INSERT INTO transfer (transfer_account, recever_account, amount) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$transfer_account, $recever_account, $amount]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}