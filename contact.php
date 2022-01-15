<?php
ob_start();
session_start();
include("admin/configuration/connect.php");
include("admin/configuration/functions.php");
$qry=mysqli_query($con,"select * from websiteheader where id='17'");
$hqry=mysqli_fetch_array($qry);
if(isset($_POST['addpage'])){
  $name=$_POST['name'];
	$email=$_POST['email'];
  $contact=$_POST['contact'];
  $message=$_POST['subject'];
  $baseurl="";
  $date=date('d-m-Y h:i:a');
  mysqli_query($con,"INSERT INTO `contact`(`tel`, `email`, `name`, `sub`, `date`) VALUES ('$contact','$email','$name','$message','$date')");
$mai=sendFeedBackMail($name,$email,$contact,$message,$baseurl);
if($mai)
{
  header('location:contact.php?msg=ins&a='.$mai);
}else{
  header('location:contact.php?msg=inf&a='.$mai);
}
}
if(isset($_GET['msg'])&&$_GET['msg']!=''){
$msg=$_GET['msg'];
//	$name=getPageNameById(base64_decode($_GET['pid']));
switch($msg){
case 'ins':
$msg='<strong>Success!</strong> Page has been added Successfully !!';
$class='success';
break;

case 'inf':
$msg='Data not inserted Successfully !!';
$class='danger';
break;
case 'url':
$msg='Page slug already used!!';
$class='danger';
break;

case 'dlf':
$msg='Page not deleted !!';
$class='danger';
break;
case 'dls':
$msg= '<strong>Success!</strong> Page Deleted Successfully !!';
$class='success';
break;
case 'default' :
$msg='';
break;

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('include/css.php') ?>
<style media="screen">
  .error{
    color: red !important;
    font-weight: 400 !important;
    font-size: 13px;
  }
</style>
</head>
<body>
<?php include('include/header2.php') ?>
  <main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <img src="assets/img/inner-banner-e.jpg" />
    </section><!-- End Breadcrumbs Section -->
    <?php if($msg!=''){ ?>
  	<div class="alert alert-<?php echo $class ?> alert-dismissible fade show" role="alert">
  	<?php echo $msg; ?>
  	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  	</div>
  	<?php } ?>
    <div class="container citiesContainer">
        <div class="section-title mt-4">
          <h2>Cities <span>We offer</span></h2>
        </div>

        <form id="myform" class="contactForm" action="" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputEmail4">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <label for="inputEmail4">Phone Number</label>
                <input type="text" name="contact" class="form-control" id="contact" placeholder="Your phone number">
              </div>
              <div class="form-group">
                <label for="inputPassword4">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="inputEmail4">Subject</label>
                <textarea name="subject" class="form-control" id="" cols="30" rows="10"></textarea>
              </div>
            </div>
          </div>
          <button name="addpage" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

  </main><!-- End #main -->
  <?php include('include/footer.php') ?>
  <?php include('include/script.php') ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
  $('#myform').validate({
  	rules: {
  	name: "required",
  	contact: {
      required:true,
  	number: true,
  	minlength: 10,
  	maxlength: 10
  	},
  	email:"required",
  	subject: "required"
  	},
  	messages: {
  	name: "Please enter name",
  	contact: {
  	minlength: "Please enter 10 digit contact no",
  	maxlength: "Please enter 10 digit contact no"
  	},
  	email: "Please enter valid email",
  	subject: "Please enter subject"

  	},
  submitHandler: function(form) { // for demo
  	form.submit();
  }
  });
  });
  </script>
</body>
</html>
