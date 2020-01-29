<?php
include("dbconnector.php");



if(isset($_POST['register'])) {
    $title = $conn->real_escape_string($_POST['selectTitle']);
    $firstName = $conn->real_escape_string( $_POST['inputFirstName']);
    $lastName = $conn->real_escape_string($_POST['inputLastName']);
    $email = $conn->real_escape_string($_POST['inputEmail']);
    $dept = $conn->real_escape_string($_POST['selectDept']);
    $rank = $conn->real_escape_string( $_POST['selectRank']);
    $password = $conn->real_escape_string($_POST['inputPassword']);
    $photo = $_FILES['inputPassport'];
    //$country = 'Nigeria';
    //$city = 'Lagos';
    $view_course = 'GL101';



     // Store the IP address 
     $ip = getVisIpAddr();
     $ipdata = @json_decode(file_get_contents( 
         "http://www.geoplugin.net/json.gp?ip=" . $ip)); 


     
     $country = $ipdata->geoplugin_countryName; 
     $city = $ipdata->geoplugin_city;

     // Assign staff to level
     $level = "";
     $levelCode = "";
     

      switch(trim($rank)) {
          case "Non Management": {
          $level = "Leadership Level 1";
          $levelCode = "LL1";
          break;
          }
          case "Supervisory Staff": {
          $level = "Leadership Level 2";
          $levelCode = "LL2";
          break;
          }
          case "Management": {
          $level = "Leadership level 3";
          $levelCode = "LL3";
          break;
          }
          case "Mid-Management": {
          $level = "Leadership level 4";
          $levelCode = "LL4";
          break;
          }
          case "Senior Management":{
          $level = "Leadership level 5";
          $levelCode = "LL5";
          break;
          }
          case "Executive Management": {
          $level = "Leadership level 6";
          $levelCode = "LL6";
          break;
          } 
          default: {
            
          }
      } 


       // Query sltistaff table if staff has been registered before
       $isRegistered = $conn->query("SELECT * FROM staff WHERE email = '$email'");
                 
       if($isRegistered->num_rows == 1) {
            $_SESSION['info'] = 'You have registered before; kindly login';
          header("Location: index.php?Kindly Login. You are registered Already");       
       }

       // Checking and formating photo
       $photoName = $photo['name'];
       $phototmpName = $photo['tmp_name'];
       $photoSize = $photo['size'];
       $photoError = $photo['error'];
       $photoType = $photo['type'];

       $photoExt = explode('.', $photoName);
       $photoActualExt = strtolower(end($photoExt));

       $allowed = array('jpg', 'jpeg', 'png');

       if(in_array($photoActualExt, $allowed)) {
           if($photoError === 0) {
               if($photoSize < 1000000) {
                  // $photoNewName = $email.".".$photoActualExt;
                  // $photoDestination = 'img/passports/'.$photoNewName;
               //  move_uploaded_file($phototmpName, $photoDestination);
               
               } else {
                   header("Location: index.php?Your image is too large");              
               }
           } else {
               header("Location: index.php?Error while uploading your image");           
           }
       } else {
           header("Location: index.php?Images of this type cannot be uploaded");       
       }

       $registerSql =  $conn->query("INSERT INTO staff (title, first_name, last_name, email, dept, rank, level_code, last_course_viewed, password, passport, country, city  ) 
       VALUES ('$title', '$firstName', '$lastName', '$email', '$dept', '$rank', '$levelCode', '$view_course', '$password', '$photoActualExt', '$country', '$city')");

       $IdSql = $conn->query("SELECT staff_id FROM staff ORDER BY staff_id DESC LIMIT 1");
       $data = $IdSql->fetch_assoc();
       $photoNewName = $data['staff_id'].".".$photoActualExt;
       $photoDestination = 'img/passports/'.$photoNewName;
      

        if($registerSql) {
           
            //upload photo into staffphoto folder
         move_uploaded_file($phototmpName, $photoDestination);
         $_SESSION['registered'] = true;
         $_SESSION['login'] = true;
         $_SESSION['staffId'] = $data['staff_id'];
         $_SESSION['title'] = $title;
         $_SESSION['firstName'] = $firstName;
         $_SESSION['lastName'] = $lastName;
         $_SESSION['dept'] = $dept;
         $_SESSION['email'] = $email;
         $_SESSION['levelCode'] = $levelCode;
         $_SESSION['viewCourse'] = $view_course;
         $_SESSION['photo'] = $photoDestination;
         $_SESSION['rank'] = $rank;
        header("Location: teaching.php");  
        }     
        else {
         header("Location: index.php?Error".mysqli_error($conn));       
        }
}

if(isset($_POST['login'])) {
  
    $email =  $conn->real_escape_string($_POST['loginEmail']);
    $password =  $conn->real_escape_string($_POST['loginPassword']);

    $loginSQL =$conn->query("SELECT * FROM staff WHERE email = '$email' AND password ='$password'");

    if($loginSQL->num_rows == 1) {
        $data = $loginSQL->fetch_assoc();
        $_SESSION['login'] = true;
        $_SESSION['staffId'] = $data['staff_id'];
        $_SESSION['title'] = $data['title'];
        $_SESSION['firstName'] = $data['first_name'];
        $_SESSION['lastName'] =  $data['last_name'];
        $_SESSION['dept'] =  $data['dept'];
        $_SESSION['email'] =  $data['email'];
        $_SESSION['levelCode'] =  $data['level_code'];
        $_SESSION['viewCourse'] = $data['last_course_viewed'];
        $_SESSION['rank'] =  $data['rank'];
        $_SESSION['photo'] =  'img/passports/'.$data['staff_id'].".".$data['passport'];

        header("Location: teaching.php");  
    }

    else{
        $_SESSION['info'] = "Wrong Password Or Email";

        header("Location: index.php?Error".mysqli_error($conn)); 
    }

}


//Comment
if(isset($_POST['addComment'])){
    $fullName = $_SESSION['fullName'];
    $staffId = $_SESSION['staffId'];
    $courseCode = $_SESSION['viewCourse'];  
    $replies = 0;
    $comment =  $conn->real_escape_string($_POST['comment']);
   
    $sql = $conn->query("INSERT INTO comments (staff_id, course_code, comments) 
    VALUES ('".$_SESSION['staffId']."', '$courseCode', '$comment')");

    
    $output =  '<div class="d-flex flex-row container-fluid mb-1">
                    <div class="pic">
                         <img class="rounded-circle  mr-3" src="'.$_SESSION['photo'].'" height="40px" width="40px" alt="">
                    </div>
                     <div class="flex-grow-1">
                        <div class=" comment-box w-100  p-2">
                            <span class="commentor-name mr-2 mr-md-3 ">'.$fullName.'</span>'.$comment.'
                        </div>
                     <div class="col-12 timeAgo"></div>
                     </div>
                 </div>';
  
   exit($output);     

    }

    if(isset($_POST['updateComment'])){

        $commentSql = $conn->query("SELECT * FROM comments ORDER BY comments.id DESC");
        $output ="";
        while($$data = $commentSql->fetch_assoc() ) {
           
            $output .= '<div class="d-flex flex-row container-fluid mb-1">
            <div class="pic">
                 <img class="rounded-circle  mr-3" src="img/pic.png" height="40px" width="40px" alt="">
            </div>
             <div class="flex-grow-1">
                <div class=" comment-box w-100  p-2">
                    <span class="commentor-name mr-md-3 ">'.$data['name'].'</span>'.$data['comment'].'
                </div>
             <div class="col-12 timeAgo"><time class="date timeago" datetime="'.$data['time'].'"></time> </div>
             </div>
         </div>';
        }
       echo $output;   
        
       
        }

        if(isset($_POST['updateCourseContent'])){
            $courseCode = $conn->real_escape_string($_POST['courseCode']);
            $output ="";
            $viewCourse = $courseCode;		
            $commentSql = $conn->query("SELECT staff.staff_id, staff.title, staff.first_name, staff.last_name, comments.comments, 
            staff.passport FROM comments INNER JOIN staff ON comments.staff_id = staff.staff_id WHERE comments.course_code = '$viewCourse' ORDER BY comments.comment_id DESC");
            while($data = $commentSql->fetch_assoc() ) {
                $name = $data['title']." ".$data['first_name']." ".$data['last_name'];
                $picPath = 'img/passports/'.$data['staff_id'].".".$data['passport'];

                $output .= '<div class="d-flex flex-row container-fluid mb-1">
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
                
                echo $output; 
        }

// Extract IP  
  
function getVisIpAddr() { 
      
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
        return $_SERVER['HTTP_CLIENT_IP']; 
    } 
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
        return $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } 
    else { 
        return $_SERVER['REMOTE_ADDR']; 
    } 
} 
?>