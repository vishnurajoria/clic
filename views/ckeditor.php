<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
	<?php
if(isset($_POST))
{
	print_r($_POST);
}
	 ?>
	<form method='POST' action="<?php base_url().'/index.php/ckeditor';?>">
	<textarea name="content" id="content" ><p>Example data</p></textarea>
	<?php echo display_ckeditor($ckeditor); ?>
	<textarea name="content_2" id="content_2" ><p>Example data</p></textarea>
	<?php echo display_ckeditor($ckeditor_2); ?>
	<input type="submit" />
	</form>
</body>
</html>