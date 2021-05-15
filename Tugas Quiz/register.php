<?php

require "config.php";

//deklarasi variabel
$uname  = "";
$name = "";

if (isset($_POST["name"]) && isset($_POST["username"]) && isset($_POST["password"])){
    $nama = $_POST["name"];
    $uname = $_POST["username"];
    $passwd = $_POST["password"];
    $data = "INSERT INTO login(name, username, password) VALUE (:name, :username, :password)";
    $statement = $connection ->prepare($data);
    if ($statement ->execute([":name" => $nama, ":username"=>$uname, ":password"=>$passwd])){
        header("location:login.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="container my-4">    
    <div id="registerbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Registrasi Akun</div>
            </div>      
            <div style="padding-top:30px" class="panel-body" >    
                <form id="registerform" class="form-horizontal" action="" method="post" role="form">       
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <input id="register-name" type="text" class="form-control" name="name" value="<?php echo $name ?>" placeholder="name">                                        
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="register-username" type="text" class="form-control" name="username" value="<?php echo $uname ?>" placeholder="username">                                        
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="register-password" type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <input type="submit" name="login" class="btn btn-success" value="Register"/>
                        </div>
                    </div>
                </form>    
            </div>                     
        </div>  
    </div>
</div>
</body>
</html>