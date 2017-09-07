<?php

	class Register{
		public $_name;
		public $_email;
		
		public function __construct ($name, $email){
			$this->_name = $name;
			$this->_email = $email;
			
		}
	}

	$_name = $_POST['form-name'];
	$_email = $_POST['form-email'];
	
	$res = mysqli_query($link, "INSERT INTO `registrations` (`reg_name`, `reg_email_id`, `reg_date`) VALUES ('$_name', '$_email', NOW())");
	
?>