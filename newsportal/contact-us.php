<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Portal | Contact us</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  </head>

  <body>

    <!-- Navigation -->
    <?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">

<?php 
$pagetype='contactus';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
      <h1 data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-sine" class="mt-4 mb-3"><?php echo htmlentities($row['PageTitle'])?>
  
      </h1>

      <ol data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-sine" class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">
        <iframe data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-sine"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3623355760296!2d106.82472335971687!3d-6.347105762069136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec2e63dcf7b7%3A0x39a93c506b0174b8!2sPoliteknik%20Negeri%20Media%20Kreatif%20Jakarta!5e0!3m2!1sid!2sid!4v1685463718006!5m2!1sid!2sid" margin-top="150px" width="950" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <p data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine"><?php echo $row['Description'];?></p>

        </div>
      </div>
      <!-- /.row -->
<?php } ?>
    
    </div>
    <!-- /.container -->

    <!-- Footer -->
 <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
   
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>


</html>
