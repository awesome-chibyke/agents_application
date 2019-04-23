<?php 
$msg = '';
if(isset($_POST['sub'])){
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
		if(!empty($val1)&&!empty($val2)){
			$sum = $val1 + $val2;
			$msg = $sum;
		}else{
			$msg = 'Please fill all fileds!';
		}
}
?>
<h3 align="center">Calculate the sum of two numbers</h3>
<h6 align="center">
	<form method="post" action="" enctype="multipart/form-data">
		<label>Value 1</label> 
		<input name="val1" type="number"><br /><br />
		<label>Value 2</label> 
		<input name="val2" type="number"><br /><br />
		<span><h3 style="color: #B2B934;"><?php print $msg;?></h3></span>
		<input type="submit" name="sub" value="Calculate">
	</form>
</h6>