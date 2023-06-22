<?php
echo "Welcome to Calculator website";
echo "<br><br><br>Enter the Details";

if(isset($_POST['cal']))
{
	$txt1=$_POST['n1'];
	$txt2=$_POST['n2'];
	$ans=$_POST['cal'];

	if($ans=="+")
		$res=$txt1+$txt2;
	else if($ans=="-")
		$res=$txt1-$txt2;
	elseif($ans=="x")
		$res=$txt1*$txt2;
	else if($ans=="/")
		$res=$txt1/$txt2;
}
?>
<html>
<form method="post" action="">
	<br>
	Enter Number 1:<input name="n1"
	value="<?php 
	echo $txt1=""; ?>">
	<br>
	<br>
	Enter Number 2:<input name="n2"
	value="<?php 
	echo $txt2=""; ?>">
	<br>
	<br>
	Result:<input name="res"
	value="<?php 
	echo $res; ?>">
	<br>
	<br>
	<br>
	<input type="submit" name="cal" value="+">
	<input type="submit" name="cal" value="-">
	<input type="submit" name="cal" value="x">
	<input type="submit" name="cal" value="/">
</form>

</html>