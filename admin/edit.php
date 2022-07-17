<?php include 'update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/editstyle.css">
</head>
<body>
	<div class="container">
		<form action="update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Edit</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="address">Address</label>
		     <input type="text" 
		           class="form-control" 
		           id="address" 
		           name="address" 
		           value="<?=$row['stud_Address'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="class">Class ID</label>
		     <input type="text" 
		           class="form-control" 
		           id="class" 
		           name="class" 
		           value="<?=$row['class_ID'] ?>" >
		   </div>
		   <input type="text" 
		          name="id"
		          value="<?=$row['stud_ID']?>"
		          hidden>

		   <button type="submit" 
		           class="btn btn-primary"
		           name="edit">Edit</button>
		    <a href="managestudents.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>