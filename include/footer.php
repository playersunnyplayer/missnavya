<footer id="footer">
  <div class="container">
    <h3>Contact By Cities</h3>
    <ul>
      <?php $qry=mysqli_query($con,"select * from websitepage order by id desc limit 10");
        while($fetch=mysqli_fetch_array($qry)){?>
          <li><a href="<?php echo $fetch['url']?>"><?php echo $fetch['city'] ?></a></li>
    <?php }?>
    </ul>
    <ul class="bootomFooter">
      <li><a href="index">Home</a></li>
      <li><a href="About">About Us</a></li>
      <li><a href="Gallery">Gallery</a></li>
      <li><a href="cities">Cities</a></li>
      <li><a href="Terms">Terms</a></li>
      <li><a href="Disclaimer">Disclaimer</a></li>
      <li><a href="Privacy-Policy">Privacy Policy</a></li>
    </ul>
    <div class="social-links">
      <a target="_blank" href="<?php echo $hqry['twitter'] ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a target="_blank" href="<?php echo $hqry['facebook'] ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a target="_blank" href="<?php echo $hqry['insta'] ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a target="_blank" href="<?php echo $hqry['skype'] ?>" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a target="_blank" href="<?php echo $hqry['linkin'] ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</footer>
