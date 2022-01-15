<?php
ob_start();
session_start();
include("admin/configuration/connect.php");
include("admin/configuration/functions.php");
if (isset($_GET['city'])&&$_GET['city']!='') {
$city=$_GET['city'];
$qry=mysqli_query($con,"select * from websitepage where url='$city'");
$hqry2=mysqli_fetch_array($qry);
}
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
<!--
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="text-transform: capitalize;"><?php echo $hqry2['url'] ?></h2>
          <ol>
            <li><a style="color:#fff" href="index">Home</a></li>
            <li style="text-transform: capitalize;" class="active"><a href="#">Escorts in <?php echo $hqry2['city'] ?></a></li>
          </ol>
        </div>
      </div>
-->
    </section><!-- End Breadcrumbs Section -->
  


    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <img src="assets/img/inner-banner-e.jpg" />
    </section><!-- End Breadcrumbs Section -->
  
  

    <!-- ======= About Section ======= -->
    <section id="about" class="about cityPage">
      <div class="container">
        <div class="row">

          <div class="col-sm-12">
              <img src="assets/img/<?php echo $hqry2['image'] ?>" class="img-fluid mb-4 cityManiImg" alt="<?php echo $hqry2['img_alt'] ?>">
              <h1 class="mb-4" style="text-transform: capitalize;">
                Escorts in <?php echo $hqry2['city'] ?>
                <span class="contactBtnWrap">
                  <a href="tel:<?php echo $hqry2['contact'] ?>" class="call cityBtn">
                    <i class="bi bi-phone d-flex align-items-center"></i>
                    <span><?php echo $hqry2['contact'] ?></span>
                  </a>
                  <a href="https://api.whatsapp.com/send?phone=<?php echo $hqry2['contact'] ?>" class="wp cityBtn">
                    <i class="bi bi-whatsapp d-flex align-items-center"></i>
                    <span>Message Me</span>
                  </a>
                </span>
              </h1>

              <?php if($hqry2['def']=='1'){?>
            
            <p>
                We always aim at providing you with the utmost sexual pleasure, and our girls leave no stone unturned for giving you memorable experiences in <?php echo $hqry2['city'] ?>. Our erotic escorts in <?php echo $hqry2['city'] ?> use many sensual services and foreplay acts during the sex session so that their clients might explore and enjoy their sensual wishes to the fullest. Whatever the fantasies you want to fulfill with our high-profile and busty babes, they would always welcome you and will give you even more sensual and satisfactory services. Right from high-class foreplay services like BSDM, deep throat oral sex, blowjob, cum in mouth, etc. to the highly satisfying sex sessions like anal sex, spooning, threesome, and others, you will be happily provided as per your requests.
              </p>

              <p>
                Our <?php echo $hqry2['city'] ?> escorts are very much comfortable with their clients’ urges and this is the reason we want you to open up your heart and reveal all those things that you want to experience with our beauties. No need to hide any of your desires in any manner as the escorts are more than happy if they find your hidden urges. If we talk about 100% real sex satisfaction, then it means to us. Our escort services are only limited to providing only coitus services and foreplay acts as you will also be enjoying some other sensual services as per your desires. They are classy and open-minded, so you would never find it challenging to get comfortable with our <?php echo $hqry2['city'] ?> escorts - the friendly environment would naturally encourage you to talk of your erotic desires.
              </p>
            
            <?php }else{ ?>

              <?php echo $hqry2['content'] ?>
            <?php }  ?>
             
          </div>

        </div>

        <div class="row">
          <div class="section-title mt-4">
            <h2>Cities <span>We offer</span></h2>
          </div>

          <ul class="citiesList r-p-10">
            <?php $qry=mysqli_query($con,"select * from websitepage order by id desc");
              while($fetch=mysqli_fetch_array($qry)){?>
                <li><a href="<?php echo $fetch['url']?>"><?php echo $fetch['city'] ?></a></li>
          <?php }?>

          </ul>

          <a href="cities" class="viewBtn">View all cities</a>
        </div>

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

  <?php include('include/footer.php') ?>
  <?php include('include/script.php') ?>
</body>

</html>
