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

    <div class="container citiesContainer">
        <div class="section-title mt-4">
          <h2>Cities <span>We offer</span></h2>
        </div>
        <ul class="citiesList">
          <?php $qry=mysqli_query($con,"select * from websitepage order by id desc limit 20");
            while($fetch=mysqli_fetch_array($qry)){?>
              <li><a href="<?php echo $fetch['url']?>"><?php echo $fetch['city'] ?></a></li>
        <?php }?>
        </ul>
    </div>

  </main><!-- End #main -->
  <?php include('include/footer.php') ?>
  <?php include('include/script.php') ?>
</body>

</html>
