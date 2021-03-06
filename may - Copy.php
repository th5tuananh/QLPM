<?php
include_once("include/function.php");
dbconnect();

if(isset($_COOKIE["username"])==0){
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administrator</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <script src="js/jquery.min.js"></script>
    <!-- Custom styles for this template -->
    <!-- <link href="style.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- [if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]
  </head> -->

<body>

<!-- MENU HEADER ================================================================== -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">CTEC SYSTEM</a>
    </div>

    <!-- Navigation top static -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">

        <ul class="nav navbar-nav">
            <li class="active"><a href="#">LINK</a></li>
            <li><a href="#">LINK</a></li>
            <li><a href="#">LINK</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right container-fluid">
            <li>
                <form class="navbar-form" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm..." style="border-radius: 30px;">
                    </div>
                </form>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-bell"></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="setting-mess.html">Zack Le&nbsp;&nbsp;&nbsp;<span class="badge pull-right">3</span></a></li>
                    <li><a href="setting-mess.html">ZuVN&nbsp;&nbsp;&nbsp;<span class="badge pull-right">1</span></a></li>
                    <li><a href="setting-mess.html">Nhanh&nbsp;&nbsp;&nbsp;<span class="badge pull-right">5</span></a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user"></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="setting.html"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;Thông tin cá nhân</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-cog"></span>&nbsp;Tùy chọn</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html"><span class="glyphicon glyphicon-off"></span>&nbsp;Đăng xuất</a></li>
                </ul>
            </li>
        </ul>

    </div><!-- /.navbar-collapse -->
</div>
<!-- BODY ================================================================== -->
<div class="container-fluid" id="main_content">

<div class="row">
<!-- SIDEBAR ================================================================ -->
<div class="col-md-2 sidebar">

    <div class="row">
        <div class="col-md-12">
            <div class="img-circle" id="avatar">
                <img alt="My Avatar" src="images/avatar.jpg" class="center-block img-circle img-responsive">
            </div>
            <p>
            <h1 class="text-center" style="color: #878787;"><?php echo $_COOKIE['username'] ?></h1>
            </p>
        </div><!-- End .col-md-12 .avatar -->
    </div>
    <ul id="menu1" class="nav nav-sidebar">
        <li>
            <a href="admin.html">Trang chủ</a>

        </li>
        <li>
            <a href="#">Quản lý <span class="glyphicon glyphicon-plus pull-right"></span></a>
            <ul class="list-unstyled nav collapse in nav-sidebar">
                <li><a href="phong.html">Phòng</a></li>
                <li class="active"><a href="#">Máy tính</a></li>
            </ul>
        </li>
        <li><a href="setting.html">Người dùng</a></li>
    </ul>
</div><!-- End .col-md-2 .sidebar-->

<!-- RIGHT MAIN ============================================================ -->

<div class="col-md-10 col-md-offset-2" id="main_primary">

<div class="row">

    <div class="col-md-12">

        <div class="row">
            <div class="col-md-4">

                <h1>Quản lý phòng
                    <small>Chi tiết về quản lý phòng</small>
                </h1>

            </div>

        </div>


        <div class="alert alert-info fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Chào mừng <?php echo $_COOKIE['username'] ?></strong> bạn đã đến với chức năng quản lý phòng.
        </div>

        <!-- Button trigger modal -->




    </div><!-- End .col-md-12 -->

</div><!-- End .row top-->

<div class="row">
    <div class="col-md-12" >
      <h2>Chọn phòng: </h2>
      <hr />
    </div>
</div><!-- End .row -->

<div class="row space">
  <div class="container-fluid">
    <div class="col-md-2 space">
      <button type="submit" class="btn btn-primary size word_wrap" disabled>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</button>
    </div>

    <div class="col-md-2 space">
      <button type="submit" class="btn btn-primary size word_wrap">Lorem ipsum dolor sit amet.</button>
    </div>

    <div class="col-md-2 space">
      <button type="submit" class="btn btn-primary size word_wrap">Lorem ipsum dolor sit amet.</button>
    </div>

    <div class="col-md-2 space">
      <button type="submit" class="btn btn-primary size word_wrap">Lorem ipsum dolor sit amet.</button>
    </div>

    <div class="col-md-2 space">
      <button type="submit" class="btn btn-primary size word_wrap">Lorem ipsum dolor sit amet.</button>
    </div>

    <div class="col-md-2 space">
      <button type="submit" class="btn btn-primary size word_wrap">Lorem ipsum dolor sit amet.</button>
    </div>

    <div class="col-md-2 space">
      <button type="submit" class="btn btn-primary size word_wrap">Lorem ipsum dolor sit amet.</button>
    </div>

    <div class="col-md-2 space">
      <button type="submit" class="btn btn-primary size word_wrap">Lorem ipsum dolor sit amet.</button>
    </div>

    <div class="col-md-2 space">
      <button type="submit" class="btn btn-primary size word_wrap">Lorem ipsum dolor sit amet.</button>
    </div>

    <div class="col-md-2 space">
      <button type="submit" class="btn btn-primary size word_wrap">Lorem ipsum dolor sit amet.</button>
    </div>
  </div><!-- End container-fluid -->
</div><!-- End .row -->

<div class="row">
    <div class="col-md-12">
    <div class="container-fluid">
    <!--  -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">Máy tính</a></li>
        <li><a href="#tab2" data-toggle="tab">Tình trạng</a></li>
        <li><a href="#tab3" data-toggle="tab">Phần mềm</a></li>
    </ul>
    <div class="tab-content">
        <div id="tab1" class="tab-pane fade in active">
          <h2 class="text-center">Chi tiết thông tin máy:</h2>
          <div style="height: 600px; overflow: auto; margin-bottom: 10px;">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <td><b>STT</b></td>
                    <td><b>Tên máy</b></td>
                    <td><b>Chipset</b></td>
                    <td><b>Mainboard</b></td>
                    <td><b>HDD</b></td>
                    <td><b>RAM</b></td>
                    <td><b>Màn hình</b></td>
                    <td><b>Chỉnh sửa</b></td>
                    <td><b>Chọn</b></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Máy 1</td>
                    <td>Core i5 3337U</td>
                    <td>ASUS Mainboard</td>
                    <td>ASUS HDD 500GB</td>
                    <td>4GB Kingston</td>
                    <td>LCD LG 20 inch</td>
                    <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Máy 2</td>
                    <td>Core i5 3337U</td>
                    <td>ASUS Mainboard</td>
                    <td>ASUS HDD 500GB</td>
                    <td>4GB Kingston</td>
                    <td>LCD LG 20 inch</td>
                    <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Máy 3</td>
                    <td>Core i5 3337U</td>
                    <td>ASUS Mainboard</td>
                    <td>ASUS HDD 500GB</td>
                    <td>4GB Kingston</td>
                    <td>LCD LG 20 inch</td>
                    <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Máy 4</td>
                    <td>Core i5 3337U</td>
                    <td>ASUS Mainboard</td>
                    <td>ASUS HDD 500GB</td>
                    <td>4GB Kingston</td>
                    <td>LCD LG 20 inch</td>
                    <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Máy 5</td>
                    <td>Core i5 3337U</td>
                    <td>ASUS Mainboard</td>
                    <td>ASUS HDD 500GB</td>
                    <td>4GB Kingston</td>
                    <td>LCD LG 20 inch</td>
                    <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Máy 6</td>
                    <td>Core i5 3337U</td>
                    <td>ASUS Mainboard</td>
                    <td>ASUS HDD 500GB</td>
                    <td>4GB Kingston</td>
                    <td>LCD LG 20 inch</td>
                    <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Máy 7</td>
                    <td>Core i5 3337U</td>
                    <td>ASUS Mainboard</td>
                    <td>ASUS HDD 500GB</td>
                    <td>4GB Kingston</td>
                    <td>LCD LG 20 inch</td>
                    <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Máy 8</td>
                    <td>Core i5 3337U</td>
                    <td>ASUS Mainboard</td>
                    <td>ASUS HDD 500GB</td>
                    <td>4GB Kingston</td>
                    <td>LCD LG 20 inch</td>
                    <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Máy 9</td>
                    <td>Core i5 3337U</td>
                    <td>ASUS Mainboard</td>
                    <td>ASUS HDD 500GB</td>
                    <td>4GB Kingston</td>
                    <td>LCD LG 20 inch</td>
                    <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Máy 10</td>
                    <td>Core i5 3337U</td>
                    <td>ASUS Mainboard</td>
                    <td>ASUS HDD 500GB</td>
                    <td>4GB Kingston</td>
                    <td>LCD LG 20 inch</td>
                    <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                    <td><input type="checkbox"></td>
                  </tr>
                </tbody>
            </table>
          </div>
          
          <button class="btn btn-primary" style="margin-bottom: 20px; margin-right: 20px">Thêm dòng</button>
          <button class="btn btn-primary" style="margin-bottom: 20px;">Xóa dòng</button>

        </div><!-- End #table1 -->
                  
            <div id="tab2" class="tab-pane fade">
              <h2 class="text-center">Chi tiết tình trạng máy:</h2>
              <div style="height: 600px; overflow: auto; margin-bottom: 10px;">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <td><b>STT</b></td>
                      <td><b>Tên máy</b></td>
                      <td><b>Tình trạng hiện tại</b></td>
                      <td><b>Ngày hỏng</b></td>
                      <td><b>Ngày sửa xong</b></td>
                      <td><b>Số lần sửa</b></td>
                      <td><b>Báo hỏng</b></td>
                      <td><b>Chỉnh sửa</b></td>
                      <td><b>Chọn</b></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Máy 1</td>
                      <td> <span class="label label-success">Hoạt động</span> </td>
                      <td>N/A</td>
                      <td>N/A</td>
                      <td>1</td>
                      <td><button type="submit" class="btn btn-danger">Báo hỏng</button></td>
                      <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Máy 2</td>
                      <td><span class="label label-success">Hoạt động</span></td>
                      <td>N/A</td>
                      <td>N/A</td>
                      <td>1</td>
                      <td><button type="submit" class="btn btn-danger">Báo hỏng</button></td>
                      <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Máy 3</td>
                      <td><span class="label label-success">Hoạt động</span></td>
                      <td>N/A</td>
                      <td>N/A</td>
                      <td>1</td>
                      <td><button type="submit" class="btn btn-danger">Báo hỏng</button></td>
                      <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Máy 4</td>
                      <td><span class="label label-danger">Đang hỏng</span></td>
                      <td>14/03/2014</td>
                      <td>16/03/2014</td>
                      <td>3</td>
                      <td><button type="submit" class="btn btn-danger">Báo hỏng</button></td>
                      <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Máy 5</td>
                      <td><span class="label label-danger">Đang hỏng</span></td>
                      <td>14/03/2014</td>
                      <td>18/03/2014</td>
                      <td>2</td>
                      <td><button type="submit" class="btn btn-danger">Báo hỏng</button></td>
                      <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Máy 6</td>
                      <td><span class="label label-danger">Đang hỏng</span></td>
                      <td>11/03/2014</td>
                      <td>11/03/2014</td>
                      <td>2</td>
                      <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Máy 7</td>
                      <td><span class="label label-success">Hoạt động</span></td>
                      <td>N/A</td>
                      <td>N/A</td>
                      <td>1</td>
                      <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Máy 8</td>
                      <td><span class="label label-success">Hoạt động</span></td>
                      <td>N/A</td>
                      <td>N/A</td>
                      <td>1</td>
                      <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Máy 9</td>
                      <td><span class="label label-success">Hoạt động</span></td>
                      <td>N/A</td>
                      <td>N/A</td>
                      <td>1</td>
                      <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Máy 10</td>
                      <td><span class="label label-danger">Đang hỏng</span></td>
                      <td>22/03/2014</td>
                      <td>28/03/2014</td>
                      <td>4</td>
                      <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>Máy 11</td>
                      <td><span class="label label-success">Hoạt động</span></td>
                      <td>N/A</td>
                      <td>N/A</td>
                      <td>2</td>
                      <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td>Máy 12</td>
                      <td><span class="label label-success">Hoạt động</span></td>
                      <td>N/A</td>
                      <td>N/A</td>
                      <td>0</td>
                      <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>13</td>
                      <td>Máy 13</td>
                      <td><span class="label label-success">Hoạt động</span></td>
                      <td>N/A</td>
                      <td>N/A</td>
                      <td>0</td>
                      <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>14</td>
                      <td>Máy 14</td>
                      <td><span class="label label-danger">Đang hỏng</span></td>
                      <td>22/03/2014</td>
                      <td>28/03/2014</td>
                      <td>2</td>
                      <td><button type="submit" class="btn btn-primary">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <button class="btn btn-primary" style="margin-bottom: 20px; margin-right: 20px">Thêm dòng</button>
              <button class="btn btn-primary" style="margin-bottom: 20px;">Xóa dòng</button>

            </div><!-- End #tab2 -->
                  
            <div id="tab3" class="tab-pane fade">
              <h2 class="text-center">Chi tiết phần mềm của máy:</h2>
              <div style="height: 600px; overflow: auto; margin-bottom: 10px;">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <td><b>STT</b></td>
                      <td><b>Tên máy</b></td>
                      <td><b>PM Văn phòng</b></td>
                      <td><b>PM lập trình</b></td>
                      <td><b>PM đồ họa</b></td>
                      <td><b>PM Antivirus</b></td>
                      <td><b>Sửa</b></td>
                      <td><b>Chọn</b></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Máy 1</td>
                      <td>MS Office 2013</td>
                      <td>VB, XAMPP, SQL Server, Dev-C++, Notepad++</td>
                      <td>Photoshop, Corel DRAW</td>
                      <td>NIS 2014</td>
                      
                      <td><button type="submit" class="btn btn-danger">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Máy 2</td>
                      <td>MS Office 2013</td>
                      <td>VB, XAMPP, SQL Server, Dev-C++, Notepad++</td>
                      <td>Photoshop, Corel DRAW</td>
                      <td>NIS 2014</td>
                      
                      <td><button type="submit" class="btn btn-danger">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Máy 3</td>
                      <td>MS Office 2013</td>
                      <td>VB, XAMPP, SQL Server, Dev-C++, Notepad++</td>
                      <td>Photoshop, Corel DRAW</td>
                      <td>NIS 2014</td>
                      
                      <td><button type="submit" class="btn btn-danger">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Máy 4</td>
                      <td>MS Office 2013</td>
                      <td>VB, XAMPP, SQL Server, Dev-C++, Notepad++</td>
                      <td>Photoshop, Corel DRAW</td>
                      <td>NIS 2014</td>
                      
                      <td><button type="submit" class="btn btn-danger">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Máy 5</td>
                      <td>MS Office 2013</td>
                      <td>VB, XAMPP, SQL Server, Dev-C++, Notepad++</td>
                      <td>Photoshop, Corel DRAW</td>
                      <td>NIS 2014</td>
                      
                      <td><button type="submit" class="btn btn-danger">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Máy 6</td>
                      <td>MS Office 2013</td>
                      <td>VB, XAMPP, SQL Server, Dev-C++, Notepad++</td>
                      <td>Photoshop, Corel DRAW</td>
                      <td>NIS 2014</td>
                      
                      <td><button type="submit" class="btn btn-danger">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Máy 7</td>
                      <td>MS Office 2013</td>
                      <td>VB, XAMPP, SQL Server, Dev-C++, Notepad++</td>
                      <td>Photoshop, Corel DRAW</td>
                      <td>NIS 2014</td>
                      
                      <td><button type="submit" class="btn btn-danger">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Máy 8</td>
                      <td>MS Office 2013</td>
                      <td>VB, XAMPP, SQL Server, Dev-C++, Notepad++</td>
                      <td>Photoshop, Corel DRAW</td>
                      <td>NIS 2014</td>
                      
                      <td><button type="submit" class="btn btn-danger">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Máy 9</td>
                      <td>MS Office 2013</td>
                      <td>VB, XAMPP, SQL Server, Dev-C++, Notepad++</td>
                      <td>Photoshop, Corel DRAW</td>
                      <td>NIS 2014</td>
                      
                      <td><button type="submit" class="btn btn-danger">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Máy 10</td>
                      <td>MS Office 2013</td>
                      <td>VB, XAMPP, SQL Server, Dev-C++, Notepad++</td>
                      <td>Photoshop, Corel DRAW</td>
                      <td>NIS 2014</td>
                      
                      <td><button type="submit" class="btn btn-danger">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>Máy 11</td>
                      <td>MS Office 2013</td>
                      <td>VB, XAMPP, SQL Server, Dev-C++, Notepad++</td>
                      <td>Photoshop, Corel DRAW</td>
                      <td>NIS 2014</td>
                      
                      <td><button type="submit" class="btn btn-danger">Sửa</button></td>
                      <td><input type="checkbox"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <button class="btn btn-primary" style="margin-bottom: 20px; margin-right: 20px">Thêm dòng</button>
              <button class="btn btn-primary" style="margin-bottom: 20px;">Xóa dòng</button>

            </div><!-- End #tab3 -->

    </div><!-- End .tab-content -->

    </div>

    </div><!-- End col-md-11 -->
</div><!-- End .row -->

</div><!-- End .col-md-10 -->

</div><!-- End row -->

</div><!-- End .container-fluid -->
<!-- Bootstrap core JavaScript ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.min.js"></script>
<script src="js/jquery.metisMenu.js"></script>
<script src="js/mindmup-editabletable.js"></script>
<!-- <script src="js/holder.js"></script> -->
<script type="text/javascript">
    $('#menu1').metisMenu();
    $(".alert").alert();
</script>

</body>
</html>