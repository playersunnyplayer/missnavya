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
if(isset($_GET['did'])&&$_GET['did']!=''){
$did=$_GET['did'];
$delQry=mysqli_query($con,"delete from `galery` where `id`='$did'");
if($delQry){
header("location:section3.php?msg=dls");
}else{
header("location:section3.php?msg=dlf");
}
}
if(isset($_POST['addpage2'])){
	extract($_POST);
	$id=$_POST['hidid'];
	$heading=$_POST['heading'];
	$content=$_POST['content'];

	$sqlQry="UPDATE `websitehomepage` SET `heading`='$heading',`content`='$content',`status`='1',`date`='$date',`up_id`='$adminId' WHERE `id` =$id";

$excQry=mysqli_query($con,$sqlQry);
 if($excQry ){
		header("location:section3.php?msg=ups");
	}else{
		header("location:section3.php?msg=inf");
	}
	}
	if(isset($_POST['update'])){
		extract($_POST);
		$date=date('d-m-Y');
		$id=$_POST['hidid'];
		$filename = date('YmdHis')."_".$_FILES['image2']['name'];
		$valid_ext = array('png','jpeg','jpg','ico');
		$location2="../assets/img/gallery/".$filename;
		$location = "../assets/img/gallery/".$filename;
		$file_extension = pathinfo($location, PATHINFO_EXTENSION);
		$file_extension = strtolower($file_extension);
		move_uploaded_file($_FILES['image2']['tmp_name'],$location);

			$excQry=mysqli_query($con,"update `galery` set `image`='$filename' where `id`='$id'");
			if($excQry ){
				header("location:section3.php?msg=ups");
			}else{
				header("location:section3.php?msg=upf");
			}
		}
if(isset($_POST['addpage'])){
	extract($_POST);
	$date=date('d-m-Y');
	$filename = date('YmdHis')."_".$_FILES['image2']['name'];
	$valid_ext = array('png','jpeg','jpg','ico');
	$location2="../assets/img/gallery/".$filename;
	$location = "../assets/img/gallery/".$filename;
	$file_extension = pathinfo($location, PATHINFO_EXTENSION);
	$file_extension = strtolower($file_extension);
	move_uploaded_file($_FILES['image2']['tmp_name'],$location);

		$excQry=mysqli_query($con,"INSERT INTO `galery`( `section`, `image`, `date`) VALUES ('3','$filename','$date')");
		if($excQry ){
			header("location:section3.php?msg=ins");
		}else{
			header("location:section3.php?msg=inf");
		}
	}
if(isset($_GET['msg'])&&$_GET['msg']!=''){
	$msg=$_GET['msg'];

	switch($msg){
	case 'ins':
		$msg='<strong>Success!</strong> Image has been added Successfully !!';
		$class='success';
	break;

	case 'inf':
		$msg='Data not inserted Successfully !!';
		$class='danger';
	break;
	case 'ups':
		$msg='<strong>Success!</strong> Image updated Successfully !!';
		$class='success';
	break;
	case 'dls':
		$msg='<strong>Success!</strong> Data Deleted Successfully !!';
		$class='success';
	break;
	case 'dlf':
		$msg='Image not deleted Successfully !!';
		$class='danger';
	break;
	case 'upf':
		$msg='Image not updated Successfully !!';
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
<title>Gallery Section | <?php echo getSiteTitle(17); ?>  </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include 'css.php'; ?>
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<script src=https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js></script>
<script type="text/javascript">
$(document).ready(function(){
$(".showcode").click(function(){
	alert('dfgdf');
var a=this.id;$.ajax({
	url:"viewproductcode.php",type:"post",data:{pid:a},
	success:function(b){
		//var vl=b.split('$');
		$("#pageinfo").html(b);

		}
		})
		})
		});
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
<div class="container-fluid mt-3">

<div class="row">
<div class="col-6">
<div class="page-title-box  align-items-center justify-content-between">
<h4 class="mb-3 font-size-18">Gallery Section</h4>

                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
  																					<li class="breadcrumb-item ">Home Page</li>
																					  <li class="breadcrumb-item active">Gallery Section</li>

                                        </ol>


</div>
</div>
<div class="col-6" style="text-align:right">
    <div class="page-title-right ">
<a href="#add"	<button type="button" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-success btn-md waves-effect waves-light">Add New</button></a>
</div>
</div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php if($msg!=''){ ?>
<div class="alert alert-<?php echo $class ?> alert-dismissible fade show" role="alert">
<?php echo $msg; ?>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } ?>

    </div>
</div>
<form id="myform" action="" method="post"   enctype="multipart/form-data">
	<?php $fetch=mysqli_fetch_array(mysqli_query($con,"select * from websitehomepage where section='3'")); ?>
	<input type="hidden" name="hidid" value="<?php echo $fetch['id'] ?>">
<div class="row">
	<div  class="mb-3 col-lg-4">
		<label for="name">Heading</label>
	<input type="text" id="heading" name="heading" class="form-control" value="<?php echo $fetch['heading'] ?>">
</div>
	<div  class="mb-3 col-lg-6">
		<label for="name">Content</label><input type="text" id="editor" name="content" class="form-control" value="<?php echo $fetch['content'] ?>"/></div>
	<div class="col-md-2" style="margin-top:25px">
			<button type="submit" name="addpage2" class=" btn btn-success w-md btn-md">Update</button>
	</div>
	</div>
</form>
<div class="row">
<div class="col-lg-12">
<div class="">
<div class="table-responsive">
<table id="datatable" class="table project-list-table table-nowrap align-middle table-borderless">
<!--  <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">-->
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Image</th>
<th scope="col">Edit</th>
<th scope="col">Delete</th>
</tr>
</thead>
<tbody>
<?php
$i=0;
$qry=mysqli_query($con,"select * from galery  order by id desc");
$num=mysqli_num_rows($qry);
if($num>0){
while ($product=mysqli_fetch_array($qry)) {
$i++;
?>
<tr>
<td> <div class="avatar-xs">
<span class="avatar-title rounded-circle" >
<?php echo $i; ?>
</span>
</div></td>
<td><a href="../assets/img/gallery/<?php echo $product['image'] ?>"><img src="../assets/img/gallery/<?php echo $product['image'] ?>" alt="" class="avatar-sm" style="max-height: 50px;
    max-width: 100px;
    height: auto;
    width: auto;"></a></td>
<td>
<a href="#edit" class=edit id="<?php echo ($product['id']) ?>"  ><button data-bs-toggle="modal" data-bs-target="#edit" class="btn btn-info btn-md waves-effect waves-light" type="button"><i class="bx bx-edit" ></i> Edit</button></a>
</td>
<td>
<a href="#del" class=delete id="<?php echo ($product['id']) ?>"  ><button data-bs-toggle="modal" data-bs-target="#del" class="btn btn-danger btn-md waves-effect waves-light" type="button"><i class="bx bx-trash" ></i> Delete</button></a>
</td>
</tr>
<?php }}else{?>
<tr><td colspan="3" align="center">--No Record Found--</td></tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="del" class="modal fade bs-example-modal-sm bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
  <div class="modal-body">
                               <div class="text-center mb-4">
                                   <div class="avatar-md mx-auto mb-4">
                                       <div class="avatar-title bg-light rounded-circle text-primary h1">
                                           <i class="mdi mdi-trash-can"></i>
                                       </div>
                                   </div>

                                   <div class="row justify-content-center">
                                       <div class="col-xl-10">
                                           <h4 class="text-primary">Are you sure? !!</h4>
                                           <p class="text-muted font-size-14 mb-4">You won't be able to revert this!</p>

                                           <div class=" ">
                                             <span id="delbtn"></span>
                                                <button class="btn btn-danger" type="button" data-bs-dismiss="modal" aria-label="Close">
                                                   Cancel
                                               </button>

                                           </div>

                                       </div>
                                   </div>
                               </div>
                           </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
<div id="edit" class="modal fade bs-example-modal-sm bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
	<div class="modal-body">


                                   <div class="row justify-content-center">
                                       <div class="col-xl-10">
																				 <form id="editForm" class="" enctype="multipart/form-data" method="post">
																					 <input type="hidden" id="hidid" name="hidid" value="">
																					 <div class="alert alert-info alert-dismissible fade show" role="alert">
																						 	Image Size : 800 * 600
																						 </div>
																					 <div  class="mb-3 col-md-12"><label for="name">Edit Image <span style="color:red">*</span></label>
	 																					<br><img id="pimage" style="max-width: 100%;" src="../assets/img/<?php echo $fetch['img'] ?>"  alt="">
	 																				<input required class="form-control form-control" id="image" type="file" name="image2" onchange="readURL(this);">
	 																				</div>
																					<div class="mb-3 col-md-12">
																					<button type="submit" name="update" class="btn btn-success w-md btn-md">Update</button> <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-outline-success btn-md w-md">Cancel</button>
																					</div>
																				 </form>


                                       </div>
                                   </div>
                               </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
<div id="add" class="modal fade bs-example-modal-sm bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
  <div class="modal-body">


                                   <div class="row justify-content-center">
                                       <div class="col-xl-10">
																				 <form id="addForm" class="" enctype="multipart/form-data" method="post">
																					 <div class="alert alert-info alert-dismissible fade show" role="alert">
																							Image Size : 800 * 600
																						 </div>
																					 <div  class="mb-3 col-md-12"><label for="name">Image <span style="color:red">*</span></label>
	 																					<br><img id="pimage" style="max-width: 100%;" src="../assets/img/<?php echo $fetch['img'] ?>"  alt="">
	 																				<input required class="form-control form-control" id="image" type="file" name="image2" onchange="readURL(this);">
	 																				</div>
																					<div class="mb-3 col-md-12">
																					<button type="submit" name="addpage" class="btn btn-success w-md btn-md">Add</button> <button type="button" data-bs-dismiss="modal" aria-label="Close" name="cancel" class="btn btn-outline-success btn-md w-md">Cancel</button>
																					</div>
																				 </form>


                                       </div>
                                   </div>
                               </div>
                           </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
<script src="assets/libs/jquery/jquery.min.js"></script>
			<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/libs/metismenu/metisMenu.min.js"></script>
			<script src="assets/libs/simplebar/simplebar.min.js"></script>
			<script src="assets/libs/node-waves/waves.min.js"></script>
			<!-- Required datatable js -->
			<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
			<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
			<!-- Buttons examples -->
			<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
			<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
			<script src="assets/libs/jszip/jszip.min.js"></script>
			<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
			<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
			<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
			<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
			<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

			<!-- Responsive examples -->
			<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
			<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

			<!-- Datatable init js -->
			<script src="assets/js/pages/datatables.init.js"></script>
			<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
			<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
			<script src="assets/js/app.js"></script>
<script type="text/javascript">
$(document).on("click",".delete",function(){
var a=this.id;
var x="<a  href='section3.php?did="+a+"'><button class='btn btn-success'>Yes delete it!</button></a>";
$('#delbtn').html(x);
})
$(document).on("click",".edit",function(){
var a=this.id;
$('#hidid').val(a);
})
$(document).ready(function() {
	$('#editForm').validate({
		rules: {
		image2:"required"
		},
		messages: {
		image: "Please select image"
		},
	submitHandler: function(form) { // for demo
		form.submit();
	}
	});
	$('#addForm').validate({
		rules: {
		image2:"required"
		},
		messages: {
		image: "Please select image"
		},
	submitHandler: function(form) { // for demo
		form.submit();
	}
	});
	});
</script>
</body>
</html>
