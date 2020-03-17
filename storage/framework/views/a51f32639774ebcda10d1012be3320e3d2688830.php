<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Nomination Outputs</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>

<div class="row text-center">
  <div class="container">
    <h1 class=" text-center text-dark mt-2">Nomination Outputs</h1>
    <h2 class=" text-primary text-center mt-2 ">Election Commission of Sri lanka</h2>
  </div>

</div>

 
  
  

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-2" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">

        <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index"> <i class="fa fa-home" aria-hidden="true">&nbsp;Home </i>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href='pe9'><i class="fa fa-file" aria-hidden="true">&nbsp;PE09</i>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href='pe10'><i class="fa fa-file" aria-hidden="true">&nbsp;PE10</i>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href='pe10x1'><i class="fa fa-file" aria-hidden="true">&nbsp;PE10 (1)</i>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="pe11"><i class="fa fa-file" aria-hidden="true">&nbsp;PE11</i>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="pe30x1x2"><i class="fa fa-file" aria-hidden="true">&nbsp;PE30(1)(2)</i>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          

         </ul>
      </div>
    </div>
  </nav>
<br>


  


            
<!-- Nain Content -->

<?php echo $__env->yieldContent('content'); ?>


<!-- Main Content -->

        
            
   

 

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Eletion Commission of Sri Lanka 2020</p>
    </div>
  </footer>

  <?php echo $__env->yieldPushContent('scripts'); ?>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
   function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>
</body>

</html>
