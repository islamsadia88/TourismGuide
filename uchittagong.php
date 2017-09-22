<!DOCTYPE html>
<html lang="en">
<head>
  <title>Places - Chittagong</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
  <style>    
    /* Set black background color, white text and some padding */

    a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
}

a:hover {
    background-color: #ddd;
    color: black;
}

.previous {
    background-color: #f1f1f1;
    color: black;
}

.next {
    background-color: #4CAF50;
    color: white;
}

.round {
    border-radius: 50%;
}

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
  </style>
  <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>
<body>

<nav class="navbar navbar-default" data-spy="affix" data-offset-top="197" >
      <div class="container"  >
    <div class="navbar-header">
      <a class="navbar-brand" href="user.php">Tourism Guide</a>
    </div>
    <ul class="nav navbar-nav">
      <!--<li><a href="#">Places To Go</a></li>-->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Places To Go
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="udhaka.php">Dhaka</a></li>
          <li><a href="uchittagong.php">Chittagong</a></li>
          <li><a href="#">Khulna</a></li>
          <li><a href="#">Barisal</a></li>
          <li><a href="#">Rajshahi</a></li>
          <li><a href="#">Rangpur</a></li>
          <li><a href="#">Sylhet</a></li>

        </ul>
      </li>
      <li><a href="#">Plan Your Trip</a></li>
      <li><a href="ugallery.php">Gallary</a></li>
      <li><a href="umap.php">Map</a></li>
      <li><a href="#">forum</a></li>
      
    </ul>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> </a></li>-->
    
  <?php session_start();?>  
    

   
 <?php $username=$_SESSION['name']; ?> 
    
   
<ul class='nav navbar-nav'>
      <!--<li><a href='#''>logout</a></li>-->
      <li class='dropdown'>
        <a class='dropdown-toggle' data-toggle='dropdown' href='#''><?php echo $username; ?>
        <span class='caret'></span></a>
        <ul class='dropdown-menu'>
          <li><a href='#'>Request</a></li>
          <li><a href='#'>Edit Account</a></li>
          <li><a href='index.php'>Logout</a></li>

        </ul>
      </li>
      
    </ul>;

    
  

   
      
    
  
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
    <div class="modal-dialog modal-lg">
      <div class="modal_content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal_title">Search</h4>
        </div>
        <div class="modal-body">
          <form id="searchForm" method="post">
              <fieldset>
                <input id="s" type="text" />
                <input type="submit" value="Submit" id="submitButton" />
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
            echo "ok";
            //header('Location: index.php');
        }
        else{
            echo "sdadasdsad";
        }
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
            <form action="chittagong.php" method="POST">
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
                            <form action="chittagong.php" method="POST">
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
  
<div class="container text-center">    
  <div class="row">
    
    <div class="col-sm-12">
    
      <div class="jumbotron">
	  	<div >
	    	     
	    	<img src="images/banner.jpg" class="img-responsive" >
	  	</div>
	  </div>	
      
      <div class="row">
        <div class="col-sm-3">
        	<div class="well">
           <img src="images/sajek.jpg" class="img-responsive" >
      	</div>
        </div>
        <div class="col-sm-9">
          <div class="well">
          <h4>SAJEK VALLEY</h4>
            <p>Sajek is a union located in north of Chittagong Hill Tracts.it From Khagrachhari town, it is situated 67 km north-east from Khagrachhari town and 95 km North-West from Rangamati city. The border of Bangladesh and Mizoram of India is 8 kilometer east from Sajek.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <img src="images/hill.jpg" class="img-responsive"  >
         </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
          <h4>HIMCHORI</h4>
            <p>Himchari, is really a nice visiting place in Cox'sbazar. This location is situated 12 km south of Cox’s Bazar Town and 6 km from the Kalatali beach by the hill.Journey to Himchari is also exciting because the road to Himchari runs by the lovely green hills on one side and open blue sea on the other side. The scenery of the two side of the road pleased all. This place is famous for the hill top view of the sea and the water fall.You got to ride the hill in order to get the marvelous view of the sea.The magnificent waterfall leading to the beach is a rare scene to enjoy.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <img src="images/martin.jpg" class="img-responsive" >
   			</div>
        </div>
        <div class="col-sm-9">
          <div class="well">
          <h4>SAINT MARTIN</h4>
            <p>The island is located south of Anguilla, separated from the British territory by the Anguilla Channel. Saint Martin is northwest of Saint Barthélemy, separated from the French territory by the Saint-Barthélemy Channel. It is one of the Renaissance Islands.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
         <div class="well">
           <img src="images/kaptai.jpg" class="img-responsive"  >
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
          <h4>Rangamati Hanging Bridge</h4>
            <p>Hanging Bridge: Hanging Bridge(Jhulonto Bridge in Bengali)is the landmark icon of Rangamati. It's a popular tourist spot and a must go destination.</p>


<p>If you don’t visit Rangamati you will not discover a big portion of natural beauties of Bangladesh. From Chittagong a 77 km. road amidst green fields and winding hills will take you to Rangamati. It is also connected by waterway from Kaptai. 
[Hanging Bride, Rangamati] This is the only place to visit through out the year. Rangamati expresses her full beauty in rainy season. Trees becoming greener, waterfalls are in full tide, the river Karnaphuli in her full wave in this season. If you already visited Rangamati in winter, we advice to go there again in monsoon; you will feel the difference of nature yourself. 
</p>
          </div>
        </div>
      </div>     
    </div>

  </div>


  <div>
  	<a href="#" class="previous round"><b>&laquo;</b></a>
  	<a href="#" style=" color:black; "><b>1</b></a>
  	<a href="#"><b>2</b></a>
  	<a href="#"><b>3</b></a>
	<a href="#" class="next round"><b>&raquo;</b></a>
  </div>
</div>

<div class="container">
    <section style="height: 15px;"></section>
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


</body>
</html>
