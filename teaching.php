<?php
    include('dbconnector.php');

    $firstName = $_SESSION['title']." ".$_SESSION['firstName'];
    $fullName = $_SESSION['title']." ".$_SESSION['firstName']." ".$_SESSION['lastName'];
    $_SESSION['fullName'] = $fullName;

    $viewCourse = $_SESSION['viewCourse'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
    content="Staff Leadership Training Institute, Leadership, Staff Leadership Training, OCEO Leadership Training, Staff Leadership, Training Institute, Teaching, Progress Monitoring">
    <title>Staff Leadership Training Institute</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="">
    <!--Start Top navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <a class="navbar-brand" href="">
            <span onclick="openNav()" class=" btn d-inline d-md-none"><i class="fas fa-arrow-right"></i></span>
            <img src="img/logo.png" height="35px" width="50px" alt="">
            <span class="title ml-2 d-none d-md-inline">Staff Leadership Training Institute</span>
            <span class="title ml-2 d-inline d-md-none">STLI</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <ul class="navbar-nav ml-auto">

                <li class="nav-item active  d-flex align-items-center">
                    <a class="nav-link" href="">Resources
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item right-border pr-2 mr-2">
                    <a class="nav-link" href="">
                        <img src="img/progress.png" height="40px" width=" 40px" alt=""> Your Progress</a>
                </li>

                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="">
                        <i class="fas fa-envelope-open-text"> </i>
                        <sup class="badge badge-pill badge-primary">7</sup>
                        <span class="d-lg-none">Messages</span>
                    </a>
                </li>

                <li class="nav-item d-flex align-items-center mr-2">
                    <a class="nav-link" href="">
                        <i class="fas fa-bell"></i>
                        <sup class="badge badge-pill badge-danger">7</sup>
                        <span class="d-lg-none">Notifications</span>
                    </a>
                </li>

                <li class="nav-item staff-name  d-flex justify-content-between align-items-center">
                    <div>

                        <a class="nav-link" href="logout.php" role="button" data-toggle="popover" data-placement="bottom"
                            data-content="<?php echo $_SESSION['rank']; ?>">
                            <img src="<?php echo $_SESSION['photo']; ?>" class="profile-img mr-2" height="40px"
                                width=" 40px" alt="">
                            <?php echo $firstName; ?></a>

                    </div>
                    <i class="fas fa-chevron-down"></i>
                </li>

            </ul>
        </div>
    </nav>

    <!--/.End Top navbar-->

    <!--Start Side Navigation-->
    <div id="" class="sideNav">

        <div class="profile w-100 text-center mb-2">
            <img src="<?php echo $_SESSION['photo']; ?>" class="side-profile profile-img" height="50px" width=" 50px"
                alt="">

            <div class="mt-2 side-profile-name"><?php echo $firstName; ?></div>
            <small class="side-profile-rank text-muted"><?php echo $_SESSION['rank']; ?></small>

        </div>
        <div class="list-group list-group-flush">

            <a href="teaching.php "
                class="features  active text-center list-group-item list-group-item-action d-flex flex-column justify-content-center align-items-center">
                <i class="fas fa-chalkboard"></i>
                <p class="features-text">Teaching</p>
            </a>

            <a href="training.php"
                class="features  text-center list-group-item list-group-item-action d-flex flex-column justify-content-center align-items-center">
                <i class="fas fa-stream"></i>
                <p class="features-text">Training</p>
            </a>

            <a href="mentoring.php"
                class="features  text-center list-group-item list-group-item-action d-flex flex-column justify-content-center align-items-center">
                <i class="fas fa-chalkboard-teacher"></i>
                <p class="features-text">Mentoring (Flight365)</p>
            </a>


            <a href="progress.php"
                class="features text-center list-group-item list-group-item-action d-flex flex-column justify-content-center align-items-center">
                <i class="fas fa-spinner"></i>
                <p class="features-text">Progress Monitoring</p>
            </a>

        </div>
    </div>
    <!--End Side Navigation-->

    <!--Small screen animated side navigation bar-->
    <div id="smSidebar" class="mySidebar">


        <div class="sideHeader">
            <div class="d-flex d justify-content-between  align-items-start">
                <div class="pl-2 pt-3">SLTI</div>
                <div> <a href="javascript:void(0)" class="closebtn w-100 " onclick="closeNav()">&times;</a></div>
            </div>
            <img src="img/pic.png" class=" profile-img" height="50px" width=" 50px" alt="">

            <div class=" ">Brother Wilfred</div>
            <small class="">Non-Management</small>
        </div>

        <div class="list-group list-group-flush">

            <a href="teaching.php "
                class="features  active text-center  list-group-item list-group-item-action d-flex flex-column justify-content-center align-items-center">
                <i class="fas fa-chalkboard"></i>
                <p class="features-text">Teaching</p>
            </a>

            <a href="training.php"
                class="features  text-center  list-group-item list-group-item-action d-flex flex-column justify-content-center align-items-center">
                <i class="fas fa-stream"></i>
                <p class="features-text">Training</p>
            </a>

            <a href="mentoring.php"
                class="features  text-center  list-group-item list-group-item-action d-flex flex-column justify-content-center align-items-center">
                <i class="fas fa-chalkboard-teacher"></i>
                <p class="features-text">Mentoring (Flight365)</p>
            </a>


            <a href="progress.php"
                class="features text-center list-group-item list-group-item-action d-flex flex-column justify-content-center align-items-center">
                <i class="fas fa-spinner"></i>
                <p class="features-text">Progress Monitoring</p>
            </a>

        </div>
    </div>


    <!--Start main Content -->
    <div class="main-content  mr-1">
        <!--Start Row-->
        <div class="row justify-content-between">
            <!--Start Curriculum Content -->
            <div id="curriculum-content" class="card col-lg-8 col-xl-9  bg-white">
                <!--start Video Content-->
                <div id="video-wrapper" class=" w-100  mt-4">
                    <video id="courseVideo" src="vid/promo.mp4" controls></video>

                    <!--End Video Content-->

                    <!--Start Curriculum Content Tab-->

                    <ul class="nav nav-tabs mt-1 mt-md-2 " id="myTab" role="tablist">
                        <li class="nav-item d-block d-lg-none">
                            <a class="nav-link" id="course-tab" data-toggle="tab" href="#course" role="tab"
                                aria-controls="course" aria-selected="false">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab"
                                aria-controls="info" aria-selected="true">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab"
                                aria-controls="comments" aria-selected="false">Comments</a>
                        </li>
                    </ul>
                </div>


                <div class="tab-content" id="myTabContent">

                    <!--Start Tab content for Info tab-->
                    <div class="tab-pane fade show active m-4" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <h4>Leadership Level Overview</h4>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam rem nemo officia ab delectus
                            doloribus?</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis, nostrum!</p>

                        <h6>Lorem, Ipsum Dolor.</h6>
                        <hr>
                        <ul>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit.</li>
                            <li>consectetur adipisicing elit.</li>
                        </ul>
                        <h6>Lorem Consectetur Adipisicing</h6>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloribus optio vero id
                            porro
                            perspiciatis omnis facilis commodi alias fugit! Fuga, laboriosam quasi!
                            Atque modi similique necessitatibus magni non eum?</p>
                    </div>
                    <!--End Tab content for Info tab-->

                    <!--Start Tab content for comment tab -->
                    <div class="tab-pane  fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
                        <!--Add Your Comments-->
                        <div class="col-12 mb-5  mt-4">
                            <input id="commentor" type="text" name="commentor" value=" " class="d-none">
                            <textarea class="form-control comment-area  p-2 " id="newComment" name="newComment"
                                placeholder="Add your comment " cols="30" rows="2" onclick="touchComment()"></textarea>
                            <a type="submit" name="addComment"
                                class="btn-sm btn-white my-2 comment-btn p-2 float-right commentDetails"
                                onclick="addComment()" id="addComment">Post Comment</a>
                        </div>

                        <div id="posted-comments">
                            <?php 
								  $viewCourse = $_SESSION['viewCourse'];		
									$commentSql = $conn->query("SELECT staff.staff_id, staff.title, staff.first_name, staff.last_name, comments.comments, 
                                    staff.passport FROM comments INNER JOIN staff ON comments.staff_id = staff.staff_id WHERE comments.course_code = '$viewCourse' ORDER BY comments.comment_id DESC");
									while($data = $commentSql->fetch_assoc() ) {
                                        $name = $data['title']." ".$data['first_name']." ".$data['last_name'];
                                        $picPath = 'img/passports/'.$data['staff_id'].".".$data['passport'];

										echo  '<div class="d-flex flex-row container-fluid mb-1">
												   <div class="pic">
														<img class="rounded-circle  mr-3" src="'.$picPath.'" height="40px" width="40px" alt="">
												   </div>
													<div class="flex-grow-1">
													   <div class=" comment-box w-100  p-2">
														   <span class="commentor-name mr-2 mr-md-3 ">'.$name.'</span>'.$data['comments'].'
													   </div>
													<div class="col-12 timeAgo"><time class="date timeago" datetime=""></time>  </div>
													</div>
											  </div>';
										}			
						  		 ?>

                        </div>
                    </div>
                    <!--End Tab content for comment tab -->


                    <!--Start Tab content for Curricullum tab-->
                    <div class="tab-pane fade m-4 d-block d-lg-none" id="course" role="tabpanel"
                        aria-labelledby="curricullum-tab">
                        <div class="list-group list-group-flush">
                            <!--Start Inuagural Lectures-->
                            <!--Start Inuagural Lectures-->
                            <li data-toggle="collapse" data-target="#inuagural-lectures"
                                class="teaching-level-item  list-group-item bg-light  d-flex justify-content-between align-items-center">
                                Inuagural Lectures
                                <span class="">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </li>
                            <?php
      			    	$levelCode =  'GL1';
         				 $sql = "SELECT * FROM courses WHERE level_code = '$levelCode'";
         				 $data = $conn->query($sql);  
        			?>

                            <div id="inuagural-lectures" class="list-group list-group-flush">
                                <?php
       					 		 while($row = mysqli_fetch_assoc($data)) {
          				?>
                                <button type="button" id="<?php echo $row["course_code"]; ?>"
                                    class="list-group-item list-group-item-action"
                                    onclick="courseContent(event, this);">
                                    <div class=" d-flex justify-content-start align-items-center">
                                        <i class="fas fa-play-circle fa-sm mr-2 text-muted"></i>
                                        <?php echo $row["course_title"]; ?>
                                    </div>
                                    <small class="text-muted ml-4">
                                        <?php echo $row["course_code"]; ?>
                                    </small>
                                </button>
                                <?php
             				 }
             			?>
                            </div>
                            <!--End Inuagural Lectures-->

                            <!--Start Non-Management-->
                            <li data-toggle="collapse" data-target="#non-management"
                                class="teaching-level-item  list-group-item bg-light d-flex justify-content-between align-items-center">
                                Non-Management
                                <span class="">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </li>
                            <?php
         					   $levelCode =  'LL1';
         			 		  $sql = "SELECT * FROM courses WHERE level_code = '$levelCode'";
          			 		  $data = $conn->query($sql);  
        				?>

                            <div id="non-management" class="collapse list-group list-group-flush">
                                <?php
         					while($row = mysqli_fetch_assoc($data)) {
         				?>
                                <button type="button" id="<?php echo $row["course_code"]; ?>"
                                    class="list-group-item list-group-item-action"
                                    onclick="courseContent(event, this);">
                                    <div class=" d-flex justify-content-start align-items-center">
                                        <i class="fas fa-play-circle fa-sm mr-2 text-muted"></i>
                                        <?php echo $row["course_title"]; ?>
                                    </div>
                                    <small class="text-muted ml-4">
                                        <?php echo $row["course_code"]; ?>
                                    </small>
                                </button>
                                <?php
            				 }
             			 ?>
                            </div>
                            <!--End Non-Management-->

                            <!--Start  Supervisory Staff-->
                            <li data-toggle="collapse" data-target="#supervisory-staff"
                                class="teaching-level-item list-group-item bg-light d-flex justify-content-between align-items-center">
                                Supervisory Staff
                                <span class="">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </li>
                            <?php
         						$levelCode =  'LL2';
          						$sql = "SELECT * FROM courses WHERE level_code = '$levelCode'";
          						$data = $conn->query($sql);  
        				?>

                            <div id="supervisory-staff" class="collapse list-group list-group-flush">
                                <?php
         						while($row = mysqli_fetch_assoc($data)) {
          				?>
                                <button type="button" id="<?php echo $row["course_code"]; ?>"
                                    class="list-group-item list-group-item-action"
                                    onclick="courseContent(event, this); ">
                                    <div class=" d-flex justify-content-start align-items-center">
                                        <i class="fas fa-play-circle fa-sm mr-2 text-muted"></i>
                                        <?php echo $row["course_title"]; ?>
                                    </div>
                                    <small class="text-muted ml-4">
                                        <?php echo $row["course_code"]; ?>
                                    </small>
                                </button>
                                <?php
            		 		 }
             			 ?>
                            </div>
                            <!--End  Supervisory Staff-->

                            <!--Start  Management-->
                            <li data-toggle="collapse" data-target="#management"
                                class="teaching-level-item list-group-item bg-light d-flex justify-content-between align-items-center">
                                Management
                                <span class="">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </li>
                            <?php
         						 $levelCode =  'LL3';
        						  $sql = "SELECT * FROM courses WHERE level_code = '$levelCode'";
         						 $data = $conn->query($sql);  
        				?>

                            <div id="management" class="collapse list-group list-group-flush">
                                <?php
         							 while($row = mysqli_fetch_assoc($data)) {
         				 ?>
                                <button type="button" id="<?php echo $row["course_code"]; ?>"
                                    class="list-group-item list-group-item-action"
                                    onclick="courseContent(event, this);">
                                    <div class=" d-flex justify-content-start align-items-center">
                                        <i class="fas fa-play-circle fa-sm mr-2 text-muted"></i>
                                        <?php echo $row["course_title"]; ?>
                                    </div>
                                    <small class="text-muted ml-4">
                                        <?php echo $row["course_code"]; ?>
                                    </small>
                                </button>
                                <?php
             				 }
              			?>
                            </div>
                            <!--End Management-->

                            <!--Start Mid-Management-->
                            <li data-toggle="collapse" data-target="#mid-management"
                                class="teaching-level-item list-group-item bg-light d-flex justify-content-between align-items-center">
                                Mid-Management
                                <span class="">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </li>
                            <?php
          						$levelCode =  'LL4';
         						$sql = "SELECT * FROM courses WHERE level_code = '$levelCode'";
         					    $data = $conn->query($sql);  
       					?>

                            <div id="mid-management" class="collapse list-group list-group-flush">
                                <?php
         					  while($row = mysqli_fetch_assoc($data)) {
          				?>
                                <button type="button" id="<?php echo $row["course_code"]; ?>"
                                    class="list-group-item list-group-item-action"
                                    onclick="courseContent(event, this);">
                                    <div class=" d-flex justify-content-start align-items-center">
                                        <i class="fas fa-play-circle fa-sm mr-2 text-muted"></i>
                                        <?php echo $row["course_title"]; ?>
                                    </div>
                                    <small class="text-muted ml-4">
                                        <?php echo $row["course_code"]; ?>
                                    </small>
                                </button>
                                <?php
              				}
              			?>
                            </div>
                            <!--End Mid-Management-->

                            <!--Start Senior-Management-->
                            <li data-toggle="collapse" data-target="#senior-management"
                                class="teaching-level-item list-group-item bg-light d-flex justify-content-between align-items-center">
                                Senior-Management
                                <span class="">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </li>
                            <?php
         			 			$levelCode =  'LL5';
        			  			$sql = "SELECT * FROM courses WHERE level_code = '$levelCode'";
          						$data = $conn->query($sql);  
       			 	    ?>

                            <div id="senior-management" class="collapse list-group list-group-flush">
                                <?php
         					 while($row = mysqli_fetch_assoc($data)) {
         				?>
                                <button type="button" id="<?php echo $row["course_code"]; ?>"
                                    class="list-group-item list-group-item-action"
                                    onclick="courseContent(event, this); ">
                                    <div class=" d-flex justify-content-start align-items-center">
                                        <i class="fas fa-play-circle fa-sm mr-2 text-muted"></i>
                                        <?php echo $row["course_title"]; ?>
                                    </div>
                                    <small class="text-muted ml-4">
                                        <?php echo $row["course_code"]; ?>
                                    </small>
                                </button>
                                <?php
             				 }
             			?>
                            </div>
                            <!--End Senior-Management-->

                            <!--Start Executive-Management-->
                            <li data-toggle="collapse" data-target="#executive-management"
                                class="teaching-level-item list-group-item bg-light d-flex justify-content-between align-items-center">
                                Executive-Management
                                <span class="">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </li>
                            <?php
         						$levelCode =  'LL6';
         						$sql = "SELECT * FROM courses WHERE level_code = '$levelCode'";
         						$data = $conn->query($sql);  
       					?>

                            <div id="executive-management" class="collapse list-group list-group-flush">
                                <?php
         					while($row = mysqli_fetch_assoc($data)) {
         				?>
                                <button type="button" id="<?php echo $row["course_code"]; ?>"
                                    class="list-group-item list-group-item-action"
                                    onclick="courseContent(event, this);">
                                    <div class=" d-flex justify-content-start align-items-center">
                                        <i class="fas fa-play-circle fa-sm mr-2 text-muted"></i>
                                        <?php echo $row["course_title"]; ?>
                                    </div>
                                    <small class="text-muted ml-4">
                                        <?php echo $row["course_code"]; ?>
                                    </small>
                                </button>
                                <?php
             				 }
             			 ?>
                            </div>
                            <!--End Executive-Management-->
                        </div>
                    </div>
                    <!--End Tab content for Curricullum tab-->
                </div>

                <!--End Curriculum Content Tab-->


            </div>
            <!--End Curriculum Content -->

            <!--Start Teaching Curriculum-->
            <div id="teaching-curriculum" class="card d-none d-lg-block col-lg-4 col-xl-3">
                <div class="teaching-curriculum-header card-header bg-primary text-white p-3">
                    Teaching Curriculum
                </div>
                <div class="list-group list-group-flush">
                    <!--Start Inuagural Lectures-->
                    <li data-toggle="collapse" data-target="#inuagural-lectures"
                        class="teaching-level-item  list-group-item bg-light  d-flex justify-content-between align-items-center">
                        Inuagural Lectures
                        <span class="">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </li>
                    <?php
      			    	$levelCode =  'GL1';
         				 $sql = "SELECT * FROM courses WHERE level_code = '$levelCode'";
         				 $data = $conn->query($sql);  
        			?>

                    <div id="inuagural-lectures" class="list-group list-group-flush">
                        <?php
       					 		 while($row = mysqli_fetch_assoc($data)) {
          				?>
                        <button type="button" id="<?php echo $row["course_code"]; ?>"
                            class="list-group-item list-group-item-action" onclick="courseContent(event, this);">
                            <div class=" d-flex justify-content-start align-items-center">
                                <i class="fas fa-play-circle fa-sm mr-2 text-muted"></i>
                                <?php echo $row["course_title"]; ?>
                            </div>
                            <small class="text-muted ml-4">
                                <?php echo $row["course_code"]; ?>
                            </small>
                        </button>
                        <?php
             				 }
             			?>
                    </div>
                    <!--End Inuagural Lectures-->

                    <!--Start Non-Management-->
                    <li data-toggle="collapse" data-target="#non-management"
                        class="teaching-level-item  list-group-item bg-light d-flex justify-content-between align-items-center">
                        Non-Management
                        <span class="">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </li>
                    <?php
         					   $levelCode =  'LL1';
         			 		  $sql = "SELECT * FROM courses WHERE level_code = '$levelCode'";
          			 		  $data = $conn->query($sql);  
        				?>

                    <div id="non-management" class="collapse list-group list-group-flush">
                        <?php
         					while($row = mysqli_fetch_assoc($data)) {
         				?>
                        <button type="button" id="<?php echo $row["course_code"]; ?>"
                            class="list-group-item list-group-item-action" onclick="courseContent(event, this);">
                            <div class=" d-flex justify-content-start align-items-center">
                                <i class="fas fa-play-circle fa-sm mr-2 text-muted"></i>
                                <?php echo $row["course_title"]; ?>
                            </div>
                            <small class="text-muted ml-4">
                                <?php echo $row["course_code"]; ?>
                            </small>
                        </button>
                        <?php
            				 }
             			 ?>
                    </div>
                    <!--End Non-Management-->

                    <!--Start  Supervisory Staff-->
                    <li data-toggle="collapse" data-target="#supervisory-staff"
                        class="teaching-level-item list-group-item bg-light d-flex justify-content-between align-items-center">
                        Supervisory Staff
                        <span class="">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </li>
                    <?php
         						$levelCode =  'LL2';
          						$sql = "SELECT * FROM courses WHERE level_code = '$levelCode'";
          						$data = $conn->query($sql);  
        				?>

                    <div id="supervisory-staff" class="collapse list-group list-group-flush">
                        <?php
         						while($row = mysqli_fetch_assoc($data)) {
          				?>
                        <button type="button" id="<?php echo $row["course_code"]; ?>"
                            class="list-group-item list-group-item-action" onclick="courseContent(event, this); ">
                            <div class=" d-flex justify-content-start align-items-center">
                                <i class="fas fa-play-circle fa-sm mr-2 text-muted"></i>
                                <?php echo $row["course_title"]; ?>
                            </div>
                            <small class="text-muted ml-4">
                                <?php echo $row["course_code"]; ?>
                            </small>
                        </button>
                        <?php
            		 		 }
             			 ?>
                    </div>
                    <!--End  Supervisory Staff-->

                    <!--Start  Management-->
                    <li data-toggle="collapse" data-target="#management"
                        class="teaching-level-item list-group-item bg-light d-flex justify-content-between align-items-center">
                        Management
                        <span class="">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </li>
                    <?php
         						 $levelCode =  'LL3';
        						  $sql = "SELECT * FROM courses WHERE level_code = '$levelCode'";
         						 $data = $conn->query($sql);  
        				?>

                    <div id="management" class="collapse list-group list-group-flush">
                        <?php
         					 while($row = mysqli_fetch_assoc($data)) {
         				 ?>
                        <button type="button" id="<?php echo $row["course_code"]; ?>"
                            class="list-group-item list-group-item-action" onclick="courseContent(event, this);">
                            <div class=" d-flex justify-content-start align-items-center">
                                <i class="fas fa-play-circle fa-sm mr-2 text-muted"></i>
                                <?php echo $row["course_title"]; ?>
                            </div>
                            <small class="text-muted ml-4">
                                <?php echo $row["course_code"]; ?>
                            </small>
                        </button>
                        <?php
             				 }
              			?>
                    </div>
                    <!--End Management-->

                    <!--Start Mid-Management-->
                    <li data-toggle="collapse" data-target="#mid-management"
                        class="teaching-level-item list-group-item bg-light d-flex justify-content-between align-items-center">
                        Mid-Management
                        <span class="">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </li>
                    <?php
          						$levelCode =  'LL4';
         						$sql = "SELECT * FROM courses WHERE level_code = '$levelCode'";
         					    $data = $conn->query($sql);  
       					?>

                    <div id="mid-management" class="collapse list-group list-group-flush">
                        <?php
         					  while($row = mysqli_fetch_assoc($data)) {
          				?>
                        <button type="button" id="<?php echo $row["course_code"]; ?>"
                            class="list-group-item list-group-item-action" onclick="courseContent(event, this);">
                            <div class=" d-flex justify-content-start align-items-center">
                                <i class="fas fa-play-circle fa-sm mr-2 text-muted"></i>
                                <?php echo $row["course_title"];?>
                            </div>
                            <small class="text-muted ml-4">
                                <?php echo $row["course_code"];?>
                            </small>
                        </button>
                        <?php
              				}
              			?>
                    </div>
                    <!--End Mid-Management-->

                    <!--Start Senior-Management-->
                    <li data-toggle="collapse" data-target="#senior-management"
                        class="teaching-level-item list-group-item bg-light d-flex justify-content-between align-items-center">
                        Senior-Management
                        <span class="">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </li>
                    <?php
         			 			$levelCode =  'LL5';
        			  			$sql = "SELECT * FROM courses WHERE level_code = '$levelCode'";
          						$data = $conn->query($sql);  
       			 	    ?>

                    <div id="senior-management" class="collapse list-group list-group-flush">
                        <?php
         					 while($row = mysqli_fetch_assoc($data)) {
         				?>
                        <button type="button" id="<?php echo $row["course_code"]; ?>"
                            class="list-group-item list-group-item-action" onclick="courseContent(event, this); ">
                            <div class=" d-flex justify-content-start align-items-center">
                                <i class="fas fa-play-circle fa-sm mr-2 text-muted"></i>
                                <?php echo $row["course_title"]; ?>
                            </div>
                            <small class="text-muted ml-4">
                                <?php echo $row["course_code"]; ?>
                            </small>
                        </button>
                        <?php
             				 }
             			?>
                    </div>
                    <!--End Senior-Management-->

                    <!--Start Executive-Management-->
                    <li data-toggle="collapse" data-target="#executive-management"
                        class="teaching-level-item list-group-item bg-light d-flex justify-content-between align-items-center">
                        Executive-Management
                        <span class="">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </li>
                    <?php
         						$levelCode =  'LL6';
         						$sql = "SELECT * FROM courses WHERE level_code = '$levelCode'";
         						$data = $conn->query($sql);  
       					?>

                    <div id="executive-management" class="collapse list-group list-group-flush">
                        <?php
         					while($row = mysqli_fetch_assoc($data)) {
         				?>
                        <button type="button" id="<?php echo $row["course_code"]; ?>"
                            class="list-group-item list-group-item-action" onclick="courseContent(event, this);">
                            <div class=" d-flex justify-content-start align-items-center">
                                <i class="fas fa-play-circle fa-sm mr-2 text-muted"></i>
                                <?php echo $row["course_title"]; ?>
                            </div>
                            <small class="text-muted ml-4">
                                <?php echo $row["course_code"]; ?>
                            </small>
                        </button>
                        <?php
             				 }
             			 ?>
                    </div>
                    <!--End Executive-Management-->
                </div>
            </div>
            <!--End Teaching Curriculum-->
        </div>
        <!--end Row-->
    </div>
    <!--End main Content -->

    <!--Footer-->
    <footer class="sticky-footer shadow-sm bg-light text-center font-small mt-4 wow fadeIn">

        <!--Copyright-->
        <div class="footer-copyright text-dark py-1 py-lg-2">
            © 2020 ICT & Programming, OCEO

        </div>
        <!--/.Copyright-->
    </footer>
    <!--/.Footer-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


    <script>
    $(function() {
        $('[data-toggle="popover"]').popover()
    })

    $(document).ready(function() {
        $('#hide-curriculum').on('click', function() {
            $('#teaching-curriculum').toggleClass('collapse-curricullum');
            $('#show-curriculum').css({
                'display': 'block'
            });
        })
    })

    $(document).ready(function() {
        $('#show-curriculum').on('click', function() {
            $('#teaching-curriculum').toggleClass('collapse-curricullum');
            $('#show-curriculum').css({
                'display': 'none'
            });
        })
    })

    //To change the course video as user clicks on various courses
    function courseContent(event) {
        var courseUrl = "vid/" + event.currentTarget.id + ".mp4";
        courseUrl = courseUrl.replace(/ +/g, "");
        courseCode = event.currentTarget.id;
        document.getElementById("courseVideo").src = courseUrl;

        var params = "updateCourseContent=" + 1 + "&courseCode=" + courseCode;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("posted-comments").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "process.php?",  true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xmlhttp.send(params);
    }

    function openNav() {
        document.getElementById("smSidebar").style.display = "block";
        document.getElementById("smSidebar").style.width = "250px";
        document.getElementById("smSidebar").style.backgroundColor = "#fff";


    }

    function closeNav() {
        document.getElementById("smSidebar").style.width = "0";
    }


    //Comment
    function addComment() {
        var comment = document.getElementById("newComment").value;
        document.getElementById("newComment").value = "";
        if (comment == "") {
            document.getElementById("newComment").style.borderColor = "red";
        } else {
            var params = "addComment=" + 1 + "&comment=" + comment;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //Prepend comment
                    var parentComment = document.getElementById("posted-comments");
                    var childComment = document.createElement('div');
                    childComment.innerHTML = this.responseText;

                    // Prepend it
                    parentComment.insertBefore(childComment, parentComment.firstChild);
                }
            };
            xmlhttp.open("POST", "process.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send(params);
        }
    }

    function updateComment() {

        var params = "updateComment=" + 1;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("posted-comments").innerHTML = this.responseText;
                jQuery(document).ready(function() {
                    $("time.timeago").timeago();
                });
            }
        };
        xmlhttp.open("POST", "process.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(params);
    }

    function touchComment() {
        document.getElementById("newComment").style.borderColor = "#cfcfcf";

    }
    </script>
</body>

</html>