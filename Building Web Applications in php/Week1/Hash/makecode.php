<?php
$error = false;
$md5 = false;
$code = "";
if ( isset($_GET['code']) ) {
    $code = $_GET['code'];
    if ( strlen($code) != 4 ) {
        $error = "Input must be exactly 4 characters";
    } else if ( $code[0] < "1" || $code[0] > "9" ||
                $code[1] < "1" || $code[1] > "9" ||
                $code[2] < "1" || $code[2] > "9" ||
                $code[3] < "1" || $code[3] > "9") {
        $error = "Input must four numeric digits";
    } else {
        $md5 = hash('md5', $code);
    }
}
?>
<!DOCTYPE html>
<head><title>Shivam Pal PIN Code</title></head>
<body>
<h1>MD5 PIN Maker</h1>
<?php
if ( $error !== false ) {
    print '<p style="color:red">';
    print htmlentities($error);
    print "</p>\n";
}

if ( $md5 !== false ) {
    print "<p>MD5 value: ".htmlentities($md5)."</p>";
}
?>
<p>Please enter a four numeric key for encoding.</p>
<form>
<input type="text" name="code" value="<?= htmlentities($code) ?>"/>
<input type="submit" value="Compute MD5 for CODE"/>
</form>
<ul>
<li><a href="makecode.php">Reset this page</a></li>
<li><a href="index.php">Back to Cracking</a></li>
</ul>
</body>
</html>
