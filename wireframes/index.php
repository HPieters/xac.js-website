<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XAC - Xen Api Console</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <?php
        if($_GET['image']) {
            $image_title = $_GET['image'];
            echo  '<img src="'.$image_title.'@2x.png" with="1200" height="2000" />';
        } else {
            echo '<center><img src="splash@2x.png" with="1200" height="886" /></center>';
        }
    ?>
</body>
</html>