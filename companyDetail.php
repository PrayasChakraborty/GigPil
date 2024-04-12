<!DOCTYPE html>
<html>
<title>Add Companies</title>

<head>
    <link rel="stylesheet" type="text/css" href="../css/montserrat-font.css">
    <link rel="stylesheet" type="text/css"
        href="../fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Main Style Css -->
    <link rel="stylesheet" href="../css/register.css" />
</head>

<body>
    <?php
    include "partials/header.php";
    ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="col-md-10 mt-4">
                    <h4 class="text-center fs-1">Company Details</h4>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="row">
                                

                                    <?php
if(isset($_GET['cid']) && $_GET['cid']==true){
    include "partials/_dbconnect.php";
    $cid=$_GET['cid'];
    $sql="SELECT * FROM `company` WHERE c_id='$cid'";
    $result=mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==0){
        $showError="Something went wrong";
        header("location: manageCompany.php?error=$showError");
    }
    else{
        while($row=mysqli_fetch_array($result)){
        echo'<form method="post">
        <div class="form-floating mb-3">
        <input type="text" name="cname" class="form-control form-control-lg" id="cname"
            placeholder="abcd" value="'.$row['c_name'].'" disabled readonly>
        <label for="cname">Company Name</label>
    </div>
        <div class="form-floating mb-3">
        <input type="email" name="cemail" class="form-control form-control-lg" id="cemail"
            placeholder="name@example.com" value="'.$row['c_email'].'" disabled readonly>
        <label for="cemail">Company Email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="caddress" class="form-control form-control-lg" id="caddress"
            placeholder="abcd" value="'.$row['c_address'].'" disabled readonly>
        <label for="caddress">Company address</label>
    </div>
    <div class="form-floating">
        <textarea class="form-control form-control-lg" placeholder="Leave a comment here" id="about"
            name="about" style="height: 100px" disabled readonly>'.$row['about'].'</textarea>
        <label for="about">About Company</label>
    </div>';
    }
}
}
    ?>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>