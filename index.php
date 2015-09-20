<!DOCTYPE html>
<html>
<head>
<title>Arranging your array</title>
</head>
<body>
<h2>Problem: Buld an array from a comma seperated list, display array, then sort list.</h2>
  <form method="POST">
    <input type="text" placeholder="Comma seperated list" name="items" />
      <input type="submit"/>
    </form>
<?php require_once('mylib.php');
enterArray();
sortMyArray($myEmptyList);
?>

</body>
</html>
