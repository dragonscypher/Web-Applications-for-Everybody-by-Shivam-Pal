<?php
$md5 = "Not computed";
if ( isset($_GET['encode']) ) {
    $md5 = hash('md5', $_GET['encode']);
}
?>
<!DOCTYPE html>
<head><title>Shivam Pal MD5</title></head>
<body>
<h1>MD5 Maker</h1>
<p>MD5: <?= htmlentities($md5); ?></p>
<form>
<input type="text" name="md5" size="40" />
<input type="submit" value="Compute MD5"/>
</form>
<ul>
<li><a href="md5.php">Reset this page</a></li>
<li><a href="index.php">Back to Cracking</a></li>
</ul>
</body>
</html>
