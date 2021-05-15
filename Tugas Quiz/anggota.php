<?php 
session_start();
if(!isset($_SESSION['session_username'])){
    header("location:login.php");
    exit();
}
print_r($_SESSION); 
print_r($_COOKIE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="container my-4">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
           
                <form id="loginform" class="form-horizontal" action="" method="post" role="form">       
                    <center>
                    <div> <h3>Mau Logout?</h3>
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <button type="submit" class="btn btn-hover" name="logout"><a href="logout.php" style=”text-decoration: none”>Logout</a></button>
                        </div>
                    </div>
                    </center>
                </form>    
                            
        </div>  
    </div>
</div>
</body>
</html>

