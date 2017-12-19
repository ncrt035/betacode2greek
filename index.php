<?php
  require_once "betacode2greek.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>betacode2greek</title>
</head>
<body>
  <h1>Betacode > Greek</h1>
  <form method="POST" action="encode.php">
    <label for"phrase">text(betacode): </label>
    <input id="phrase" type ="text" name="phrase" size="20">
    <input type="submit" value="encode">
  </form>

text(greek):
<?php
  print betacode2greek($_POST['phrase']);
?>

</body>
</html>
