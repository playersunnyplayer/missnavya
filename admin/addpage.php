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
$date=date('d-m-Y h:i a');
checkIntrusion($adminId);
if(isset($_POST['addpage'])){
	extract($_POST);
	$city=$_POST['pgname'];
	$url=strtolower($_POST['slug']);
	$content=$_POST['editor'];
	$status=$_POST['sts'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$content_chk=$_POST['df'];
	$imgalt=$_POST['imgalt'];
//	$date=date('d-m-Y');
$tfilename=$_FILES['image2']['name'];
	$filename = date('YmdHis')."_".$_FILES['image2']['name'];
	$valid_ext = array('png','jpeg','jpg','ico');
	$location2="../assets/img/".$filename;
	$location = "../assets/img/".$filename;
	$file_extension = pathinfo($location, PATHINFO_EXTENSION);
	$file_extension = strtolower($file_extension);
	if(in_array($file_extension,$valid_ext)){
		compressImage($_FILES['image2']['tmp_name'],$location,60);
		}else{
		echo "Invalid file type.";
	}
  foreach($_POST['cities'] as $item){
  $st[]=$item;
}
  $state=implode(',',$st);
	if($tfilename!=''){
		$excQry=mysqli_query($con,"INSERT INTO `websitepage`(`related_cities`,`city`, `url`, `content`, `image`, `img_alt`,`status`, `date`,`contact`,`email`,`def`)
		 VALUES ('$state','$city','$url','$content','$filename','$imgalt','$status','$date','$contact','$email','$content_chk')");
    }
		 else{
			 $excQry=mysqli_query($con,"INSERT INTO `websitepage`(`related_cities`,`city`, `url`, `content`, `image`,`img_alt`, `status`, `date`,`contact`,`email`,`def`)
				VALUES ('$state','$city','$url','$content','20211120132701.jpg','Escort','$status','$date','$contact','$email','$content_chk')");
		 }
		if($excQry ){
			header("location:viewpage.php?msg=ins");
		}else{
			header("location:addpage.php?msg=inf");
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
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Add Page | <?php echo getSiteTitle(17); ?> </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include 'css.php'; ?>
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<style>
#sticky-div {
   position : fixed;
 /*bottom:0;*/

}
.edit_content_div_wrap .cke_reset {
    width: 100%;
}
</style>
<script>
$counter =0;
//$a =0;
	// add code
		function addCode(ele)
		{
			$button = $(ele);
			// increment
			$counter += 1;
			$button.closest('tr').before('<tr><td><div  class="mb-3 col-lg-12"><label for="name">Title</label><input type="text"  name="pp['+$counter+'][title]" class="form-control"/></div><div  class="mb-3 col-lg-12"><label for="name">Content</label><textarea class="form-control" id="editor'+$counter+'" placeholder="Content" name="pp['+$counter+'][content]"></textarea></div><div style="text-align:right"><button class="btn btn-danger btn-md remove_code"  type="button" onClick="remove(this)">Remove section</button></div></td></tr>');
			var a="editor"+$counter;
			CKEDITOR.replace(a);
		}
		function remove(ele)
		{
			$button = $(ele);
			$button.closest('tr').remove();
			return false;
		}
</script>
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
<div class="page-content">
<div class="container-fluid">
    <div class="row">
<div class="col-6">
<div class="page-title-box  align-items-center justify-content-between">
<h4 class="mb-3 font-size-18">Add New City</h4>

                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                            <li class="breadcrumb-item"> <a href="viewpage.php">Pages</a></li>
                                            <li class="breadcrumb-item active">Add New City</li>
                                        </ol>


</div>
</div>
<div class="col-6" style="text-align:right">
    <div class="page-title-right ">
</div>
</div>
</div>
<?php if($msg!=''){ ?>
<div class="alert alert-<?php echo $class ?> alert-dismissible fade show" role="alert">
<?php echo $msg; ?>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } ?>
<form id="myform" action="" method="post"   enctype="multipart/form-data">
<div class="row">
 
	<div class="mb-3 col-lg-2">
	<label for="slug">City <span style="color:red">*</span></label>
	<input type="text" placeholder="City name" required class="form-control" id="pgname" name="pgname" onKeyUp="fillPrintableName()">
	</div>
	<div  class="mb-3 col-lg-2">
	<label for="slug">Slug</label>
	<input style="text-transform:lowercase" readonly  type="text" id="slug" name="slug" class="form-control" value=""/>
	</div>
	<div class="mb-3 col-lg-3">
      <label for="slug">Contact <span style="color:red">*</span>  </label>
      <label for="contact_chk" style="float:right;text-align:right"> Default <input type="checkbox" placeholder="contact"  id="contact_chk" name="contact_chk" style="margin-left:10px"></label>
	<input type="text" placeholder="contact" required class="form-control" id="contact" name="contact" >
	<input type="hidden" id="default" name="defalut" value="<?php echo getContact(17) ?>">
	</div>
	<div class="mb-3 col-lg-3">
	<label for="slug">Page Email</label>
	<input type="email" placeholder="Email"  class="form-control" id="email" name="email" >
	</div>
	<div  class="mb-3 col-lg-2">
	<label for="order">Status</label>
	<select class="form-select" name="sts" id="sts">
		<option value="1">Publish</option>
		<option value="0">Save As Draft</option>
	</select>
	</div>
  </div>
  <div class="card">
<div class="card-body">
  <div class="row">
    <h4 class="card-title mb-4">Related Cities</h4>
    <?php $cityqry=mysqli_query($con,"select id,city from websitepage order by id desc");
        while($cityfetch=mysqli_fetch_array($cityqry)){?>
         <div class="col-md-2">
           <label for="<?php echo $cityfetch['id'] ?>" style="cursor:pointer"> 
  	 <input type="checkbox" placeholder="contact" class="form-checkbox" value="<?php echo $cityfetch['id'] ?>"  id="<?php echo $cityfetch['id'] ?>" name="cities[]" > <?php echo $cityfetch['city'] ?>
  </label>
         </div>
    <?php }?>
  </div></div>
  </div>
<div class="row">
<div class="card">
<div class="card-body">
<h4 class="card-title mb-4">Page Content 
  <label for="content_chk" style="float:right;text-align:right"> 
  	Default Page Content &nbsp;&nbsp;<input type="checkbox" placeholder="contact" class="form-checkbox" value="1"  id="content_chk" name="content_chk" >
  </label>
</h4>
<div class="row" id="edit_content_div">
<div  class="mb-3 col-md-8">
	<div class="row mb-3 edit_content_div_wrap">
      	<div class="col-sm-12">
          <label for="name">Content <span style="color:red"></span></label>
          <textarea id="editor" name="editor" class="form-control"></textarea>
	    </div>
	</div>
  
	<div class="row">  
      <div class="col-sm-6 mb-3">
          <label for="name">Image <span style="color:red"></span></label>
          <input class="form-control form-control" id="image" type="file" name="image2" onchange="readURL(this);">
      </div>
      <div class="col-sm-6 mb-3">
          <label for="name">Image Alt Name<span style="color:red"></span></label>
	      <input type="text" name="imgalt" value="" class="form-control">
      </div>
	</div>
</div>
<div  class="mb-3 col-md-4"><label for="name">Image <span style="color:red">*</span></label>
	<br><img id="pimage" style="max-width: 100%;" src="..../assets/img/20211120132701.jpg"  alt="">

</div>
</div>
<div class="row" id="default_content_div" style="display:none">
	<div  class="mb-3 col-md-8">
		<input type="hidden" name="df" id="df" value="0">
	<p>
									We always aim at providing you with the utmost sexual pleasure, and our girls leave no stone unturned for giving you memorable experiences in <span id="myspan" class="dm"></span>. Our erotic escorts in <span class="dm">Goa</span> use many sensual services and foreplay acts during the sex session so that their clients might explore and enjoy their sensual wishes to the fullest. Whatever the fantasies you want to fulfill with our high-profile and busty babes, they would always welcome you and will give you even more sensual and satisfactory services. Right from high-class foreplay services like BSDM, deep throat oral sex, blowjob, cum in mouth, etc. to the highly satisfying sex sessions like anal sex, spooning, threesome, and others, you will be happily provided as per your requests.
								</p>

								<p>
									Our <span id="myspan" class="dm"></span> escorts are very much comfortable with their clients’ urges and this is the reason we want you to open up your heart and reveal all those things that you want to experience with our beauties. No need to hide any of your desires in any manner as the escorts are more than happy if they find your hidden urges. If we talk about 100% real sex satisfaction, then it means to us. Our escort services are only limited to providing only coitus services and foreplay acts as you will also be enjoying some other sensual services as per your desires. They are classy and open-minded, so you would never find it challenging to get comfortable with our <span class="dm">Goa</span> escorts - the friendly environment would naturally encourage you to talk of your erotic desires.
								</p>
							</div>
							<div  class="mb-3 col-md-4"><label for="name">Image <span style="color:red">*</span></label>
								<br><img id="pimage2" style="max-width: 100%;" src="../assets/img/20211120132701.jpg"  alt="">

							</div>
</div>
</div>
</div>
</div>

<div class="row">
	<div class="mb-3 col-md-12">
	<button type="submit" name="addpage" class="btn btn-success w-md btn-md">Add</button> <button type="button" onclick="goBack()"name="cancel" class="btn btn-outline-success btn-md w-md">Cancel</button>
	</div>
</div>

</form>
</div>
</div>

</div>
</div>
<?php include 'script.php'; ?>
<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/js/pages/form-advanced.init.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
<script type="text/javascript">
function goBack() {
window.history.go(-1);
}
function fillPrintableName(){
	var fname=document.getElementById('pgname').value;
	var pname='call-girl-'+fname;
  var c=pname.replace(/\s/g, '-')
	var nameoncard =document.getElementById('slug');

	nameoncard.value=c;
	document.getElementById('myspan').innerHTML=fname;
}
$(document).ready(function() {
	 CKEDITOR.instances.editor.updateElement();
$('#myform').validate({
	rules: {
    state: "required",
	pgname: "required",
	contact: {
	number: true,
	minlength: 10,
	maxlength: 10
	},
	editor:"required"
	},
	messages: {
    state: "Please select state",
	pgname: "Please enter city",
	contact: {
	minlength: "Please enter 10 digit contact no",
	maxlength: "Please enter 10 digit contact no"
	},
	editor: "Please enter city content"


	},
submitHandler: function(form) { // for demo
	form.submit();
}
});
});
$(document).ready(function() {
    //set initial state.
    $('#content_chk').val(this.checked);
    $('#content_chk').change(function() {
				var df2=$('#pgname').val();
        if(this.checked) {
              $('#myspan').html(df2);
							  $('#df').val(1);
							$('#default_content_div').show();
								$('#edit_content_div').hide();
        }else{	$('#default_content_div').hide();
						$('#edit_content_div').show();
  $('#myspan').html(df2);
	 $('#df').val(0);
					}
 
    });
		$('#contact_chk').val(this.checked);
		var df=  $('#default').val();
		$('#contact_chk').change(function() {

				if(this.checked) {
							$('#contact').val(df);
							$('#contact').prop('readonly', true);
				}else{$('#contact').prop('readonly', false);$('#contact').val('');}

		});
});
</script>
<script>
  CKEDITOR.replace( 'editor' );
</script>
</body>
</html>
