<?php

$title = $title ? : 'Title page';

?>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div><h1><?php echo $title; ?> <?php echo mt_rand(); ?></h1></div>
    </body>
</html>

        