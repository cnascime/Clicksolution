<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form method="post" action="check.php">
<?php
require_once('recaptchalib.php'); // reCAPTCHA Library
$pubkey = ""; // Public API Key
echo recaptcha_get_html($pubkey); // Display reCAPTCHA
?>
<input type="submit" value="Check" />
</form>

</body>
</html>