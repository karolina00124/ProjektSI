<?php
echo 'lets do it!!!'.PHP_EOL;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Example form</title>
</head>
<body>
<form method="post" action=" kartkowka3?type=new">
    <div>
     <label for="name">Name</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
  <input type="submit" name="send" value="send">
    </div>
</form>
</body>
</html>
<?php
var_dump($_POST);
var_dump($_GET);

?>