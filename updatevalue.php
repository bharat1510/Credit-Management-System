<?php
/*
	rid--> Receiver ID
	sid--> Sender ID
	All variables contain '1' is related to sender.
*/

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'intership');

    if(isset($_POST['updatedata']))
    {   
        $rid = $_POST['rid'];
        $credit = $_POST['amt'];
		//echo $id;
		//echo $credit;
		$sql=("SELECT credit FROM task2 WHERE id='$rid'");
		$result=mysqli_query($connection, $sql);
		$row = mysqli_fetch_assoc($result);

		$sid = $_GET['sid'];
		//echo $sid;
		$sql1=("SELECT credit FROM task2 WHERE id='$sid'");
		$result1=mysqli_query($connection, $sql1);
		$row1 = mysqli_fetch_assoc($result1);
		
		if($row1['credit'] > $credit)
		{
			$total=($credit+ $row['credit']);
			//echo $total;
			$query = "UPDATE task2 SET credit='$total' WHERE id='$rid'  ";
			$query_run = mysqli_query($connection, $query);
			
			$total1=($row1['credit'] -$credit);
			//echo $total1;
			$query1 = "UPDATE task2 SET credit='$total1' WHERE id='$sid'  ";
			$query_run1 = mysqli_query($connection, $query1);
			//echo "Hello world";
			//echo '<script> alert("Credit Successfully Transfered."); </script>';
			header("Location:table.php?sent=true");
		}
		else {
			echo '<script> alert("Insufficient Credit"); </script>';
		}
		
    } 
?>  
