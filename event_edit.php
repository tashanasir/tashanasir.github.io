<?php
require 'connect.inc.php';
require 'core.inc.php';

if(!loggedIn()){ 
header('Location: index.php');
} else {

if(isset($_GET['evname'])){
    $_SESSION['evname'] = $_GET['evname'];
    unset($_GET['evname']);
}
//fetch event details
$queryP1 = "SELECT * FROM event_details WHERE eventName='$_SESSION[evname]'";
$query_runP1 = mysqli_query($mysqlconn,$queryP1);
        if (true==$query_runP1){
            $query_num_rows = mysqli_num_rows($query_runP1);
            if ($query_num_rows==0){ echo 'Invalid ID'; }
            else {
            $eventsD = mysqli_fetch_assoc($query_runP1);
            }
        } else {
        printf("error: %s\n", mysqli_error($mysqlconn));
        }  

//checking if new event created
if (isset($_POST['eventName']) && isset($_POST['date']) && isset($_POST['url']) && isset($_POST['location']) && isset($_POST['address']) && isset($_POST['city'])
    && isset($_POST['state']) && isset($_POST['description'])){

$eventName   = $_POST['eventName'];
$date        = $_POST['date'];
$url         = $_POST['url'];
$location    = $_POST['location'];
$address     = $_POST['address'];
$city        = $_POST['city'];
$state       = $_POST['state'];
$description = rtrim(strip_tags($_POST['description']));

echo $query0 = "UPDATE event_details set eventName = '$eventName' , dateTim = '$date', registURL = '$url', location = '$location', address = '$address', city = '$city', state = '$state', description = '$description'
            WHERE id = '$_SESSION[user_id]' AND eventName = '$_SESSION[evname]'";
$query_run0 = mysqli_query($mysqlconn,$query0);

        if (true==$query_run0){
            unset($SESSION['evname']);
            header('Location: profile.php');
        } else {
            printf("error: %s\n", mysqli_error($mysqlconn));
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
                                <!--<li class="active"><a data-toggle="pill" href="#setting"><i class="fa fa-cog cy-custom-fa"></i>Account Settings <i class="fa fa-chevron-right cy-fa-cheveron"></i></a></li> 
                                <li><a data-toggle="pill" href="#view"><i class="fa fa-ticket cy-custom-fa"></i>View / Edit Event <i class="fa fa-chevron-right cy-fa-cheveron"></i></a></li> -->
                                <li class="active"><a data-toggle="pill" href="#add"><i class="fa fa-plus cy-custom-fa"></i>Edit Event <i class="fa fa-chevron-right cy-fa-cheveron"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-offset-1 col-md-7 col-xs-12 cy-mobile-m-20">

                            <div class="tab-content">
                                <!--<div id="setting" class="tab-pane fade in active">
                                    <h3 class="cy-h3-border"><i class="fa fa-cog cy-custom-fa-green"></i>Account Settings</h3>
                                    <form id="formAccountSetting" action="<?php /*echo $current_file; ?>" method="POST">
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
                                                    <a href="#" class="btn cy-btn-success cy-block">Edit</a><br />
                                                    <a href="#" class="btn cy-btn-info cy-block">View</a><br />
                                                    <a href="deleteEvent.php?evname=<?php echo $row['eventName']; ?>" class="btn cy-btn-danger cy-block">Delete</a><br />
                                                </td>
                                            </tr>
                                        </table>
                                        <?php
                                            }
                                        }*/
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
                                <div id="add" class="tab-pane fade in active">
                                    <h3 class="cy-h3-border"><i class="fa fa-plus cy-custom-fa-green"></i>Edit Event</h3>
                                    <form id="addEventForm" action="<?php echo $current_file; ?>" method="POST" enctype="multipart/form-data">
                                        <label label-for="eventName">EventName</label>
                                        <input type="text" class="form-control cy-form-control" name="eventName" required value="<?php echo $eventsD['eventName']; ?>"/>
                                        <br />
                                        <label label-for="date">Date & Time</label>
                                        <input type="text" class="form-control cy-form-control" name="date" id="dateTime" required value="<?php echo $eventsD['dateTim']; ?>"/>
                                        <br />
                                        <label label-for="url">Registration URL</label>
                                        <input type="text" class="form-control cy-form-control" name="url" required value="<?php echo $eventsD['registURL']; ?>"/>
                                        <br />
                                        <label label-for="location">Location</label>
                                        <input type="text" class="form-control cy-form-control" name="location" required value="<?php echo $eventsD['location']; ?>"/>
                                        <br />
                                        <label label-for="address">Address</label>
                                        <input type="text" class="form-control cy-form-control" name="address" required value="<?php echo $eventsD['address']; ?>"/>
                                        <br />
                                        <label label-for="city">City</label>
                                        <input type="text" class="form-control cy-form-control" name="city" required value="<?php echo $eventsD['city']; ?>"/>
                                        <br />
                                        <label>State</label>
                                        <select name="state" class="form-control cy-form-control cy-no-top-p" value="<?php echo $eventsD['state']; ?>">
                                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                                            <option value="Penang">Penang</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <br />
                                        <label label-for="description">Description</label>
                                        <textarea id="eventDescription" class="form-control cy-form-control" name="description"><?php echo $eventsD['description']; ?></textarea>
                                        <br />
                                        <br />
                                        <input type="submit" class="btn cy-btn-success" value="Edit Event" />
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