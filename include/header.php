<?php $page=basename($_SERVER['PHP_SELF']); ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <a href="index"><img src="assets/img/<?php echo $hqry['site_logo'] ?>" alt=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link <?php if ($page=='index'){ ?>active<?php } ?>" href="index">Home</a></li>
          <li><a class="nav-link <?php if ($page=='cities'){ ?>active<?php } ?>" href="cities">Cities</a></li>
          <li><a class="nav-link <?php if ($page=='gallery'){ ?>active<?php } ?>" href="gallery">Gallery</a></li>

          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <!-- <li><a class="nav-link <?php if ($page=='contact'){ ?>active<?php } ?>" href="contact">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="https://api.whatsapp.com/send?phone=<?php echo $hqry['site_contact2'] ?>" class="book-a-table-btn scrollto">
        <i class="bi bi-whatsapp d-flex align-items-center"></i>
      </a>

      <a href="tel:<?php echo $hqry['site_contact'] ?>" class="book-a-table-btn scrollto">
        <i class="bi bi-phone d-flex align-items-center"><span><?php echo $hqry['site_contact'] ?></span></i>
      </a>

    </div>
  </header><!-- End Header -->
