<?php
require 'connect.inc.php';
require 'core.inc.php';

if(!loggedIn()){ 
header('Location: index.php');
} else {

//fetch user details
$queryP1 = "SELECT password FROM users WHERE id='$_SESSION[user_id]'";
$queryP = "SELECT name, email, mobile FROM user_details WHERE id='$_SESSION[user_id]'";
$query_run = mysqli_query($mysqlconn,$queryP);
$query_runP1 = mysqli_query($mysqlconn,$queryP1);
        if (true==$query_run && true==$query_runP1){
            $query_num_rows = mysqli_num_rows($query_run);
            if ($query_num_rows==0){ echo 'Invalid ID'; }
            else {
            $user_details = mysqli_fetch_assoc($query_run);
            $users = mysqli_fetch_assoc($query_runP1);
            }
        } else {
        printf("error: %s\n", mysqli_error($mysqlconn));
        }  

//cheking if user details form update submitted.
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['password'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    if (!empty($name) && !empty($email) && !empty($mobile) && !empty($password) && $password == $users['password']){
        $query = "UPDATE user_details set name = '$name' , email = '$email', mobile = '$mobile' WHERE id = '$_SESSION[user_id]'";
        
        $query_run = mysqli_query($mysqlconn,$query);
        if (true==$query_run){

            unset($_POST['name']);
            unset($_POST['email']);
            unset($_POST['mobile']);
            unset($_POST['password']);

            header("Location: profile.php");
        } else {
        printf("error: %s\n", mysqli_error($mysqlconn));
        }
    }

unset($_POST['name']);
unset($_POST['email']);
unset($_POST['mobile']);
unset($_POST['password']);

}


//checking if new event created
if (isset($_POST['eventName']) && isset($_POST['date']) && isset($_POST['url']) && isset($_POST['location']) && isset($_POST['address']) && isset($_POST['city'])
    && isset($_POST['state']) && isset($_POST['description'])){

$target_file = "uploads/" . basename($_FILES["uploadImage"]["name"]);

$eventName   = $_POST['eventName'];
$date        = $_POST['date'];
$url         = $_POST['url'];
$location    = $_POST['location'];
$address     = $_POST['address'];
$city        = $_POST['city'];
$state       = $_POST['state'];
$imagePath   = $target_file;
$description = rtrim(strip_tags($_POST['description']));

$query0 = "SELECT id from event_details WHERE id = '$_SESSION[user_id]' AND eventName = '$eventName'";
$query_run0 = mysqli_query($mysqlconn,$query0);
if ($query_run0==true && mysqli_num_rows($query_run0) == 0){

    $query1 = "INSERT INTO event_details (id, eventName, dateTim, registURL, location, address, city, state, imagePath, description) 
             VALUES ('$_SESSION[user_id]', '$eventName', '$date', '$url', '$location', '$address', '$city', '$state', '$imagePath', '$description')";

    $query_run1 = mysqli_query($mysqlconn,$query1);
        if (true==$query_run1){
            if(imageUpload()){
            echo 'uploaded.';
            } else {
            echo 'not uploaded';
            }
        } else {
            printf("error: %s\n", mysqli_error($mysqlconn));
        }
}

}

} //end logged in case
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Do-Gooder</title>

    <!-- Styles -->
    <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='assets/css/animate.min.css'>
    <link rel='stylesheet' href="assets/css/font-awesome.min.css" />
    <link rel='stylesheet' href="assets/css/style.css" />
    <link href="assets/css/jquery.datetimepicker.min.css" rel="stylesheet" />

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- Favicon -->
    <link rel="shortcut icon" href="#">

</head>
<body>
    <!-- Begin Hero Bg -->
    <div id="parallax">
    </div>
    <!-- End Hero Bg
        ================================================== -->
    <!-- Start Header
        ================================================== -->
    <header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Your Logo -->
                <a href="index.php" class="navbar-brand">DO-<span class="lighter">GOODER</span></a>
            </div>
            <!-- Start Navigation -->
            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Intro
        ================================================== -->
    <section id="memberArea" class="section active-section">
        <div class="wrapsection">
            <div class="container cy-bg-white">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4 col-xs-12">
                            <ul class="nav nav-pills nav-stacked cy-nav">
                                <li class="active"><a data-toggle="pill" href="#setting"><i class="fa fa-cog cy-custom-fa"></i>Account Settings <i class="fa fa-chevron-right cy-fa-cheveron"></i></a></li>
                                <li><a data-toggle="pill" href="#view"><i class="fa fa-ticket cy-custom-fa"></i>View / Edit Event <i class="fa fa-chevron-right cy-fa-cheveron"></i></a></li>
                                <li><a data-toggle="pill" href="#add"><i class="fa fa-plus cy-custom-fa"></i>Add Event <i class="fa fa-chevron-right cy-fa-cheveron"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-offset-1 col-md-7 col-xs-12 cy-mobile-m-20">

                            <div class="tab-content">
                                <div id="setting" class="tab-pane fade in active">
                                    <h3 class="cy-h3-border"><i class="fa fa-cog cy-custom-fa-green"></i>Account Settings</h3>
                                    <form id="formAccountSetting" action="<?php echo $current_file; ?>" method="POST">
                                        <label label-for="name">Name</label>
                                        <input type="text" class="form-control cy-form-control" name="name" value="<?php echo $user_details['name']; ?>" required />
                                        <br />
                                        <label label-for="email">Email</label>
                                        <input type="text" class="form-control cy-form-control" name="email" value="<?php echo $user_details['email']; ?>" required />
                                        <br />
                                        <label label-for="mobile">Mobile</label>
                                        <input type="text" class="form-control cy-form-control" name="mobile" value="<?php echo $user_details['mobile']; ?>" required />
                                        <br />
                                        <label label-for="password">Password</label>
                                        <input type="password" class="form-control cy-form-control" name="password" required />
                                        <br />
                                        <br />
                                        <input type="submit" class="btn cy-btn-success" value="Update" />
                                    </form>
                                </div>
                                <div id="view" class="tab-pane fade">
                                    <h3 class="cy-h3-border"><i class="fa fa-ticket cy-custom-fa-green"></i>View / Edit Event</h3>
                                    <div class="col-md-12">
                                        <?php
                                        //to loop all of the event under the NGO's.
                                        $query = "SELECT eventName, description FROM event_details WHERE id = '$_SESSION[user_id]'";
                                        $query_run = mysqli_query($mysqlconn,$query);
                                        if($query_run==true){
                                            while($row = mysqli_fetch_assoc($query_run)) {
                                        ?>
                                        <table class="table table-hover">
                                            <tr class="bg-primary cy-cancel-hover-tr">
                                                <th>
                                                    Event Summary
                                                </th>
                                                <th>
                                                    Operation
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                <?php
                                                $desc = $row['description'];
                                                $desc = preg_replace('/<p\b[^>]*>(.*?)<\/p>/i', '', $desc);
                                                echo strip_tags($desc);
                                                ?>
                                                </td>

                                                <td>
                                                    <a href="event_edit.php?evname=<?php echo $row['eventName']; ?>" class="btn cy-btn-success cy-block">Edit</a><br />
                                                    <a href="event_detail.php?evname=<?php echo $row['eventName']; ?>" class="btn cy-btn-info cy-block">View</a><br />
                                                    <a href="deleteEvent.php?evname=<?php echo $row['eventName']; ?>" class="btn cy-btn-danger cy-block">Delete</a><br />
                                                </td>
                                            </tr>
                                        </table>
                                        <?php
                                            }
                                        }
                                        ?>
                                   <!--     <table class="table table-hover">
                                            <tr class="bg-primary cy-cancel-hover-tr">
                                                <th>
                                                    Event Summary
                                                </th>
                                                <th>
                                                    Operation
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Laoreet ac, aliquam sit amet justo nunc tempor, metus vel placerat suscipit, orci nisl iaculis eros, a tincidunt nisi odio eget lorem nulla condimentum tempor mattis ut vitae feugiat augue cras ut metus a risus iaculis scelerisque eu ac ante fusce non varius purus aenean nec magna felis fusce vestibulum.
                                                </td>
                                                <td>
                                                    <a href="#" class="btn cy-btn-success cy-block">Edit</a><br />
                                                    <a href="#" class="btn cy-btn-info cy-block">View</a><br />
                                                    <a href="#" class="btn cy-btn-danger cy-block">Delete</a><br />
                                                </td>
                                            </tr>
                                        </table> -->
                                    </div>
                                </div>
                                <div id="add" class="tab-pane fade">
                                    <h3 class="cy-h3-border"><i class="fa fa-plus cy-custom-fa-green"></i>Add Event</h3>
                                    <form id="addEventForm" action="<?php echo $current_file; ?>" method="POST" enctype="multipart/form-data">
                                        <label label-for="eventName">EventName</label>
                                        <input type="text" class="form-control cy-form-control" name="eventName" required />
                                        <br />
                                        <label label-for="date">Date & Time</label>
                                        <input type="text" class="form-control cy-form-control" name="date" id="dateTime" required />
                                        <br />
                                        <label label-for="url">Registration URL</label>
                                        <input type="text" class="form-control cy-form-control" name="url" required />
                                        <br />
                                        <label label-for="location">Location</label>
                                        <input type="text" class="form-control cy-form-control" name="location" required />
                                        <br />
                                        <label label-for="address">Address</label>
                                        <input type="text" class="form-control cy-form-control" name="address" required />
                                        <br />
                                        <label label-for="city">City</label>
                                        <input type="text" class="form-control cy-form-control" name="city" required />
                                        <br />
                                        <label>State</label>
                                        <select name="state" class="form-control cy-form-control cy-no-top-p">
                                            <option value="1">Kuala Lumpur</option>
                                            <option value="2">Penang</option>
                                            <option value="3">Other</option>
                                        </select>
                                        <br />
                                        <label label-for="uploadImage">Upload Image</label>
                                        <input type="file" name="uploadImage" required />
                                        <br />
                                        <label label-for="description">Description</label>
                                        <textarea id="eventDescription" class="form-control cy-form-control" name="description"></textarea>
                                        <br />
                                        <br />
                                        <input type="submit" class="btn cy-btn-success" value="Add Event" />
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Credits
    =============================================== -->
    <section id="credits" class="text-center cy-footer">
        <span class="social wow zoomIn">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-skype"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
        </span><br />
        Copyright &copy; <a href="#">DO-GOODER</a>

    </section>
    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.localScroll.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/validate.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/ckeditor/ckeditor.js"></script>
    <script src="assets/js/ckeditor/adapters/jquery.js"></script>
    <script src="assets/js/ckeditor/build-config.js"></script>
    <script src="assets/js/ckeditor/config.js"></script>
    <script src="assets/js/ckeditor/styles.js"></script>
    <script src="assets/js/jquery.datetimepicker.full.min.js"></script>
    <script>
        $("#eventDescription").ckeditor();

        jQuery('#dateTime').datetimepicker({
            mask: true,
            theme: "dark"
        });
    </script>
</body>
</html>