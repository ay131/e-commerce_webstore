<!---------  -------------------------  php  -------------------------      ------>	
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

<!---------  -------------------------  php  -------------------------      ------>	

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
    <!-- /////////////////////////////////// header div //////////////////////////////////-->
<header>
    <div class="container">
            
            <div class="title">
                <a href="index.php" style="text-decoration:none"><span class="logo main-color">walker</span></a>
                <span class="slogo"><sub>jns</sub></span>
            </div>
  
            <div class="mid text-center">
            <h1><span >walker</span> men's ware </h1>
            <p>smart colection for men's ware  <br/>best choise  for men ,be styleish and choise walker </p>
                <ul>
                <li><span class="logspan">login</span></li>
                <li><span class="signspan">signup</span></li>
            </ul>
		</div>
        
        <!-- ///////////////////////////////////login  div //////////////////////////////////-->
		
		
	<!---------  -------------------------  php  -------------------------      ------>		
<?php

 if(isset($_POST['submitt']))
	{

$email=$_POST['email'];
$upassword=$_POST['upassword'];

		$query="select id from  users where email='". $email ."' and upassword='". $upassword ."' ";
		$result=mysqli_query($conn,$query);
		if($result){
 		header('location: home.php');
	
		}else{ 
				echo "data not insert";
		}
      }
?>
<!---------  -------------------------  php  -------------------------      ------>	
    <div class="login">
        
            <form action="" method="post">
    <div class="cont">
        <h1>wlcome back </h1>
<input type="email" placeholder="email addriss" name="email"   title="put email  only, please." required />
<input  type="password" placeholder=" password"  name="upassword"  title="put password  only, please." required />
<button type="submit" class="button" name="submitt" value="insert">login</button>
    </div>
</form>
        
        </div>
    <!-- ///////////////////////////////////sign up  div //////////////////////////////////-->
<!---------  -------------------------  php  -------------------------      ------>			
<?php
	if(isset($_POST['submit']))
	{
$Tfname=$_POST['fname'];
$Tlname=$_POST['lname'];
$Temail=$_POST['email'];
$Tupassword=$_POST['upassword'];

		$query=" insert into users (fname,lname,email,upassword)values('".$Tfname."','". $Tlname ."','". $Temail ."','". $Tupassword ."')";
		$result=mysqli_query($conn,$query);
		if($result){
			echo "order has been  send" ;
			
		}else{ 
				echo "data not insert";
		}
	}
	
?>
<!---------  -------------------------  php  -------------------------      ------>		
<div class="signup">

<form action="" method="POST">
<div class="cont">
<h1>sign up for free </h1>
<input class="names-one" type="text" placeholder="first name"   title="put name  only, please."required   name="fname"/>
<input class="names-two" type="text" placeholder="last name"   title="put name  only, please." required name="lname"/>
<input type="email" placeholder="email addriss"    title="put email  only, please."  required name="email"/>
<input  type="password" placeholder="put a password"   title="put password  only, please." required  name="upassword"/>
<button type="submit" class="button" name="submit" value="insert">Get Started</button>

</div>
</form>

</div>

    </div>
    
    <div class="kan"> copyright &copy2018 a.youssef</div>    
</header>
                  
</body>
</html>

<!---------  -------------------------  php  -------------------------      ------>	
<?php
//to close connection of data base 
mysqli_close($conn);
?>
<!---------  -------------------------  php  -------------------------      ------>	