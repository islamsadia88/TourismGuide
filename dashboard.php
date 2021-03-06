<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
    header("Location: index.php");
    exit;
}

// select loggedin users detail
$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);


// get userName
$userName=mysql_query("SELECT userName FROM users WHERE userId=".$_SESSION['user']);
$userNameRow=mysql_fetch_array($userName);


// NOT WORKING NOW
$userRealName=mysql_query("SELECT realName FROM users natural join user_details WHERE userName=".$userName);
$userRealNameRow=mysql_fetch_row($userRealName);


?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Welcome - <?php echo $userRow['userEmail']; ?></title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="fontawesome/css/font-awesome.css">
        <style>
            body {
                background: #F1F3FA;
            }

            /* Profile container */
            .profile {
                margin: 20px 0;
            }

            /* Profile sidebar */
            .profile-sidebar {
                padding: 20px 0 10px 0;
                background: #fff;
            }

            .profile-userpic img {
                float: none;
                margin: 0 auto;
                width: 50%;
                height: 50%;
                -webkit-border-radius: 50% !important;
                -moz-border-radius: 50% !important;
                border-radius: 50% !important;
            }

            .profile-usertitle {
                text-align: center;
                margin-top: 20px;
            }

            .profile-usertitle-name {
                color: #5a7391;
                font-size: 16px;
                font-weight: 600;
                margin-bottom: 7px;
            }

            .profile-usertitle-job {
                text-transform: uppercase;
                color: #5b9bd1;
                font-size: 12px;
                font-weight: 600;
                margin-bottom: 15px;
            }

            .profile-userbuttons {
                text-align: center;
                margin-top: 10px;
            }

            .profile-userbuttons .btn {
                text-transform: uppercase;
                font-size: 11px;
                font-weight: 600;
                padding: 6px 15px;
                margin-right: 5px;
            }

            .profile-userbuttons .btn:last-child {
                margin-right: 0px;
            }

            .profile-usermenu {
                margin-top: 30px;
            }

            .profile-usermenu ul li {
                border-bottom: 1px solid #f0f4f7;
            }

            .profile-usermenu ul li:last-child {
                border-bottom: none;
            }

            .profile-usermenu ul li a {
                color: #93a3b5;
                font-size: 14px;
                font-weight: 400;
            }

            .profile-usermenu ul li a i {
                margin-right: 8px;
                font-size: 14px;
            }

            .profile-usermenu ul li a:hover {
                background-color: #fafcfd;
                color: #5b9bd1;
            }

            .profile-usermenu ul li.active {
                border-bottom: none;
            }

            .profile-usermenu ul li.active a {
                color: #5b9bd1;
                background-color: #f6f9fb;
                border-left: 2px solid #5b9bd1;
                margin-left: -2px;
            }

            /* Profile Content */
            .profile-content {

            }







            body{ background: #fafafa;}
            .widget-area.blank {
                background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                -ms-box-shadow: none;
                -o-box-shadow: none;
                box-shadow: none;
                margin-top: 0em;
                padding-bottom: 1em;
            }
            body .no-padding {
                padding: 0;
            }
            .widget-area {
                background-color: #fff;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                -ms-border-radius: 4px;
                -o-border-radius: 4px;
                border-radius: 4px;
                -webkit-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
                -moz-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
                -ms-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
                -o-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
                box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
                float: left;
                margin-top: 30px;
                padding: 25px 30px;
                position: relative;
                width: 100%;
            }
            .status-upload {
                background: none repeat scroll 0 0 #f5f5f5;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                -ms-border-radius: 4px;
                -o-border-radius: 4px;
                border-radius: 4px;
                float: left;
                width: 100%;
            }
            .status-upload form {
                float: left;
                width: 100%;
            }
            .status-upload form textarea {
                background: none repeat scroll 0 0 #fff;
                border: medium none;
                -webkit-border-radius: 4px 4px 0 0;
                -moz-border-radius: 4px 4px 0 0;
                -ms-border-radius: 4px 4px 0 0;
                -o-border-radius: 4px 4px 0 0;
                border-radius: 4px 4px 0 0;
                color: #777777;
                float: left;
                font-family: Lato;
                font-size: 14px;
                height: 6em;
                letter-spacing: 0.3px;
                padding: 20px;
                width: 100%;
                resize:vertical;
                outline:none;
                border: 1px solid #F2F2F2;
            }

            .status-upload ul {
                float: left;
                list-style: none outside none;
                margin: 0;
                padding: 0 0 0 15px;
                width: auto;
            }
            .status-upload ul > li {
                float: left;
            }
            .status-upload ul > li > a {
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                -ms-border-radius: 4px;
                -o-border-radius: 4px;
                border-radius: 4px;
                color: #777777;
                float: left;
                font-size: 14px;
                height: 30px;
                line-height: 30px;
                margin: 10px 0 10px 10px;
                text-align: center;
                -webkit-transition: all 0.4s ease 0s;
                -moz-transition: all 0.4s ease 0s;
                -ms-transition: all 0.4s ease 0s;
                -o-transition: all 0.4s ease 0s;
                transition: all 0.4s ease 0s;
                width: 30px;
                cursor: pointer;
            }
            .status-upload ul > li > a:hover {
                background: none repeat scroll 0 0 #606060;
                color: #fff;
            }
            .status-upload form button {
                border: medium none;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                -ms-border-radius: 4px;
                -o-border-radius: 4px;
                border-radius: 4px;
                color: #fff;
                float: right;
                font-family: Lato;
                font-size: 14px;
                letter-spacing: 0.3px;
                margin-right: 9px;
                margin-top: 9px;
                padding: 6px 15px;
            }
            .dropdown > a > span.green:before {
                border-left-color: #2dcb73;
            }
            .status-upload form button > i {
                margin-right: 7px;
            }

            .page-header{
                border-bottom: none;
                margin-top: 1em;
            }







            /*
            .panel-shadow {
                box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
            }
            */

            .panel-white {
                border: 1px solid #dddddd;
            }
            .panel-white  .panel-heading {
                color: #333;
                background-color: #fff;
                border-color: #ddd;
            }
            .panel-white  .panel-footer {
                background-color: #fff;
                border-color: #ddd;
            }

            .post .post-heading {
                height: 95px;
                padding: 20px 15px;
            }
            .post .post-heading .avatar {
                width: 60px;
                height: 60px;
                display: block;
                margin-right: 15px;
            }
            .post .post-heading .meta .title {
                margin-bottom: 0;
            }
            .post .post-heading .meta .title a {
                color: black;
            }
            .post .post-heading .meta .title a:hover {
                color: #aaaaaa;
            }
            .post .post-heading .meta .time {
                margin-top: 8px;
                color: #999;
            }
            .post .post-image .image {
                width: 100%;
                height: auto;
            }
            .post .post-description {
                padding: 15px;
            }
            .post .post-description p {
                font-size: 14px;
            }
            .post .post-description .stats {
                margin-top: 20px;
            }
            .post .post-description .stats .stat-item {
                display: inline-block;
                margin-right: 15px;
            }
            .post .post-description .stats .stat-item .icon {
                margin-right: 8px;
            }
            .post .post-footer {
                border-top: 1px solid #ddd;
                padding: 15px;
            }
            .post .post-footer .input-group-addon a {
                color: #454545;
            }
            .post .post-footer .comments-list {
                padding: 0;
                margin-top: 20px;
                list-style-type: none;
            }
            .post .post-footer .comments-list .comment {
                display: block;
                width: 100%;
                margin: 20px 0;
            }
            .post .post-footer .comments-list .comment .avatar {
                width: 35px;
                height: 35px;
            }
            .post .post-footer .comments-list .comment .comment-heading {
                display: block;
                width: 100%;
            }
            .post .post-footer .comments-list .comment .comment-heading .user {
                font-size: 14px;
                font-weight: bold;
                display: inline;
                margin-top: 0;
                margin-right: 10px;
            }
            .post .post-footer .comments-list .comment .comment-heading .time {
                font-size: 12px;
                color: #aaa;
                margin-top: 0;
                display: inline;
            }
            .post .post-footer .comments-list .comment .comment-body {
                margin-left: 50px;
            }
            .post .post-footer .comments-list .comment > .comments-list {
                margin-left: 50px;
            }




            #result{
                position: absolute;
                z-index: 999;
                top: 100%;
                left: 0;
                background-color: #e7e7e7;
                min-height: 0em;
                padding-right: 0em;
                padding-left: 0em;
            }
            #searchBar, #result{
                box-sizing: border-box;
            }
            /* Formatting result items */
            #result p{
                margin: 0;
                padding: 7px 10px;
                border: 1px solid #CCCCCC;
                border-top: none;
                cursor: pointer;
            }
            #result p:hover{
                background: #f2f2f2;
            }





            .stylish-input-group .input-group-addon{
                background: white !important;
            }
            .stylish-input-group .form-control{
                border-right:0;
                box-shadow:0 0 0;
                border-color:#ccc;
            }
            .stylish-input-group button{
                border:0;
                background:transparent;
            }


            .navbar-login
            {
                width: 305px;
                padding: 10px;
                padding-bottom: 0px;
            }

            .navbar-login-session
            {
                padding: 10px;
                padding-bottom: 0px;
                padding-top: 0px;
            }

            .icon-size
            {
                font-size: 87px;
            }

            .postDeleteButton{
                background-color: #fff;
                color: #dedede;
                border: 0px;
                border-radius:0%;
            }

        </style>
    </head>
    <body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Research Base</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Downloads</a></li>
                    <li><a href="users.php">Users</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-envelope"></span></a></li>
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-bell"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>



                        <ul class="dropdown-menu">
                            <li>
                                <div class="navbar-login">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p class="text-center">
                                                <span class="glyphicon glyphicon-user icon-size"></span>
                                            </p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p class="text-left"><strong><?php echo $userRow['userName']; ?></strong></p>
                                            <p class="text-left small"><?php echo $userRow['userEmail']; ?></p>
                                            <p class="text-left">
                                                <a href="#" class="btn btn-primary btn-block btn-sm">Profile</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider navbar-login-session-bg"></li>
                            <li><a href="settings.php">Account Settings <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="#">User stats <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="messaging.php">Messages <span class="badge pull-right"> 42 </span></a></li>
                            <li class="divider"></li>
                            <li><a href="stats.php">Stats <span class="glyphicon glyphicon-heart pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php?logout">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>



                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div id="wrapper">

        <div class="container">

            <div class="page-header">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group  stylish-input-group">
                            <input id="searchBar" type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-addon">
								<button type="submit">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
                            <div class="col-xs-12" id="result" class="searchBarResults"></div>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div>
            </div>


            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">
                            <a href="#">
                                <img src="images/placeholder_profile_photo.png" class="img-responsive" alt="">
                            </a>
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                <?php echo $userNameRow['userName']; ?>
                            </div>
                            <div class="profile-usertitle-job">
                                Researcher
                            </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-success btn-sm" id="changeProfilePicButton">Edit</button>
                            <a href="messaging.php" class="btn btn-danger btn-sm">Message</a>
                        </div>
                        <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li class="active">
                                    <a href="#">
                                        <i class="glyphicon glyphicon-home"></i>
                                        Overview </a>
                                </li>
                                <li>
                                    <a href="settings.php">
                                        <i class="glyphicon glyphicon-user"></i>
                                        Account Settings </a>
                                </li>
                                <li>
                                    <a href="tasks.php" target="_blank">
                                        <i class="glyphicon glyphicon-ok"></i>
                                        Tasks </a>
                                </li>
                                <li>
                                    <a href="projects.php" target="_blank">
                                        <i class="glyphicon glyphicon-sunglasses"></i>
                                        Projects </a>
                                </li>
                                <li>
                                    <a href="papers.php" target="_blank">
                                        <i class="glyphicon glyphicon-book"></i>
                                        Papers </a>
                                </li>
                                <li>
                                    <a href="help.php">
                                        <i class="glyphicon glyphicon-flag"></i>
                                        Help </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="profile-content">
                        <div class="col-xs-12">
                            <div class="widget-area no-padding blank">
                                <div class="status-upload">
                                    <form action="post_submitter.php" method="post">
                                        <textarea name="statusText" placeholder="What are you doing right now?" ></textarea>
                                        <ul>
                                            <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="fa fa-music"></i></a></li>
                                            <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
                                            <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Sound Record"><i class="fa fa-microphone"></i></a></li>
                                            <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
                                        </ul>
                                        <button type="submit" name="btn-submitStatus" class="btn btn-success green"><i class="fa fa-share"></i> Share</button>
                                    </form>
                                </div><!-- Status Upload  -->
                            </div><!-- Widget Area -->
                        </div>



                        <?php
						
						function getAgo($dbtime){
							 $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
                            $lengths = array("60","60","24","7","4.35","12","10");

                            $now = time();
                            $difference = $now - strtotime($dbtime);
                            $tense = "ago";

                            for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
                                $difference /= $lengths[$j];
                            }

                            $difference = round($difference);

                            if($difference != 1) {
                                $periods[$j].= "s";
                            }
                            return "".$difference ." ". $periods[$j] . " ago";
						}


                        // Get user posts
                        $post=mysql_query("SELECT * FROM post_table WHERE user_name='". $userNameRow['userName'] ."' order by post_time DESC");
						$post_data = array();

						while( $postRow=mysql_fetch_array($post) )
							$post_data[] = $postRow;
						
					
						
						

                        // Alternating method
                        $i = 0;
                        foreach( $post_data as $postRow ){
                            $i = $i + 1;

                            // get the post_id
                            $currentPostId = $postRow['post_id'];

                            // Get like count
                            $postLiker=mysql_query("SELECT c.clike FROM (SELECT post_id, COUNT(like_user_name) as clike FROM `post_likers` WHERE 1 GROUP BY post_id) c WHERE c.post_id = " . $currentPostId );
                            $postLikerCount=mysql_fetch_array($postLiker);
                            $postLikerCountDisplay = ( $postLikerCount['clike'] == NULL ) ? 0 : $postLikerCount['clike'];


                            // Get the elasped time for post
                            $timeTillPosted = getAgo($postRow['post_time']);


                            
							
															
						// Get post comments
						$postCommentsList = mysql_query("SELECT * FROM comment_table WHERE post_id='". $currentPostId ."'");
						$post_comment_data = array();
						
						while( $postCommentRow=mysql_fetch_array($postCommentsList) )
							$post_comment_data[] = $postCommentRow;
						


                                echo "<div class=\"col-sm-6\">";
                                echo " <div class=\"panel panel-white post panel-shadow\">
                                <div class=\"post-heading\">
                                    <div class=\"pull-left image\">
                                        <img src=\"http://bootdey.com/img/Content/user_1.jpg\" class=\"img-circle avatar\" alt=\"user profile image\">
                                    </div>
                                    <div class=\"pull-left meta\">
                                        <div class=\"title h5\">
                                            <a href=\"#\"><b>" . $postRow['user_name'] ."</b></a>
                                            made a post.
                                        </div>
                                        <h6 class=\"text-muted time\">" . $timeTillPosted . "</h6>
                                    </div>
                                    <button class=\"pull-right btn btn-danger postDeleteButton\" data-toggle=\"modal\" data-target=\"#myModal\">
                                        <i class=\"glyphicon glyphicon-remove\"></i>
                                    </button>
                                </div>
                                <div class=\"post-description\">
                                    <p>" . $postRow['post_text'] . "</p>
                                    <div class=\"stats\">
                                        <a href=\"#\" class=\"btn btn-default stat-item\">
                                            <i class=\"fa fa-thumbs-up icon\"></i>" . $postLikerCountDisplay ."
                                        </a>
                                        <a href=\"#\" class=\"btn btn-default stat-item\">
                                            <i class=\"fa fa-share icon\"></i>12
                                        </a>
                                    </div>
                                </div>
                                <div class=\"post-footer\">
								<form action=\"comment_submitter.php\" method=\"post\">
                                    <div class=\"input-group\">
                                        <input name=\"commentText\" class=\"form-control comment_input_area\" placeholder=\"Add a comment\" type=\"text\">
										<input name=\"commentPostId\"  value=\"". $postRow['post_id'] ."\" type=\"hidden\">
                                        <span class=\"input-group-addon\">
								<a href=\"#\"><i class=\"fa fa-edit\"></i></a>
							</span>
							</form>
                                    </div>";

									
									foreach( $post_comment_data as $postCommentRow ){
										//echo "<script>alert(\"Working " .  $currentPostId . "\")</script>";
										
										// Get comment of comments
										$CommentCommentsList = mysql_query("SELECT * FROM comment_of_comment WHERE parent_comment_id='". $postCommentRow['comment_id'] ."'");
										$comment_comment_data = array();
										
										while( $CommentCommentRow=mysql_fetch_array($CommentCommentsList) )
											$comment_comment_data[] = $CommentCommentRow;
										
										
										echo "<ul class=\"comments-list\">";
										echo "<li class=\"comment\">
                                            <a class=\"pull-left\" href=\"#\">
                                                <img class=\"avatar\" src=\"images/placeholder_profile_photo.png\" alt=\"avatar\">
                                            </a>
                                            <div class=\"comment-body\">
                                                <div class=\"comment-heading\">
                                                    <h4 class=\"user\">". $postCommentRow['user_name'] ."</h4>
                                                    <h5 class=\"time\">". getAgo($postCommentRow['comment_time']) ."</h5>
                                                </div>
                                                <p>". $postCommentRow['comment_text'] ."</p>
                                                <div class=\"pad-ver\">
                                                    <div class=\"btn-group\">
                                                        <a class=\"btn btn-sm btn-default btn-hover-success\" href=\"#\"><i class=\"fa fa-thumbs-up\"></i></a>
                                                        <a class=\"btn btn-sm btn-default btn-hover-danger\" href=\"#\"><i class=\"fa fa-thumbs-down\"></i></a>
                                                    </div>
                                                    <a class=\"btn btn-sm btn-default btn-hover-primary\" href=\"#\">Comment</a>
                                                </div>
                                            </div>";
										
										foreach( $comment_comment_data as $CommentCommentRow ){
                                            echo "<ul class=\"comments-list\">
                                                <li class=\"comment\">
                                                    <a class=\"pull-left\" href=\"#\">
                                                        <img class=\"avatar\" src=\"http://bootdey.com/img/Content/user_3.jpg\" alt=\"avatar\">
                                                    </a>
                                                    <div class=\"comment-body\">
                                                        <div class=\"comment-heading\">
                                                            <h4 class=\"user\">". $CommentCommentRow['user_name'] ."</h4>
                                                            <h5 class=\"time\">". getAgo($CommentCommentRow['comment_time']) ."</h5>
                                                        </div>
                                                        <p>". $CommentCommentRow['comment_text'] ."</p>
                                                    </div>
                                                    <div class=\"pad-ver\">
                                                        <div class=\"btn-group\">
                                                            <a class=\"btn btn-sm btn-default btn-hover-success\" href=\"#\"><i class=\"fa fa-thumbs-up\"></i></a>
                                                            <a class=\"btn btn-sm btn-default btn-hover-danger\" href=\"#\"><i class=\"fa fa-thumbs-down\"></i></a>
                                                        </div>
                                                        <a class=\"btn btn-sm btn-default btn-hover-primary\" href=\"#\">Comment</a>
                                                    </div>
                                                </li>
                                            </ul>";
											}
                                       echo "</li>";
									   echo "</ul>";	
																		
								}           
                                
                                echo "</div></div>";
                                echo "</div>";
                            
                        }
                        ?>
                    </div>


                </div>
            </div>

        </div>


    </div>

    </div>



    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Post Delete</h4>
                </div>
                <div class="modal-body">
                    Do you want to delete the post?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $("[data-toggle=tooltip]").tooltip();
        });


        $(document).ready(function(){
            $('#searchBar').on("keyup input", function(){
                /* Get input value on change */
                var term = $(this).val();
                var resultDropdown = $("#result");
                if(term.length){
                    $.get("backend-search.php", {query: term}).done(function(data){
                        // Display the returned data in browser
                        resultDropdown.html(data);
                    });
                } else{
                    resultDropdown.empty();
                }
            });

            // Set search input value on click of result item
            $("#result").on("click", "p", function(){
                $("#searchBar").val($(this).text());
                $("#result").empty();
            });
        });

		
		$('.comment_input_area').keypress(function (e) {
			  if (e.which == 13) {
				$(this).closest('form').submit();
				return false;    //<---- Add this line
			  }
		});
		
		$("#changeProfilePicButton").on('click', function(){
			window.location = "imageupload.php";    
		});
		
		
		// Get the post on which delete button was clicked
		$('.postDeleteButton').on('click', function(){
			var pid = $(this).closest('li').find('input:hidden[name=thisPostId]').val();
			console.log("pid:" + pid);
			
			$.post( 
                  "post_deleter.php",
                  { postdeleteid: pid },
                  function(data) {
                     //$('#stage').html(data);
					 console.log("NEW: " + data);
					 location.reload();
                  }
               );
		});

		
	
    </script>
	
	<script async='async' src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js' type='text/javascript'>
	MathJax.Hub.Config({
	 extensions: ["tex2jax.js","TeX/AMSmath.js","TeX/AMSsymbols.js"],
	 jax: ["input/TeX", "output/HTML-CSS"],
	 tex2jax: {
		 inlineMath: [ ['$','$'], ["\\(","\\)"] ],
		 displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
	 },
	 "HTML-CSS": { availableFonts: ["TeX"] }
	});
	</script> 

    </body>
    </html>
<?php ob_end_flush(); ?>