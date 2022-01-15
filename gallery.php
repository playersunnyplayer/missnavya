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

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery galleryPage">
      <div class="container">
          <div class="section-title mt-4">
            <h2>Our <span>Gallery</span></h2>
          </div>

        <div class="row no-gutters">
          <?php $qry=mysqli_query($con,'select * from galery order by id desc');
          while($gal=mysqli_fetch_row($qry)) {?>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/<?php echo $gal[2] ?>" class="gallery-lightbox">
                  <img src="assets/img/gallery/<?php echo $gal[2] ?>" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <?php include('include/footer.php') ?>
  <?php include('include/script.php') ?>
</body>

</html>
