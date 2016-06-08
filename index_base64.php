<html>
<body>
<p>Enter something here:<br>
<form name="Example" action="index_base64.php" method="post">
<input type="text" name="data" style="width: 300px;">
<input type="submit" value="submit">
</form></center>
<?php
if(isset($_POST["data"])) {
$mydata = base64_encode ($_POST["data"]);
$query = shell_exec("powershell -command C:\\inetpub\\ps_base64.ps1 $mydata");
echo "It worked: $query";
}

?>

</code>
