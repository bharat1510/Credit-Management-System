<?php 
	if(isset($_GET['sent']))
		if(($_GET['sent']) =="true")
			echo '<script> alert("Successfully Credit Transfered"); </script>';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> View all users </title>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    
</head>
<body>

<!-- Display Values-->

<div class="container">
	<div class="col-xs-12">
    <div class="jumbotron">
	<style type="text/css">
	.jumbotron {
		
		background-color:#fba001;
	}
	</style>
	<a href="index.html"><button type="button" class="btn btn-primary btn-md col-xs-push-8">HOME</button></a>
        <div class="card">
            <h2> Details of all Users </h2>
			<h5> Select Send to transfer credit.</h5><br>
        </div>    
		
        <div class="card">
            <div class="card-body">
			<!-- Connect to Database -->
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'intership');

                $query = "SELECT * FROM task2";
                $query_run = mysqli_query($connection, $query);
            ?>
			<!-- Display The Responsive Bootstrap Table -->
				<div class="table-responsive">
                <table id="datatableid" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr class="active">
                            <th scope="col"> ID</th>
                            <th scope="col"> Name</th>
                            <th scope="col">Email </th>
                            <th scope="col"> Credit </th>
                            <th scope="col"> EDIT </th>
                        </tr>
                    </thead>
            <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                    <tbody>
                        <tr>
                            <td> <?php echo $row['id']; ?> </td>                            
                            <td> <?php echo $row['name']; ?> </td>                            
                            <td> <?php echo $row['email']; ?> </td>                            
                            <td> <?php echo $row['credit']; ?> </td>                                                       
                            <td> 
                                <a href="transfer.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-success btn-sm editbtn"> Send</button></a>
                            </td> 
                        </tr>
                    </tbody>
            <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                </table>
				</div>
            </div>
        </div>
    </div>
	</div>
</div>

	<script src="js/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

