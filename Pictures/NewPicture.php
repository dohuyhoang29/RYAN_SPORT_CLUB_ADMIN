<?php
require_once('DatabasePicture.php');
require_once('../initialize.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Form Validation | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
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

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">

            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 pending tasks</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                  <span class="subject">
                    <span class="from">Greg Martin</span>
                    <span class="time">1 min</span>
                  </span>
                  <span class="message">
                    I really like this admin panel.
                  </span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                  <span class="subject">
                    <span class="from">Bob Mckenzie</span>
                    <span class="time">5 mins</span>
                  </span>
                  <span class="message">
                    Hi, What is next project plan?
                  </span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                  <span class="subject">
                    <span class="from">Phillip Park</span>
                    <span class="time">2 hrs</span>
                  </span>
                  <span class="message">
                    I am like to buy this Admin Template.
                  </span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                  <span class="subject">
                    <span class="from">Ray Munoz</span>
                    <span class="time">1 day</span>
                  </span>
                  <span class="message">
                    Icon fonts are great.
                  </span>
                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">

            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                  <span class="label label-primary"><i class="icon_profile"></i></span>
                  Friend Request
                  <span class="small italic pull-right">5 mins</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-warning"><i class="icon_pin"></i></span>
                  John location.
                  <span class="small italic pull-right">50 mins</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-danger"><i class="icon_book_alt"></i></span>
                  Project 3 Completed.
                  <span class="small italic pull-right">1 hr</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-success"><i class="icon_like"></i></span>
                  Mick appreciated your work.
                  <span class="small italic pull-right"> Today</span>
                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
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
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
              </li>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
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
            <a class="" href="index.html">
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
              <li><a class="" href="../Categories/NewCategories.php">Categories</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_table"></i>
              <span>Tables</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="basic_table.html">Basic Table</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-o"></i> Form Admin</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-files-o"></i>Form Validation</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Enter Form Admin
              </header>
              <div class="panel-body">
                <div class="form">
                  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="form-validate form-horizontal " id="register_form" method="post">
                    <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="Name" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="username" class="control-label col-lg-2">Picture <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="username" name="URL" type="file" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="password" class="control-label col-lg-2">Sport <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select class="form-control " id="password" name="ServiceID">
                          <option value="1" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '1') echo 'selected' ?>>Cầu Lông</option>
                          <option value="2" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '2') echo 'selected' ?>>Bóng Chuyền</option>
                          <option value="3" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == "3") echo 'selected' ?>>Bóng Rổ</option>
                          <option value="4" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == "4") echo 'selected' ?>>Đấu Kiếm</option>
                          <option value="5" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '5') echo 'selected' ?>>Bóng Bàn</option>
                          <option value="6" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '6') echo 'selected' ?>>Đá Cầu</option>
                          <option value="7" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '7') echo 'selected' ?>>Bóng Đá</option>
                          <option value="8" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '8') echo 'selected' ?>>Quần Vợt</option>
                          <option value="9" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '9') echo 'selected' ?>>Nhảy xa</option>
                          <option value="10" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '10') echo 'selected' ?>>Bóng Chày</option>
                          <option value="11" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '11') echo 'selected' ?>>Điền Kinh</option>
                          <option value="12" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '12') echo 'selected' ?>>Bơi Lội</option>
                          <option value="14" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '13') echo 'selected' ?>>Food</option>
                          <option value="15" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '14') echo 'selected' ?>>Massage</option>
                          <option value="15" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '15') echo 'selected' ?>>Bi-a</option>
                          <option value="16" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '16') echo 'selected' ?>>Bar</option>
                          <option value="17" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '17') echo 'selected' ?>>Xông Hơi</option>
                          <option value="18" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '18') echo 'selected' ?>>Yoga</option>
                          <option value="19" <?php if (!empty($_POST['ServiceID']) && $_POST['ServiceID'] == '19') echo 'selected' ?>>Movie</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn btn-default" type="reset">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="../js/jquery.scrollTo.min.js"></script>
  <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="../js/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="../js/scripts.js"></script>

  </form>
        <?php if ($_SERVER["REQUEST_METHOD"] == 'POST'): ?> 
        <?php 
        $picture = [];
        $picture['Name'] = $_POST['Name'];
        $picture['ServiceID'] = $_POST['ServiceID'];
        $picture['URL'] = $_POST['URL'];
        $result = insert_picture($picture);
        $newPictureID = mysqli_insert_id($db);
        ?>
    <?php endif; ?>


</body>

</html>

<?php
db_disconnect($db);
?>