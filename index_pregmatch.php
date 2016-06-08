<html>
<body>
<p>Enter something here:<br>
<form name="Example" action="index.php" method="post">
<input type="text" name="data" style="width: 300px;">
<input type="submit" value="submit">
</form></center>
<?php
if(isset($_POST["data"])) {
$mydata = $_POST["data"];
if(preg_match('/^[a-zA-Z0-9_.]+$/', $mydata)) {
$submit = escapeshellcmd($mydata);
$query = shell_exec("powershell -command C:\\inetpub\\ps.ps1 $submit");
echo "It worked: $query";
} else {
echo "Invalid character";
}
}

?>