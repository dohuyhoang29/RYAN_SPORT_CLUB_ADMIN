<?php
    require_once('DatabaseCategories.php');
    require_once('../initialize.php');
    
    $errors =[];

function isFormValidated(){
    global $errors;
    return count($errors) == 0;
}

function checkForm(){
    global $errors;
    if(empty($_POST['name'])  ){
        $errors[] = "Name must be required.";
    }
    
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    checkForm();
    if (isFormValidated()){
        //do update
        $categories = [];
        $categories['CategoryID'] = $_POST['CategoryID'];
        $categories['name'] = $_POST['name'];

        update_categories($categories);
        redirect_to('categories.php');
    }
} else {
    if(!isset($_GET['CategoryID'])) {
        redirect_to('categories.php');
    }
    $id = $_GET['CategoryID'];
    $categories = find_categories_by_id($id);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/nen2.jpg">

  <title>Edit Categoires</title>

  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="../assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="../assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css">
  <link href="../css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="../css/fullcalendar.css">
  <link href="../css/widgets.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet" />
  <link href="../css/xcharts.min.css" rel=" stylesheet">
  <link href="../css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="../home.php" class="logo"><img style="padding-bottom: 10px;" src="../img/L.png" alt=""></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar01.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="../home.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="../Admin/NewAdmin.php">Admin</a></li>
              <li><a class="" href="../Service/NewService.php">Service</a></li>
              <li><a class="" href="../Pictures/NewPicture.php">Pictures</a></li>
              <li><a class="" href="NewCategories.php">Categories</a></li>
            </ul>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_table"></i>
              <span>Tables</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
                <li><a class="" href="../Admin/IndexAdmin.php">Admin</a></li>
              <li><a class="" href="../Service/IndexService.php">Service</a></li>
              <li><a class="" href="../Pictures//IndexPicture.php">Pictures</a></li>
              <li><a class="" href="IndexCategories.php">Categories</a></li>
            </ul>
          </li>

          

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      
      <div class="text-right">
        <div class="credits">
          
        </div>
      </div>
    </section>
    <section id="main-content">
    <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-o"></i>Admin</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../home.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Table</li>
              <li><i class="fa fa-files-o"></i>edit Categories</li>
            </ol>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
          <section class="panel">
          <table class="table table-striped table-advance table-hover">
  
           
                <tbody>
                  <!-- <tr>
                    <th><i class="icon_profile"></i> Full Name</th>
                    <th><i class="icon_calendar"></i> Date</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_pin_alt"></i> City</th>
                    <th><i class="icon_mobile"></i> Mobile</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr> -->
                <table class="table table-striped table-advance table-hover">

                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                <fieldset>
                    <input type="hidden" name="CategoryID" 
                    value="<?php echo isFormValidated()? $categories['CategoryID']: $_POST['CategoryID'] ?>" >


                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" 
                    value="<?php echo isFormValidated()? $categories['Name']: $_POST['name'] ?>">
                    
                    <input type="submit" class="s">
                    <input type="reset">
                </fieldset>
                </form>

                <tr>
                    <?php if ($_SERVER["REQUEST_METHOD"] == 'POST' && isFormValidated()): ?>
                        <div class="btn-group">
                    <?php endif; ?>
                    <br><br>
                    <?php if ($_SERVER["REQUEST_METHOD"] == 'POST' && !isFormValidated()): ?> 
                    <td><div class="error">
                        <span> Please fix the following errors </span>
                        <ul>
                            <?php
                            foreach ($errors as $key => $value){
                                if (!empty($value)){
                                    echo '<li>', $value, '</li>';
                        }
                    }
                    ?>
                    </div>
                    </td>
                    </ul>
                    </div><br><br>
                    <?php endif; ?>
                  </tr>
                   
                </tbody>
              </table>
            </section>
          </div>
        </div>
      </section>
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="../js/jquery-2.2.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js"></script>
  <script src="../js/jquery-ui-1.10.4.min.js"></script>
  <script src="../js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="../js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="../js/jquery.scrollTo.min.js"></script>
  <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="../assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="../js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="../js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <script src="../js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="../assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../js/calendar-custom.js"></script>
    <script src="../js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../js/jquery.customSelect.min.js"></script>
    <script src="../assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="../js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../js/sparkline-chart.js"></script>
    <script src="../js/easy-pie-chart.js"></script>
    <script src="../js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../js/xcharts.min.js"></script>
    <script src="../js/jquery.autosize.min.js"></script>
    <script src="../js/jquery.placeholder.min.js"></script>
    <script src="../js/gdp-data.js"></script>
    <script src="../js/morris.min.js"></script>
    <script src="../js/sparklines.js"></script>
    <script src="../js/charts.js"></script>
    <script src="../js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>

<?php   
    db_disconnect($db);
?>
