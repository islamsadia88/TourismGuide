<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <link rel="stylesheet" type="text/css" href="main.css">
	<title>Tourism Guide Of Bangladesh</title>

</head>

<style>

.sign-with {
    margin-top: 25px;
    padding: 0;
}
div#OR {
    height: 30px;
    width: 30px;
    border: 1px solid #C2C2C2;
    border-radius: 50%;
    font-weight: bold;
    line-height: 28px;
    text-align: center;
    font-size: 12px;
    float: right;
    position: absolute;
    right: -16px;
    top: 40%;
    z-index: 1;
    background: #DFDFDF;
}

.img-thumbnails .img-thumbnail {
    margin-top: 15px;
}
.login_btn{
	margin-top: 15px;
	color: #009ade !important;
}
.search_btn{
	margin-top: 15px;
	color: #009ade !important;
}





/* remove defaults from responsive cols */

.nopadding {
  padding: 2px !important;
  margin: 0 !important;
  outline: 2px solid #333;
  background: #333;
}

</style>



<body>
     <nav class="navbar navbar-default" data-spy="affix" data-offset-top="197" >
  		<div class="container"  >
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Tourism Guide</a>
    </div>
    <ul class="nav navbar-nav">
      <!--<li><a href="#">Places To Go</a></li>-->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Places To Go
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="dhaka.php">Dhaka</a></li>
          <li><a href="chittagong.php">Chittagong</a></li>
          <li><a href="#">Khulna</a></li>
          <li><a href="#">Barisal</a></li>
          <li><a href="#">Rajshahi</a></li>
          <li><a href="#">Rangpur</a></li>
          <li><a href="#">Sylhet</a></li>

        </ul>
      </li>
      <li><a href="#">Plan Your Trip</a></li>
      <li><a href="gallery.php">Gallary</a></li>
      <li><a href="map.php">Map</a></li>
      <li><a href="#">forum</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> </a></li>-->
	  
	  
	  
      
      
	  <li><button class="glyphicon glyphicon-user btn btn-default login_btn" data-toggle="modal" data-target="#myModal">
    </button></li>
	
	<li><button  class="btn btn-default glyphicon glyphicon-search search_btn" data-toggle="modal" data-target="#search"></button></li>

      <!--<div id="literalLanguage" class="nav_location">
            <div class="dropdown-wrapper font_2">
                <label for="ddlLanguageSelector" class="accessibility">Select language:</label>
                    <select name="ddlLanguageSelector" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ddlLanguageSelector\&#39;,\&#39;\&#39;)&#39;, 0)" id="ddlLanguageSelector" class="select-image-dropdown">
				<option selected="selected" value="en">English</option>
				<option value="bn">Bangla</option>
					</select>
      		</div>
    	</div>-->	
	
  </div>
  </ul>
  
  <!-- Large modal -->

  <div class="modal fade" id="search" role="dialog">
  <form action="index.php" method="POST">
    <div class="modal-dialog modal-lg">
      <div class="modal_content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal_title" name='text'>Search</h4>
        </div>
        <div class="modal-body">
          <form id="searchForm" method="post">
          		<fieldset>
          			<input id="s" type="text" name="search"/>
          			<input type="submit" id="submitButton" />
          		</fieldset>

          </form>

          <div id="resultsDiv"></div>
        
        </div>
      </div>
    </div>
  </div>
  
<?php  

//database connection

  $servername = "localhost";
  $db_username = "root";
  $db_password = "";
  $db_name="tourist";

  $conn = mysqli_connect($servername, $db_username, $db_password,$db_name);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


?>

<?php session_start();?>

<?php 

//check email and password


$username="";
 $password=""; 

  if(isset($_POST['name']))
    $username=$_POST['name'];
  if(isset($_POST['u_pass']))
    $password=$_POST['u_pass'];

  if(isset($_POST['button'])){
    $sql = "SELECT * FROM user where email='$username' and password ='$password'";
    $result = $conn->query($sql);

    $row=$result->fetch_assoc();

    
   $_SESSION['name']= $row['name'];


    if($username=$row['email'] && $password=$row['password']){
      if($row['name']=='admin'){
        header('Location: admin.php');
      }
      else{
        header('Location: user.php');
      }
    }

    else{
      
    }
  }
   if(isset($_POST['button1'])){
        $name="";
        $password1=""; 
        $phone="";
        $email="";

          $a=rand(1000,9999);
         if(isset($_POST['name1']))
            $name=$_POST['name1'];
         if(isset($_POST['pass']))
           $password1=$_POST['pass'];
         if(isset($_POST['email']))
           $email=$_POST['email'];
          if(isset($_POST['phone']))
          $phone=$_POST['phone'];

        $sql1 = "INSERT INTO user(`name`, `user_id`, `email`, `password`, `phone`) VALUES ('$name','$a','$email','$password1','$phone')";
        $result1 = $conn->query($sql1);
        if($result1){
            //echo "ok";
            //header('Location: index.php');
        }
        else{
            echo "something is wrong !";
        }
    }
    $dd="";
    if(isset($_POST['search'])){
        $search=$_POST['search'];
        header("Location: search.php?search=$search");

    }
  

?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Login/Registration - 
            </div>
            <form action="index.php" method="POST">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                          
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email1" name = "name" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name = "u_pass" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit"  name ='button' class="btn btn-primary btn-sm">
                                            Submit</button>
                                        <a href="javascript:;">Forgot your password?</a>
                                    </div>
                                </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="Registration">
                            <form action="index.php" method="POST">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    
                                           
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name1" placeholder="Name" />
                                </div>
                                    
                                    
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" id="mobile" name="phone" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name="pass" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm" name = 'button1'>
                                            Continue</button>
                                        <button type="button"  class="btn btn-default btn-sm">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div id="OR" class="hidden-xs">
                            OR</div>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="https://www.facebook.com/" class="btn btn-primary">Facebook</a> <a href="https://mail.google.com/" class="btn btn-danger">
                                        Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	
</nav>

	<div class="container">


	<div class="slider">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/bangladesh/sunset.jpg" alt="Bangladesh" width="100%" >
      <div class="carousel-caption">
        <h3>Bangladesh</h3>
        <p>Beautiful Bangladesh</p>
      </div>
    </div>

    <div class="item">
      <img src="images/bangladesh/St.martin.jpg" alt="St.martin" width="100%" >
      <div class="carousel-caption">
        <h3>Cox's Bazar</h3>
        <p>St.Martin is a beautiful iceland in Bangladesh</p>
      </div>
    </div>

    <div class="item">
      <img src="images/bangladesh/bisnakandi.jpg" alt="bisnakandi" width="100%">
      <div class="carousel-caption">
        <h3>Sylhel</h3>
        <p>bisnakandi Is in Sylhet</p>
      </div>
    </div>

    <div class="item">
      <img src="images/bangladesh/st.martin2.jpg" alt="bisnakandi" width="100%">
      <div class="carousel-caption">
        <h3>Cox's Bazar</h3>
        <p>St.Martin is a beautiful iceland in Bangladesh</p>
      </div>
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>


		<div class="background">

			
			<h2>Places to<br> Visit in<br> Dhaka</h2>
				<div class="background-top">

					<div class="top1">
						<div class="heading">
							Dhanmondi
						</div>
						<img class="img-responsive " src="images/bangladesh/jahajbari.jpg">
					</div>

					<div class="top2">
						<div class="heading">
							Ahsan Manzil
						</div>
						<img class="img-responsive " src="images/bangladesh/ahsan_manzil.jpg">
						<div class="heading">
							Motijheel
						</div>
						<img class="img-responsive " src="images/bangladesh/motijheel.jpg">
						<div class="heading">
							Lalbagh Fort
						</div>
						<img class="img-responsive " src="images/bangladesh/Lalbagh_Fort1.jpg">
						<div class="heading">
							National Monument 
						</div>
						<img class="img-responsive " src="images/bangladesh/savar.jpg">


					</div>
					
				</div>
			<img class="img-responsive radison" src="images/radison.JPEG">	
				
			
				
				
			<h2>Places to<br> Visit in<br> Khulna</h2>
			
			<img class="img-responsive Sundorbon " src="images/Sundorbon.jpg">	
			
				
				
			
		</div>
		
	</div>


<div class="container">
	<div class="row">
		<h2>Photo Gallery </h2>
	</div>
	
	<div class="row img-thumbnails">
	    <div class="col-md-6">
	        <a href="#">
	            <img src="http://lorempixel.com/600/600/nature/1/" class="img-thumbnail">
	        </a>
	    </div>
	    <div class="col-md-6">
	        <a href="#">
	            <img src="http://lorempixel.com/600/600/nature/2/" class="img-thumbnail">
	        </a>
	    </div>
	    <div class="col-md-4">
	        <a href="#">
	            <img src="http://lorempixel.com/600/600/nature/3/" class="img-thumbnail">
	        </a>
	    </div>
	    <div class="col-md-4">
	        <a href="#">
	            <img src="http://lorempixel.com/600/600/nature/4/" class="img-thumbnail">
	        </a>
	    </div>
	    <div class="col-md-4">
	        <a href="#">
	            <img src="http://lorempixel.com/600/600/nature/5/" class="img-thumbnail">
	        </a>
	    </div>
	</div>
	
</div>



<div class="container">
  
  
    <h2>Video Gallery </h2>
    <div class="row">
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/cfllIbJ2RMw" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/-9nk2ABpK90" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/eBN1loSPJco" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/5umDyBu7fLw" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
    </div>
    
    <div class="row">
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/wvKtKMZwBmY" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/bUfL3BpPurw" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/HIo2rJ5Dh18" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/Jm0oJeg4_Po" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
    </div>
    
    
    
    <div class="row">
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/3Fh09xma0tY" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/43AKdt9oYE0"frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/4Cr20zd9TJc" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/NgUYRwRb2Lo" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
    </div>
    
    <div class="row">
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/_LGH_xeqKYg" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/uQNGaTE2yOo" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="//www.youtube.com/embed/kNMYx66tYP8" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="420" height="315" src="//www.youtube.com/embed/kQFKtI6gn9Y" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
    </div>
    















<div class="container">
    <section style="height:	15px;"></section>
	<div class="row" style="text-align:center;">
	</div>
    <!----------- Footer ------------>
    <footer class="footer-bs">
        <div class="row">
        	<div class="col-md-3 footer-brand animated fadeInLeft">
            	<h2>Logo</h2>
                <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                <p>© 2017 All rights reserved</p>
            </div>
        	<div class="col-md-4 footer-nav animated fadeInUp">
            	<h4>Menu —</h4>
            	<div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Nature</a></li>
                        <li><a href="#">Explores</a></li>
                        <li><a href="#">Science</a></li>
                        <li><a href="#">Advice</a></li>
                    </ul>
                </div>
            	<div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        	<div class="col-md-2 footer-social animated fadeInDown">
            	<h4>Follow Us</h4>
            	<ul>
                	<li><a href="#">Facebook</a></li>
                	<li><a href="#">Twitter</a></li>
                	<li><a href="#">Instagram</a></li>
                	<li><a href="#">RSS</a></li>
                </ul>
            </div>
        	<div class="col-md-3 footer-ns animated fadeInRight">
            	<h4>Newsletter</h4>
                <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
                <p>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div><!-- /input-group -->
                 </p>
            </div>
        </div>
    </footer>

</div>
	

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>