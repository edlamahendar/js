<?php session_start();
error_reporting(0); ?>
<?php include_once('test.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edla Education Forms</title>
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
         <link href="css/bootstrap-datepicker.css" rel="stylesheet">
         <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
         <link href="css/main_style.css" rel="stylesheet">
  </head>
  <body>
  <!-- start Header -->
<div id="header">
<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Education Forms</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
    <span class="navbar-text">
      Navbar text with an inline element
    </span>
  </div>
</nav>

</div>
 <!-- end Header -->

 <div class="mesg">
 <?php
 if (!empty($_SESSION['message'])) {
    echo '<p class="message alert alert-success"> '.$_SESSION['message'].'</p>';
    unset($_SESSION['message']);
}?>
 </div>

 <div class="education_col ptb-30">
<div class="container">
 <form name="education" id="education" action="test.php" method="POST" >
 <div class="title_col text-center">
 <h2>School Admission form</h2>
 <p>School Admission Forms are processed within 48 hrs.You will receive an email confirmation when we processyour application</p>
 </div>

 <div class="user_data">

  <div class="row">
 <div class="col-sm-3">
  <div class="form-group">
    <label for="FirstName">First Name</label>
    <input name="FirstName[]" type="text" class="form-control" id="FirstName" aria-describedby="FirstName" placeholder="First Name">

    <input name="FirstName" type="text" class="form-control" id="FirstName" aria-describedby="FirstName" placeholder="First Name">

  </div>
  </div>
  <div class="col-sm-3">
  <div class="form-group">
    <label for="LastName">Last Name</label>

    <input name="LastName[]" type="text" class="form-control" id="LastName" placeholder="Last Name">
=======
    <input name="LastName" type="text" class="form-control" id="LastName" placeholder="Last Name">

  </div>
  </div>
   <div class="col-sm-3">
  <div class="form-group">
    <label for="wantToapply">Class you want to apply for</label>

    <select name="wantToapply[]" class="form-control" id="wantToapply">

    <select name="wantToapply" class="form-control" id="wantToapply">

     <option value=''>Select Class</option>
      <option  value='1'>1</option>
      <option value='2'>2</option>
      <option value='3'>3</option>
      <option value='4'>4</option>
      <option value='5'>5</option>
    </select>
  </div>
  </div>
  <div class="col-sm-3">
  <div class="form-group" id="sandbox-container">
    <label for="sbirthDay">Student's birth Day</label>

    <input name="sbirthDay[]" type="text" class="form-control" id="sbirthDay" placeholder="DD/MM/YEAR">

    <input name="sbirthDay" type="text" class="form-control" id="sbirthDay" placeholder="DD/MM/YEAR">

  </div>
  </div>
   </div>
    <div class="row">
   
   <div class="col-sm-3">
  <div class="form-group">
    <label for="ParentName">Parent Name</label>
    <input name="ParentName[]" type="text" class="form-control" id="ParentName" placeholder="Parent Name">

    <input name="ParentName" type="text" class="form-control" id="ParentName" placeholder="Parent Name">
  </div>
  </div>
     <div class="col-sm-3">
  <div class="form-group">
    <label for="PhoneNumber">Phone Number</label>
    <input name="PhoneNumber[]" type="tel" class="form-control" id="PhoneNumber" placeholder="Phone Number">
    <input name="PhoneNumber" type="tel" class="form-control" id="PhoneNumber" placeholder="Phone Number">
  </div>
  </div>
<div class="col-sm-3">
  <div class="form-group">
    <label for="Adddress">Adddress</label>
    <input name="Adddress[]" type="text" class="form-control" id="Adddress" placeholder="Adddress">
    <input name="Adddress" type="text" class="form-control" id="Adddress" placeholder="Adddress">
  </div>
  </div>
    <div class="col-sm-3">
  <div class="form-group">
    <label for="email">Email</label>
    <input name="email[]" type="email" class="form-control" id="email" placeholder="Email">
  </div>
  </div>
    </div>
    </div>
    <div class="TextBoxContainer"></div>
    
    <div class="row">
      <div class="col"><button type="submit" id="submitbtn" class="btn btn-primary">Submit</button></div>
      <div class="col">
    <div class="addbtn_col"><a id="addbtn_col" class="fa fa-plus buttonAddMore blockAddMore pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add More Details"></a></div>
    </div>
    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
  </div>
  </div>
    </div>
    <div class="row">
      <div class="col"><button type="submit" id="submitbtn" class="btn btn-primary">Submit</button></div>
     </div>
</form>

</div>
</div>
<div class="main_table ptb-30">
<div class="container">
<table class="table table-bordered">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Class you want to apply for</th>
<th>Student's birth Day</th>
<th>Parent Name</th>
<th>Phone Number</th>
<th>Adddress</th>
<th>Email</th>
<th>Actions</th>
</tr>

 <?php  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {?>
		<tr>
       <?php echo "<td>".$row["FirstName"]."</td>";?>
       <?php echo "<td>".$row["LastName"]."</td>";?>
       <?php echo "<td>".$row["wantToapply"]."</td>";?>
       <?php echo "<td>".$row["sbirthDay"]."</td>";?>
       <?php echo "<td>".$row["ParentName"]."</td>";?>
       <?php echo "<td>".$row["PhoneNumber"]."</td>";?>
       <?php echo "<td>".$row["Adddress"]."</td>";?>
       <?php echo "<td>".$row["email"]."</td>";?>
        <?php echo "<td>".'<a class="btn btn-primary btn-xs" data-title="Edit" data-target="#edit"><span class="fa fa-pencil"></span></a><a class="btn btn-danger btn-xs" data-title="Delete" data-target="#delete"><span class="fa fa-trash"></span></a>'."</td>";?>
		</tr>
   <?php }
} else {
	?>
	<tr>
    <?php echo "<td colspan='9'>No record found</td>";?>
	</tr>
    <?php
}?>

 </table>
 
</div>
 </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
    $('#sandbox-container input').datepicker({
		 format: 'mm/dd/yyyy',
     endDate: '+1d',
datesDisabled: '+1d',
    });
	
$("#addbtn_col").click(function(){

   $(".TextBoxContainer").append('<div class="user_data"><div class="col-sm-12"><div class="row"><div class="removebtn_col"><a id="removebtn_col" class="fa fa-times buttonAddMore pull-right" data-toggle="tooltip" data-placement="top" title="Remove" data-original-title="Remove"></a></div></div></div><div class="row"><div class="col-sm-3"><div class="form-group"><label for="FirstName">First Name</label><input name="FirstName[]" type="text" class="form-control" id="FirstName" aria-describedby="FirstName" placeholder="First Name"></div></div><div class="col-sm-3"><div class="form-group"><label for="LastName">Last Name</label><input name="LastName[]" type="text" class="form-control" id="LastName" placeholder="Last Name"></div></div><div class="col-sm-3"><div class="form-group"><label for="wantToapply">Class you want to apply for</label><select name="wantToapply[]" class="form-control" id="wantToapply"><option value="">Select Class</option><option  value="1">1</option><option value="2">2</option> <option value="3">3</option><option value="4">4</option><option value="5">5</option></select></div></div><div class="col-sm-3"><div class="form-group" id="sandbox-container"><label for="sbirthDay[]">Students birth Day</label><input name="sbirthDay" type="text" class="form-control" id="sbirthDay" placeholder="DD/MM/YEAR"></div></div></div><div class="row"><div class="col-sm-3"><div class="form-group"><label for="ParentName">Parent Name</label><input name="ParentName[]" type="text" class="form-control" id="ParentName" placeholder="Parent Name"></div></div><div class="col-sm-3"><div class="form-group"><label for="PhoneNumber">Phone Number</label><input name="PhoneNumber[]" type="tel" class="form-control" id="PhoneNumber" placeholder="Phone Number"></div></div><div class="col-sm-3"><div class="form-group"><label for="Adddress">Adddress</label><input name="Adddress[]" type="text" class="form-control" id="Adddress" placeholder="Adddress"></div></div><div class="col-sm-3"><div class="form-group"><label for="email">Email</label><input name="email[]" type="email" class="form-control" id="email" placeholder="Email"></div></div></div>');

});
  $("body").on("click","#removebtn_col",function(e){
       $(this).parents('.user_data').remove();
      //the above method will remove the user_data div
  });
</script>
  </body>
</html>