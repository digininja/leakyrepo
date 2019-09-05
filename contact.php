<?php
$name="";
$email="";
$error="";
$success="";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$name = $_POST['name']; // required
	$email = $_POST['email']; // required

	if ($name == "" || $email == "") {
		$error = "Must give both values";
	} else {
		$success = "Thanks for that";
	}
}
?>

<?php
if ($success != "") {
	?>
	<?=$success?>
	<?php
}
?>
<?php
if ($error != "") {
	?>
	<?=$error?>
	<?php
}
?>
<form name="contactform" method="post" action="<?=$_SERVER['PHP_SELF']?>">
<table>
<tr>
<td>
<label for="name">First Name *</label>
</td>
<td>
<input value="<?=$name?>" type="text" name="name" maxlength="50" size="30">
</td>
<tr>
<td>
<label for="email">Email Address *</label>
</td>
<td>
<input value="<?=$email?>" type="text" name="email" maxlength="50" size="30">
</td>
<tr>
<td colspan="2" style="text-align:center">
<input type="submit" value="Submit">
</td>
</tr>
</table>
</form>
