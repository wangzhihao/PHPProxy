<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html style="display:none">
<head>
<title><!--[site_name]--></title>
<?=injectionJS();?>
</head>
<body>
<div id="wrapper">
	<form id="myform" action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);">
		<input type="text" name="u" id="input" value="google.com" size="40">
		<input type="submit" value="Go">
	</form>

        <script type="text/javascript">
          document.getElementById("myform").submit();
        </script>
</div>
</body>
</html>
