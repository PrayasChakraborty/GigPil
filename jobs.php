<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
    <link rel="stylesheet" type="text/css"
        href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/register.css" />
</head>
<style>
.card {
    box-shadow: 10px 10px 40px #80808096;
}
</style>
<?php include "partials/header.php";
?>

<body class="bg-primary-subtle bg-gradient">
    <div class="container justify-content-center text-center">
		<?php
		
		if((isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) || (isset($_SESSION['adminlog']) && $_SESSION['adminlog']==true)){
		if(isset($_GET['category']) && $_GET['category']==true){
			include "partials/_dbconnect.php";
			$category=$_GET['category'];
			$sql="SELECT * FROM `job` WHERE category = '$category'";
			$result=mysqli_query($conn, $sql);
			$numRows = mysqli_num_rows($result);
			if($numRows==0){
					echo'<h4 class="text-center fs-1 mb-5 mt-4 fw-bold">No Job Available for this Category</h4>';
			}
			else{
				echo '<h4 class="text-center fs-1 mb-5 mt-4 fw-bold">'.$category.'</h4>';
				while($row=mysqli_fetch_array($result)){
					
					echo '<div class="container-fluid container-fullw justify-content-center row">
						<div class="card my-4 col-sm-6 mb-5 bg-warning bg-gradient text-success-emphasis" style="width: 90rem;">
							<a href="companyDetail.php?cid='.$row['c_id'].'" class="nav-link">
								<h5 class="card-header fs-2 fw-semibold">'.$row['c_name'].'</h5>
							</a>
							<div class="card-body">
								<h5 class="card-title fs-2 fw-semibold">'.$row['j_title'].'</h5>
								<p class="card-text fs-4 fw-semibold">'.$row['j_desc'].'</p>
								<div class="row mt-4">
									<div class="col">
										<p class="card-text fs-5 fw-semibold">Salary: '.$row['salary'].'</p>
									</div>
									<div class="col">
										<p class="card-text fs-5 fw-semibold">Qualification: '.$row['qualification'].'</p>
									</div>
									<div class="col align-self-end">
										<p class="card-text fs-5 fw-semibold">Vacancy: '.$row['vacancy'].'</p>
									</div>
								</div>
								<div class="row mt-4">
									<div class="col">
										<p class="card-text fs-5 fw-semibold">Contact: '.$row['j_email'].'</p>
									</div>
									<div class="col">
										<p class="card-text fs-5 fw-semibold">Category: '.$row['category'].'</p>
									</div>
									<div class="col">
										<p class="card-text fs-5 fw-semibold">Created on: '.$row['create_time'].'</p>
									</div>
								</div>
							</div>
						</div>
						
					</div>';
				}
			}
		}
		}
		else{
			echo'<h4 class="text-center fs-1 mb-5 mt-4 fw-bold">You are not Logged In. Please Login to explore Jobs.</h4>';
		}
		?>
        
    </div>
</body>

</html>