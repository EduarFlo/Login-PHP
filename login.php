<?php  
 //login.php  

 session_start();  
 if(isset($_POST["sub"]))  
 {  
    $_SESSION["name"] = 'Eduardo';
    header("location:index.php"); 
   }
     
  
 ?>


<!DOCTYPE html>
<html>

<head>
    <title>Webslesson Tutorial</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div id="box">
        <h2>Login</h2>
        <form method="post">
            <input type="text" name="name" id="name" placeholder="Enter Username" class="form-control" /><br />
            <input type="password" name="pass" id="pass" placeholder="Enter Pass" class="form-control" /><br />
            <input type="submit" name="sub" id="sub" class="btn btn-info" value="Submit" />
        </form>
        <br /><br />
    </div>
</body>

</html>