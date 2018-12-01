


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
  
    <!-- /////////////////////////////////// header div //////////////////////////////////-->
<header>
    <div class="container">
            
            <div class="title">
                <span class="logo main-color">walker</span>
                <span class="slogo"><sub>jns</sub></span>
                <span class="about minu ">about us</span>
                <span class="contact minu ">contact us</span>
                <span class="products minu ">our products</span>
            </div>
  			<h1><span >welcom</span> back </h1>
            <div class="mid text-center">
            <h1><span >walker</span> men's ware </h1>
            <p>smart colection for men's ware  <br/>best choise  for men ,be styleish and choise walker </p>
            
				 <ul>
                <li><a href="index.php" style="text-decoration:none;" class="logspan">
					<span>logout <i class="fas fa-sign-out-alt fa-lg"></i>
</span></a ></li>
                
            </ul>
             </div>
   
        </div>
      
</header>
<!-- ///////////////////////////////////login  div //////////////////////////////////-->
  

   
    <!-- ///////////////////////////////////end header div //////////////////////////////////-->
	
	
	
	<!---------  -------------------------  about us section  -------------------------      ------>
        <div class="aboutus">
    
    <div class="container">
                    <img src="images/m2.jpg" class="imginf">
                    <div class="info">
                        <h2>walker factocy sence 1997</h2>
                        <p>we start our work sence 1997 and develop ourselves to help you </p>
                        <p class="hide c1">and we stand with you to achive your goal</p>
                        <span class="s1 spaninf">read more</span>
                    </div>

                       <div class="info">
                        <h2>walker pranshs </h2>
                        <p>we start with one stor  but know  we have more than 100 stors</p>
                        <p class="hide c2"> in evry city in egypt you will find us to help you make best choise</p>
                        <span class="s2 spaninf">read more</span>
                    </div>

                    <img src="images/m1.png" class="imginf">

            </div>
    </div>
    
     <!-- ///////////////////////////////////our best sall div //////////////////////////////////-->                            

   <div class="sale">
                 <div class="container">
                     <h1>sale and best ofers</h1>
          <div class="salepro trep text-center">
                <div class="imgpro">
                </div>
                <h5>popa ksjd</h5>
                 <p>dfjijgf kjfgijsg jfirs</p>          
                <span>$ <span>1.0</span></span>
            </div>
              <div class="salepro   text-center">
                <div class="imgpro">
                </div>
                <h5>popa ksjd</h5>
                 <p>dfjijgf kjfgijsg jfirs</p>          
                <span>$ <span>1.0</span></span>
            </div>
             <div class="salepro   text-center">
                <div class="imgpro">
                </div>
                <h5>popa ksjd</h5>
                 <p>dfjijgf kjfgijsg jfirs</p>          
                <span>$ <span>1.0</span></span>
            </div>
             <div class="salepro stock   text-center">
                <div class="imgpro">
                </div>
                <h5>popa ksjd</h5>
                 <p>dfjijgf kjfgijsg jfirs</p>          
                <span>$ <span>110</span></span>
            </div>
            
          <div class="salepro   popa text-center">
                <div class="imgpro">
                </div>
                <h5>popa ksjd</h5>
                 <p>dfjijgf kjfgijsg jfirs</p>          
                <span>$ <span>1.0</span></span>
            </div>
              <div class="salepro popa  text-center">
                <div class="imgpro">
                </div>
                <h5>popa ksjd</h5>
                 <p>dfjijgf kjfgijsg jfirs</p>          
                <span>$ <span>1.0</span></span>
            </div>
             <div class="salepro  popa text-center">
                <div class="imgpro">
                </div>
                <h5>popa ksjd</h5>
                 <p>dfjijgf kjfgijsg jfirs</p>          
                <span>$ <span>1.0</span></span>
            </div>
                      
             <div class=" salepro   popa  text-center">
                <div class="imgpro">
                </div>
                <h5>popa ksjd</h5>
                 <p>dfjijgf kjfgijsg jfirs</p>          
                <span>$ <span>1.0</span></span>
            </div>
            
                   
        </div>
            
    </div>
	<!---------  -------------------------  php  -------------------------      ------>		
	<?php
	
	if(isset($_POST['submitbuy']))
	{
$TPname=$_POST['Pname'];
$TAddress =$_POST['Address'];
$Tphone=$_POST['phone'];
$Tbprice=$_POST['bprice'];

$query=" insert into buer (Pname,Address,phone,bprice )values('". $TPname ."','". $TAddress."','". $Tphone ."','". $Tbprice ."')";
		$result=mysqli_query($conn,$query);
		
		if($result){
			echo "done buy" ;
			
		}else{ 
				echo "data not insert";
		}
	}
	
?>

<!---------  -------------------------  php  -------------------------      ------>		
	<div class="buy" style="display:none">
   <form action="home.php" method="post">
    <div class="cont">
        <h1>buy card</h1>

<input type="text" placeholder="product name" name="Pname " required  />
<input type="text" placeholder="address"  name="Address "required />
<input type="text" placeholder="phone" name="phone " required/>
<input type="text" placeholder="price" name="bprice " required/>

<button type="submit" class="button" name="submitbuy">buy</button>
    </div>
</form>   
		</div>
	
       <div class="nbar text-center">
                <i class="back fas fa-angle-left fa-lg"></i>
                <i class="next fas fa-angle-right fa-lg"></i>
		   
        </div> 
      
	
	<!---------  -------------------------  products  section  -------------------------      ------>
	<div class="products">
		<div class="container">
		            <h1 style="color:rgba(0, 0, 0, 0.7);">products</h1>
					                
		<div class="cati" style="width:100%;padding-bottom:30px;">
		<span class="minu">popa</span>
		<span class="minu">popa</span>
		<span class="minu">popa</span>
		<span class="minu">popa</span>
		<span class="minu">popa</span>
		<span class="minu">popa</span>
		</div>	
			</div>
	</div>
	
   <div class="sale">
                 <div class="container">
					 
          <div class="salepro  text-center probuy">
                <div class="imgpro">
                </div>
                <h5>popa ksjd</h5>
                 <p>dfjijgf kjfgijsg jfirs</p>          
                <span>$ <span>1.0</span></span>
            </div>
              <div class="salepro   text-center probuy">
                <div class="imgpro">
                </div>
                <h5>popa ksjd</h5>
                 <p>dfjijgf kjfgijsg jfirs</p>          
                <span>$ <span>1.0</span></span>
            </div>
             <div class="salepro   text-center probuy">
                <div class="imgpro">
                </div>
                <h5>popa ksjd</h5>
                 <p>dfjijgf kjfgijsg jfirs</p>          
                <span>$ <span>1.0</span></span>
            </div>
             <div class="salepro    text-center probuy">
                <div class="imgpro">
                </div>
                <h5>popa ksjd</h5>
                 <p>dfjijgf kjfgijsg jfirs</p>          
                <span>$ <span>110</span></span>
            </div>
               
        </div>
            
    </div>
  
       
</body>
</html>
<!---------------------------------------------------php------------------------------------->
<?php
//to close connection of data base 
mysqli_close($conn);
?>
	
<!---------------------------------------------------php------------------------------------->