<?php
require('lib/print.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php print_title(); ?></title>
    </head>
    <body>
        <h1><a href='index.php'>7층</a></h1>        
        <ol>
            <?php print_contents(); ?>
        </ol>
        <a href="create.php">create</a>
        <h2><?php print_title(); ?></h2>
        <?php print_discription(); ?>
    </body>
</html>