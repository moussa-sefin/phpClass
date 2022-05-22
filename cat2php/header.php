

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>


  <link href="assets/img/favicon.gif" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
<style>
    body{
      background-color: #7D869C;
      
      }
</style>
</head>
<body >

<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center ">

      <h1 class="logo mr-auto"><a href="index.php">WelCome</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="booking.php">booking</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="display.php">view marks</a></li>
          
          <?php
          if (isset($_SESSION['stdid']))
          {
            ?>
            <li><a href="process/logoutprocessing.php" class="btn btn-success scrollto">Logout</a></li>
            <?php
          }
          ?>
         </ul>



      </nav><!-- .nav-menu -->

<!--   <%
if(session.getAttribute("regNum")==null)
{
  %>
  <a href="LogOut" class="get-started-btn scrollto" style="display:none;">Log Out</a>
  <% 
}else{
  %>
  <a href="LogOut" class="get-started-btn scrollto" >Log Out</a>
  <%
}
%> -->
      

    </div>
  </header><br><br><br><!-- End Header -->
 <!-- ======= Hero Section ======= -->


</body>
</html>