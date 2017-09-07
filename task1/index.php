<?php 
require_once('Form.php');

if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['email']))
{
    $data=array();
    $data['name']=!empty($_POST['name']) ?$_POST['name'] :'';
    $data['email']=!empty($_POST['email']) ?$_POST['email'] :'';
    $result=Form::saveToDB($data);
    if(!empty($result))
    {
        $msg= "Thanks for Signup for Newsletter";
		header("Location: http://localhost/Solutions/task1/data.php"); 
		exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tree House - Newsletters</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	.error{
		color:red;
	}
  </style>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Treehouse </h1>
  <p>Treehouse News Letter </p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <h3>Signup for Newsletter</h3>
        <div class="alert alert-success text-center"><?php echo !empty($msg) ? $msg :'';?></div>
	  <?php  Form::getForm(); ?>

    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
	$(function(){
		$('#frm').validate();
		$('#valid').change(function() {
			if ($(this).is(':checked')) {
				$('.form-control').removeClass('required');
				
			}else{
				$('.form-control').addClass('required');
			}
		});
		$('.alert').fadeOut(300);
	});
</script>

</body>
</html>
