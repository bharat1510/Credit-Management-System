<?php include('updatevalue.php'); ?>
<html>
<head><title>Send Credit</title>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	
	<!-- Special Font & Symbol -->	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
		<!-- Get value from table.php with URL-->
			<?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'intership');
				$id=$_GET['id'];
                $query = "SELECT * FROM task2 WHERE id='$id'";
                $query_run = mysqli_query($connection, $query);
				$row=mysqli_fetch_assoc($query_run);
            ?>

	<div class="container">
		<div class="jumbotron">
			<style type="text/css">
			.jumbotron {	
				background-color:#c6ef64;
			}
			</style>
		<a href="index.html"><button type="button" class="btn btn-primary btn-md col-xs-push-8">HOME</button></a>
		<div class="form-horizontal">
			<label><h2> User Details</h2></label>
			<div class="form-group">
				<label class="col-md-4 control-lebal">ID </label>
				<div class="col-xs-6">
					<?php echo $row['id']; ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-lebal">Name </label>
				<div class="col-xs-6">
					<?php echo $row['name']; ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-lebal">Email </label>
				<div class="col-xs-6">
					<?php echo $row['email']; ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-lebal">Credit </label>
				<div class="col-xs-6">
					<?php echo $row['credit']; ?>
				</div>
			</div>
			<h2> Transfer Credit to...</h2>
			<form method="post" action="updatevalue.php?sid=<?php echo $row['id']; ?>">
				<div class="form-group">
					<label for="rid" class="col-md-4 control-lebal">User ID </label>
					<div class="col-xs-4">
					<input name="rid" class="form-control" id="rid" type="text" />
					</div>
				</div>
				<div class="form-group">
					<label for="amt" class="col-md-4 control-lebal">Enter Credit Amount  </label>
					<div class="col-xs-4">
						<input name="amt" class="form-control" id="amt" type="text" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-4 col-xs-push-4">
						<input type="submit" id="submit" class="btn btn-danger" name="updatedata" value="Send"/>
					</div>
				</div>
			</form>
			
		</div></div>
	</div>


    </script>
	<script src="js/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>