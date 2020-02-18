<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/tables/basic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:40 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{'assets/'}}vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="{{'assets/'}}vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="{{'assets/'}}vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{'assets/'}}css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{'assets/'}}images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->

      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="../../index-2.html"><img src="{{'assets/'}}images/logo.svg" alt="logo"/></a>
              <a class="navbar-brand brand-logo-mini" href="../../index-2.html"><img src="{{'assets/'}}images/logo-mini.svg" alt="logo"/></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                  <span class="fas fa-bars"></span>
              </button>
              <ul class="navbar-nav">
                  <li class="nav-item nav-search d-none d-md-flex">
                      <div class="nav-link">
                          <div class="input-group">
                              <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                              </div>
                              <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                          </div>
                      </div>
                  </li>
              </ul>
              <ul class="navbar-nav navbar-nav-right">
                  <li class="nav-item d-none d-lg-flex">
                      <a class="nav-link" href="#">
                          <span class="btn btn-primary">+ Create new</span>
                      </a>
                  </li>
                  <li class="nav-item dropdown d-none d-lg-flex">
                      <div class="nav-link">
                          <span class="dropdown-toggle btn btn-outline-dark" id="languageDropdown" data-toggle="dropdown">English</span>
                          <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                              <a class="dropdown-item font-weight-medium" href="#">
                                  French
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item font-weight-medium" href="#">
                                  Espanol
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item font-weight-medium" href="#">
                                  Latin
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item font-weight-medium" href="#">
                                  Arabic
                              </a>
                          </div>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                          <i class="fas fa-bell mx-0"></i>
                          <span class="count">16</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                          <a class="dropdown-item">
                              <p class="mb-0 font-weight-normal float-left">You have 16 new notifications
                              </p>
                              <span class="badge badge-pill badge-warning float-right">View all</span>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                              <div class="preview-thumbnail">
                                  <div class="preview-icon bg-danger">
                                      <i class="fas fa-exclamation-circle mx-0"></i>
                                  </div>
                              </div>
                              <div class="preview-item-content">
                                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                                  <p class="font-weight-light small-text">
                                      Just now
                                  </p>
                              </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                              <div class="preview-thumbnail">
                                  <div class="preview-icon bg-warning">
                                      <i class="fas fa-wrench mx-0"></i>
                                  </div>
                              </div>
                              <div class="preview-item-content">
                                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                                  <p class="font-weight-light small-text">
                                      Private message
                                  </p>
                              </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                              <div class="preview-thumbnail">
                                  <div class="preview-icon bg-info">
                                      <i class="far fa-envelope mx-0"></i>
                                  </div>
                              </div>
                              <div class="preview-item-content">
                                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                                  <p class="font-weight-light small-text">
                                      2 days ago
                                  </p>
                              </div>
                          </a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-envelope mx-0"></i>
                          <span class="count">25</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                          <div class="dropdown-item">
                              <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                              </p>
                              <span class="badge badge-info badge-pill float-right">View all</span>
                          </div>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                              <div class="preview-thumbnail">
                                  <img src="../../images/faces/face4.jpg" alt="image" class="profile-pic">
                              </div>
                              <div class="preview-item-content flex-grow">
                                  <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                                      <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                                  </h6>
                                  <p class="font-weight-light small-text">
                                      The meeting is cancelled
                                  </p>
                              </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                              <div class="preview-thumbnail">
                                  <img src="../../images/faces/face2.jpg" alt="image" class="profile-pic">
                              </div>
                              <div class="preview-item-content flex-grow">
                                  <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                                      <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                                  </h6>
                                  <p class="font-weight-light small-text">
                                      New product launch
                                  </p>
                              </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                              <div class="preview-thumbnail">
                                  <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic">
                              </div>
                              <div class="preview-item-content flex-grow">
                                  <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                                      <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                                  </h6>
                                  <p class="font-weight-light small-text">
                                      Upcoming board meeting
                                  </p>
                              </div>
                          </a>
                      </div>
                  </li>
                  <li class="nav-item nav-profile dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                          <img src="../../images/faces/face5.jpg" alt="profile"/>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                          <a class="dropdown-item">
                              <i class="fas fa-cog text-primary"></i>
                              Settings
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item">
                              <i class="fas fa-power-off text-primary"></i>
                              Logout
                          </a>
                      </div>
                  </li>
                  <li class="nav-item nav-settings d-none d-lg-block">
                      <a class="nav-link" href="#">
                          <i class="fas fa-ellipsis-h"></i>
                      </a>
                  </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                  <span class="fas fa-bars"></span>
              </button>
          </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
          <!-- partial:../../partials/_settings-panel.html -->
          <div class="theme-setting-wrapper">
              <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
              <div id="theme-settings" class="settings-panel">
                  <i class="settings-close fa fa-times"></i>
                  <p class="settings-heading">SIDEBAR SKINS</p>
                  <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                  <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
                  <p class="settings-heading mt-2">HEADER SKINS</p>
                  <div class="color-tiles mx-0 px-4">
                      <div class="tiles primary"></div>
                      <div class="tiles success"></div>
                      <div class="tiles warning"></div>
                      <div class="tiles danger"></div>
                      <div class="tiles info"></div>
                      <div class="tiles dark"></div>
                      <div class="tiles default"></div>
                  </div>
              </div>
          </div>
          <div id="right-sidebar" class="settings-panel">
              <i class="settings-close fa fa-times"></i>
              <ul class="nav nav-tabs" id="setting-panel" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                  </li>
              </ul>
              <div class="tab-content" id="setting-content">
                  <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                      <div class="add-items d-flex px-3 mb-0">
                          <form class="form w-100">
                              <div class="form-group d-flex">
                                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task-todo">Add</button>
                              </div>
                          </form>
                      </div>
                      <div class="list-wrapper px-3">
                          <ul class="d-flex flex-column-reverse todo-list">
                              <li>
                                  <div class="form-check">
                                      <label class="form-check-label">
                                          <input class="checkbox" type="checkbox">
                                          Team review meeting at 3.00 PM
                                      </label>
                                  </div>
                                  <i class="remove fa fa-times-circle"></i>
                              </li>
                              <li>
                                  <div class="form-check">
                                      <label class="form-check-label">
                                          <input class="checkbox" type="checkbox">
                                          Prepare for presentation
                                      </label>
                                  </div>
                                  <i class="remove fa fa-times-circle"></i>
                              </li>
                              <li>
                                  <div class="form-check">
                                      <label class="form-check-label">
                                          <input class="checkbox" type="checkbox">
                                          Resolve all the low priority tickets due today
                                      </label>
                                  </div>
                                  <i class="remove fa fa-times-circle"></i>
                              </li>
                              <li class="completed">
                                  <div class="form-check">
                                      <label class="form-check-label">
                                          <input class="checkbox" type="checkbox" checked>
                                          Schedule meeting for next week
                                      </label>
                                  </div>
                                  <i class="remove fa fa-times-circle"></i>
                              </li>
                              <li class="completed">
                                  <div class="form-check">
                                      <label class="form-check-label">
                                          <input class="checkbox" type="checkbox" checked>
                                          Project review
                                      </label>
                                  </div>
                                  <i class="remove fa fa-times-circle"></i>
                              </li>
                          </ul>
                      </div>
                      <div class="events py-4 border-bottom px-3">
                          <div class="wrapper d-flex mb-2">
                              <i class="fa fa-times-circle text-primary mr-2"></i>
                              <span>Feb 11 2018</span>
                          </div>
                          <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                          <p class="text-gray mb-0">build a js based app</p>
                      </div>
                      <div class="events pt-4 px-3">
                          <div class="wrapper d-flex mb-2">
                              <i class="fa fa-times-circle text-primary mr-2"></i>
                              <span>Feb 7 2018</span>
                          </div>
                          <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                          <p class="text-gray mb-0 ">Call Sarah Graves</p>
                      </div>
                  </div>
                  <!-- To do section tab ends -->
                  <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                          <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                      </div>
                      <ul class="chat-list">
                          <li class="list active">
                              <div class="profile"><img src="{{'assets/'}}images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                              <div class="info">
                                  <p>Thomas Douglas</p>
                                  <p>Available</p>
                              </div>
                              <small class="text-muted my-auto">19 min</small>
                          </li>
                          <li class="list">
                              <div class="profile"><img src="{{'assets/'}}images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                              <div class="info">
                                  <div class="wrapper d-flex">
                                      <p>Catherine</p>
                                  </div>
                                  <p>Away</p>
                              </div>
                              <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                              <small class="text-muted my-auto">23 min</small>
                          </li>
                          <li class="list">
                              <div class="profile"><img src="{{'assets/'}}images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                              <div class="info">
                                  <p>Daniel Russell</p>
                                  <p>Available</p>
                              </div>
                              <small class="text-muted my-auto">14 min</small>
                          </li>
                          <li class="list">
                              <div class="profile"><img src="{{'assets/'}}images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                              <div class="info">
                                  <p>James Richardson</p>
                                  <p>Away</p>
                              </div>
                              <small class="text-muted my-auto">2 min</small>
                          </li>
                          <li class="list">
                              <div class="profile"><img src="{{'assets/'}}images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                              <div class="info">
                                  <p>Madeline Kennedy</p>
                                  <p>Available</p>
                              </div>
                              <small class="text-muted my-auto">5 min</small>
                          </li>
                          <li class="list">
                              <div class="profile"><img src="{{'assets/'}}images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                              <div class="info">
                                  <p>Sarah Graves</p>
                                  <p>Available</p>
                              </div>
                              <small class="text-muted my-auto">47 min</small>
                          </li>
                      </ul>
                  </div>
                  <!-- chat tab ends -->
              </div>
          </div>
          <!-- partial -->
          <!-- partial:../../partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
              <ul class="nav">
                  <li class="nav-item nav-profile">
                      <div class="nav-link">
                          <div class="profile-image">
                              <img src="{{'assets/'}}images/faces/face5.jpg" alt="image"/>
                          </div>
                          <div class="profile-name">
                              <p class="name">
                                  Welcome Jane
                              </p>
                              <p class="designation">
                                  Super Admin
                              </p>
                          </div>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/home">
                          <i class="fa fa-home menu-icon"></i>
                          <span class="menu-title">Dashboard</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/addlist">
                          <i class="fa fa-puzzle-piece menu-icon"></i>
                          <span class="menu-title">Add Category</span>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="/addincome">
                          <i class="fa fa-puzzle-piece menu-icon"></i>
                          <span class="menu-title">Add Income or Expenditure</span>
                      </a>
                  </li>


                  <?php session_start() ?>
                  @if($_SESSION['rule']==1)
                      <li class="nav-item">
                          <a class="nav-link" href="/report">
                              <i class="fa fa-puzzle-piece menu-icon"></i>
                              <span class="menu-title">Report</span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/attendence">
                              <i class="fa fa-puzzle-piece menu-icon"></i>
                              <span class="menu-title">Attendence</span>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="/addemployee">
                              <i class="fa fa-puzzle-piece menu-icon"></i>
                              <span class="menu-title">Add Employees</span>
                          </a>
                      </li>
                  @endif

                  <li class="nav-item">
                      <a class="nav-link" href="/logout">
                          <i class="fa fa-puzzle-piece menu-icon"></i>
                          <span class="menu-title">Log Out</span>
                      </a>
                  </li>
              </ul>
          </nav>

          <!-- partial -->
          <div class="main-panel">
              <div class="content-wrapper">
                  <div class="page-header">
                      <h3 class="page-title">
                          Basic Tables
                      </h3>
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Tables</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                          </ol>
                      </nav>
                  </div>
                  <div class="row">
                      <div class="col-lg-12 grid-margin">
                          <div class="card">
                              <div class="card-body">

                                  <p class="card-description" >
                                      Add Income <code> Category</code>
                                  </p>
                                  <form action="/search" method="post">
                                      @csrf
                                      From :<input type="date" name="date1"> &nbsp; &nbsp; &nbsp; &nbsp;
                                      To:<input type="date" name="date2">
                                      <input type="submit" name="submit" class="btn btn-success">


                                  </form>
<p style="text-align: right">
    <input type="button" class="btn btn-success"  onclick="printDiv('printableArea')" value="Print">

</p>

                                  <br><br>
                              </div>
                          </div>
                      </div>

                  </div>


                  <div class="row" id="printableArea">
                      <div class="col-lg-12 grid-margin stretch-card">
                          <div class="card">
                              <div class="card-body ">
                                  <h3 style="text-align: center">Softcare IT </h3>
                                  <p class="card-description" style="text-align: center">
                                     <strong>Income and Expenditure Report</strong>
                                  </p>
                                  <div class="row">
                                  <div class="col-md-6 table-responsive ">
                                      <table class="table">
                                          <thead>
                                          <tr>
                                              <th>Date</th>
                                              <th>Income Name</th>
                                              <th>Amount</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          @foreach($value2 as $val)
                                              <tr>
                                                  <td>{{$val['date']}}</td>
                                                  <td>{{$val['in_name']}}</td>
                                                  <td>{{$val['amount']}}</td>
                                                  <input type="text" name="" style="display: none" value="{{$total=(double)$val['amount']+$total}}">
{{--
                                                  <td><a href="deletein/{{$val['id']}}"><label class="badge badge-danger badge-pill">Delete</label></a></td>
--}}
                                              </tr>
                                          @endforeach
                                          <tr>
                                              <td></td>
                                              <td><b>Total</b></td>
                                              <td>{{$total}}</td>

                                              {{--
                                                                                                <td><a href="deletein/{{$val['id']}}"><label class="badge badge-danger badge-pill">Delete</label></a></td>
                                              --}}
                                          </tr>

                                          </tbody>
                                      </table>
                                  </div>
                                      <div class="col-md-6 table-responsive">
                                          <table class="table">
                                              <thead>
                                              <tr>
                                                  <th>Date</th>
                                                  <th>Expenditure Name</th>
                                                  <th>Amount</th>
                                              </tr>
                                              </thead>
                                              <tbody>
                                              @foreach($value3 as $val)
                                                  <tr>
                                                      <td>{{$val['date']}}</td>
                                                      <td>{{$val['ex_name']}}</td>
                                                      <td>{{$val['amount']}}</td>
                                                      <input type="text" name="" style="display: none" value="{{$total1=(double)$val['amount']+$total1}}">

                                                      {{--
                                                                                                        <td><a href="/deleteex/{{$val['id']}}"><label class="badge badge-danger badge-pill" >Delete</label></a></td>
                                                      --}}
                                                  </tr>
                                              @endforeach

                                              <tr>
                                                  <td></td>
                                                  <td><b>Total</b></td>
                                                  <td>{{$total1}}</td>

                                                  {{--
                                                                                                    <td><a href="deletein/{{$val['id']}}"><label class="badge badge-danger badge-pill">Delete</label></a></td>
                                                  --}}
                                              </tr>

                                              </tbody>
                                          </table>

                                  </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- content-wrapper ends -->
              <!-- partial:../../partials/_footer.html -->
              <footer class="footer">
                  <div class="d-sm-flex justify-content-center justify-content-sm-between">
                      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
                  </div>
              </footer>
              <!-- partial -->
          </div>
          <!-- main-panel ends -->
      </div>

      <!-- page-body-wrapper ends -->
  </div>


  <script>
      function printDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;

          document.body.innerHTML = printContents;

          window.print();

          document.body.innerHTML = originalContents;
      }

  </script>


  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{'assets/'}}vendors/js/vendor.bundle.base.js"></script>
  <script src="{{'assets/'}}vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{'assets/'}}js/off-canvas.js"></script>
  <script src="{{'assets/'}}js/hoverable-collapse.js"></script>
  <script src="{{'assets/'}}js/misc.js"></script>
  <script src="{{'assets/'}}js/settings.js"></script>
  <script src="{{'assets/'}}js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/tables/basic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:40 GMT -->
</html>