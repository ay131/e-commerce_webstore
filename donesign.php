	
<!---------------------------------------------------php------------------------------------->
<?php
// connect to database 

				$DB_HOST="127.0.0.1";
				$DB_USERNAME="root";
				$DB_PASSWORD="mysql";
				$DB_NAME="ecommerce";

$conn = mysqli_connect($DB_HOST,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);

if (mysqli_connect_errno())
    echo "Failed to connect to MySQL datbas ecommerce : " . mysqli_connect_error();

?>
	
<!---------------------------------------------------php------------------------------------->

<!DOCTYPE html>
<html>
<head>
    
<title>AYo_website.com</title>
    
<link rel="stylesheet" href="css/fontawesome.css"/>    
<link rel="stylesheet" href="css/normalize.css"/>
<link rel="stylesheet" href="css/style.css"/>
    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
<script src="script/jquery-3.3.1.min.js"></script>
<script src="script/jquery.nicescroll.min.js"></script>
<script src="script/script.js"></script>

</head>
<body>
    

	
<!---------------------------------------------------php------------------------------------->
<?php

 if(isset($_POST['submitt']))
	{

$email=$_POST['email'];
$upassword=$_POST['upassword'];

		$query="select id from  users where email='". $email ."' and upassword='". $upassword ."' ";
		$result=mysqli_query($conn,$query);
		if($result){
 		header('location: home.php');
	
		}
      }
?>
	
	
<!---------------------------------------------------php------------------------------------->
    <div class="login" style="display:inline;" >
        
            <form action="" method="post">
    <div class="cont">
        <h1>wlcome back </h1>
<input type="email" placeholder="email addriss" name="email"   title="put email  only, please." required />
<input  type="password" placeholder=" password"  name="upassword"  title="put password  only, please." required />
<button type="submit" class="button" name="submitt" value="insert">login</button>
    </div>
</form>
        
        </div>



	
<!---------------------------------------------------php------------------------------------->
<?php
//to close connection of data base 
mysqli_close($conn);
?>
	
<!---------------------------------------------------php------------------------------------->