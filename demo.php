<?php
include_once('MatrixVCode.php');

$mvc = new MatrixVCode();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>MatrixVCode Demo</title>
        <link rel="stylesheet" type="text/css" href="vcode.css" />
    </head>
    <body>
        <?php
        $rand_s = $mvc->render();
        echo $rand_s;
        ?>
    </body>
</html>
