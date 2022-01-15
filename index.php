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
<style>
  .book-a-table-btn {
    display: flex;
  }
</style>
</head>
<body>
  
<?php include('include/header.php') ?>
  <!-- ======= Hero Section ======= -->
	
      <?php $qry=mysqli_query($con,"select * from websiteslider order by id desc");
          $i=0;
            while($fetch=mysqli_fetch_array($qry)){
              $i++;
              ?>
    
    			<?php if($i==1){?>  <?php } ?>
    				<img class="homeBanner" src="assets/img/slide/<?php echo $fetch['image'] ?>" />
			    <?php echo $fetch['content'] ?>
    <?php }?>
  
 <!-- <section id="hero">

	<div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <?php $qry=mysqli_query($con,"select * from websiteslider order by id desc");
          $i=0;
            while($fetch=mysqli_fetch_array($qry)){
              $i++;
              ?>
              <div class="carousel-item <?php if($i==1){?> active <?php } ?>" style="background: url(assets/img/slide/<?php echo $fetch['image'] ?>);">
                <div class="carousel-container">
                  <div class="carousel-content">
                    <h2 class="animate__animated animate__fadeInDown">
                      <a href="index"><?php echo $fetch['heading'] ?></a>
                    </h2>
                    <p class="animate__animated animate__fadeInUp"><?php echo $fetch['content'] ?></p>
                    <div>
						<a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Cities We Cover</a>
						<a href="contact" class="btn-book animate__animated animate__fadeInUp scrollto">Book For Tonight</a>
                    </div>
                  </div>
                </div>
              </div>
          <?php }?>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
<?php $sec1=getSectionDetail(1);
$sec2=getSectionDetail(2);
$sec3=getSectionDetail(3);
$sec4=getSectionDetail(4);
 ?>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row homeAbout">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/<?php echo $sec1[4] ?>");'>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3><?php echo $sec1[2] ?></h3>
            <?php echo $sec1[3] ?>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2><?php echo $sec2[2]; ?></h2>
        </div>

        <div class="row">
          <div class="col-md-8">
            <?php echo $sec2[3]; ?>
          </div>

          <div class="col-md-4">
            <img src="assets/img/<?php echo $sec2[4]; ?>" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2><?php echo $sec3[2]; ?></h2>
          <p><?php echo $sec3[3]; ?> </p>
        </div>

        <div class="row no-gutters mt-3">
          <?php $qry=mysqli_query($con,'select * from galery order by id desc');
			$j=0;
          while($gal=mysqli_fetch_row($qry)) {
          		$j++;
            if($j<=8){
          ?>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/<?php echo $gal[2] ?>" class="gallery-lightbox">
                  <img src="assets/img/gallery/<?php echo $gal[2] ?>" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          <?php }}?>
          
          <?php if($j>8) { ?>
          <div class="row no-gutters mt-3">
              <div class="col-md-5">
            </div>
            <div class="col-md-2">
               <a href="gallery" class="book-a-table-btn">View Gallery</a>
            </div>
             <div class="col-md-5">
              
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Gallery Section -->
    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2><?php echo $sec4[2]; ?></span></h2>
        </div>

        <div class="row">

          <div class="col-md-4">
            <img src="assets/img/<?php echo $sec4[4]; ?>" class="img-fluid" alt="">
          </div>

          <div class="col-md-8">
            <?php echo $sec4[3]; ?>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

  </main><!-- End #main -->

<?php include('include/footer.php') ?>
<?php include('include/script.php') ?>
</body>

</html>
