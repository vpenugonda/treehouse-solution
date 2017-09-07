<?php
include ('Config.php');
class Form{
    function __construct()
    {

    }
	function getForm()
	{

		echo '
				<form name="th_nl" id="frm" method="POST" action="'.$_SERVER['PHP_SELF'].'">
					<div class="form-group">
						<label class="control-label">Name</label>
						<input type="text"  class="form-control required" name="name" id="name" />
					</div>
					<div class="form-group">
						<label class="control-label">Email</label>
						<input type="email" class="form-control required" name="email" id="email"/>
					</div>
					<div class="form-group">
					
						<label class="control-label">
						<input type="checkbox" class="checkbox-inline" name="validation" id="valid"/>Disable Validation</label>
					</div>
					
					<div class="form-group">
						<input type="submit" class="btn btn-success" name="submit" id="" value="Submit"/>
					</div>
				</form>
			';
	}
	function saveToDB($data)
	{
        $obj=new Config();
        $sql="INSERT INTO newsletters (name,email)VALUES('".$data['name']."','".$data['email']."')";
        return $obj->insert($sql);

	}
	function displaySubmissions()
	{
        $obj=new Config();
		$sql_newsletters = "SELECT * FROM newsletters ORDER BY created_on DESC";
        $data=$obj->select($sql_newsletters);
        return $data;

	}

}
?>