<?php
ob_start();
session_start();
$adminId=$_SESSION['aid'];
include_once("configuration/connect.php");
include_once("configuration/functions.php");
if(isset($_SESSION["aid"])) {
if(isLoginSessionExpired()) {
header("Location:logout.php");
}
}
checkIntrusion($adminId);
$date=date('d-m-Y');
$qry=mysqli_query($con,"select * from websiteheader where id='17'");
$hqry=mysqli_fetch_array($qry);
if(isset($_POST['update'])){
extract($_POST);
$id=$_POST['hidid'];
$crmname=$_POST['name'];
$crmtitle=$_POST['contact'];
$crmtitle2=$_POST['contact2'];
$fb=$_POST['facebook'];
$in=$_POST['insta'];
$tw=$_POST['twitter'];
$sk=$_POST['skype'];
$lk=$_POST['linkin'];
$filename = $_FILES['image']['name'];
$valid_ext = array('png','jpeg','jpg','ico');
$location2="../assets/img/".$filename;
$location = "../assets/img/".$filename;
$file_extension = pathinfo($location, PATHINFO_EXTENSION);
$file_extension = strtolower($file_extension);
move_uploaded_file($_FILES['image']['tmp_name'],$location);
/*if(in_array($file_extension,$valid_ext)){
compressImage($_FILES['image']['tmp_name'],$location,60);
}else{
echo "Invalid file type.";
}*/
  $sqlQry="UPDATE `websiteheader` SET `site_name`='$crmname',`site_contact`='$crmtitle',`site_contact2`='$crmtitle2',`facebook`='$fb',`insta`='$in',`twitter`='$tw',`skype`='$sk',`date`='$date',`linkin`='$lk' WHERE `id` ='$id'";
$execQry=mysqli_query($con,$sqlQry);
if($execQry){
header("location:websitesetting.php?msg=ups");
}else{
header("location:websitesetting.php?msg=upf");
}
}
if(isset($_GET['msg'])&&$_GET['msg']!=''){
$msg=$_GET['msg'];

switch($msg){
case 'ins':
$msg='<strong>Success!</strong> Website setting data has been added Successfully !!';
$class='success';
break;

case 'url':
$msg=' Customer slug allready exists !!';
$class='danger';
break;
case 'ups':
$msg='<strong>Success!</strong> Website setting data updated Successfully !!';
$class='success';
break;

case 'upf':
$msg='Website setting data not updated Successfully !!';
$class='danger';
break;
case 'default' :
$msg='';
break;

}
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Website Setting | <?php echo getSiteTitle(17); ?> </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include 'css.php'; ?>
<link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
<script src="assets/libs/jquery/jquery.min.js"></script>
<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
	window.location.href="dashboard.php?web="+x;
}
</script>

<script>
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
$('#pimage')
.attr('src', e.target.result);
};

reader.readAsDataURL(input.files[0]);
}
}
</script>
</head>
<body >
<!-- Begin page -->
<div id="layout-wrapper">
<?php include 'header.php'; ?>
<!-- ========== Left Sidebar Start ========== -->
<?php include 'leftmenu.php'; ?>
<!-- Left Sidebar End -->
<div class="main-content">
<div class="page-content" >

<div class="container-fluid" >
    <div class="row">
<div class="col-6">
<div class="page-title-box  align-items-center justify-content-between">
<h4 class="mb-3 font-size-18">Website Setting</h4>

                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>

                                            <li class="breadcrumb-item active">Website Setting</li>
                                        </ol>


</div>
</div>
<div class="col-6" style="text-align:right">
    <div class="page-title-right ">
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12">
<?php if($msg!=''){ ?>
<div class="alert alert-<?php echo $class ?> alert-dismissible fade show" role="alert">
<?php echo $msg; ?>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } ?></div></div>

<div class="row">
<div class="col-xl-12">
<div class="card overflow-hidden">
<div class="">
<div class="row">
<div class="col-7">
<div class="p-3">
<form  id="myform" action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="hidid" value="<?php echo $hqry['id'] ?>">
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<label for="formrow-name-input" class="form-label">Website Name <span style="color:red">*</span></label>
<input onKeyUp="fillPrintableName()" type="text" class="form-control" id="name" name="name" value="<?php echo $hqry['site_name'] ?>">
</div>
<div class="mb-3">
<label for="formrow-input" class="form-label"> Contact(For Call) <span style="color:red">*</span></label><span style="float:right;text-align:right"> Same For Whatsapp<input type="checkbox" placeholder="contact"  id="contact_chk" name="contact_chk" ></span>
<input type="text" class="form-control" id="contact" name="contact" value="<?php echo $hqry['site_contact'] ?>" />
</div>
<div class="mb-3">
<label for="formrow-input" class="form-label"> Contact(For Whatsapp) <span style="color:red">*</span></label>
<input type="text" class="form-control" id="contact2" name="contact2" value="<?php echo $hqry['site_contact2'] ?>" />
</div>
</div>
<div class="col-md-6">
<!--<div class="mb-3">
<label for="formrow-logo-input" class="form-label"> Logo <span style="color:red">*</span></label><br>
<div style="width:100%;margin: 0px auto 25px;overflow:hidden;padding:10px;border:1px dashed #ddd;text-align:center;">
<img id="pimage" src="../assets/img/<?php echo $hqry['site_logo'] ?>"  alt="" style="width: 100px;
    margin: 0 10px 0 20px;">
</div>

<input style="" class="form-control " id="image" type="file" name="image" onchange="readURL(this);">
</div>-->
<div class="mb-3">
<label class="form-label">Twitter</label>
<input type="text" name="twitter"  class="form-control" id="twitter" value="<?php echo $hqry['twitter'] ?>">
</div>
<div class="mb-3">
<label class="form-label">Skype</label>
<input type="text" name="skype"  class="form-control" id="skype" value="<?php echo $hqry['skype'] ?>">
</div>
<div class="mb-3">
<label class="form-label">Linkedin</label>
<input type="text" name="linkin"  class="form-control" id="linkin" value="<?php echo $hqry['linkin'] ?>">
</div>
</div>
<div class="col-md-6">
<div class="mb-3">
<label class="form-label">Facebook</label>
<input type="text" name="facebook"  class="form-control" id="facebook" value="<?php echo $hqry['facebook'] ?>">
</div>
</div>
<div class="col-md-6">
<div class="mb-3">
<label class="form-label">Instagram</label>
<input type="text" name="insta"  class="form-control" id="insta" value="<?php echo $hqry['insta'] ?>">
</div>
</div>
</div>
<div >
<button type="submit" name="update" class="btn btn-primary w-md btn-md">Update</button> <button style="margin-left:10px" type="button" onclick="goBack()"name="cancel" class="btn btn-outline-primary btn-md w-md">Cancel</button>
</div>
<div>

</div>
</form>   </div>
</div>
<div class="col-5 align-self-end">
<img src="assets/images/verification-img.png" height="330" width="330" alt="" class="img-fluid">
</div>
</div>
</div>

</div>
</div>
</div>
</div>
<!-- container-fluid -->
</div>
<!-- End Page-content -->

</div>
<!-- end main content-->
</div>
<!-- END layout-wrapper -->
<?php include 'script.php'; ?>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
<script type="text/javascript">
function changeUrl() {
  alter('val');
}
function goBack() {
  window.history.go(-1);
}
function fillPrintableName(){
var fname=document.getElementById('name').value;
var pname='Escort-in-'+fname;
var c=pname.replace(/\s/g, '-')
var nameoncard =document.getElementById('slug');
nameoncard.value=c;
}
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
contact2: {
required:true,
number: true,
minlength: 10,
maxlength: 10
}
},
messages: {
name: "Please enter name",
contact: {
minlength: "Please enter 10 digit contact no",
maxlength: "Please enter 10 digit contact no"
},
contact2: {
minlength: "Please enter 10 digit whatsapp no",
maxlength: "Please enter 10 digit whatsapp no"
}
},
submitHandler: function(form) { // for demo
form.submit();
}
});

});
$(document).ready(function() {
    //set initial state.
    $('#contact_chk').val(this.checked);
		var df=  $('#contact').val();
    $('#contact_chk').change(function() {
        if(this.checked) {
              $('#contact2').val(df);
							$('#contact2').prop('readonly', true);
        }else{$('#contact2').prop('readonly', false);$('#contact2').val('');}

    });
});
</script>
<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
<script src="assets/js/pages/form-advanced.init.js"></script>
</body>
</html>
