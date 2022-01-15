<?php
ob_start();
session_start();
include("admin/configuration/connect.php");
include("admin/configuration/functions.php");
$qry=mysqli_query($con,"select * from websiteheader where id='17'");
$hqry=mysqli_fetch_array($qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('include/css.php') ?>
</head>

<body>

<?php include('include/header2.php') ?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <img src="assets/img/inner-banner-e.jpg" />
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-sm-12">
<?php echo getContent('about'); ?>

          </div>
        </div>
      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

  <?php include('include/footer.php') ?>
  <?php include('include/script.php') ?>

</body>

</html>
